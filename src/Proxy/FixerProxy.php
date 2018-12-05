<?php

declare(strict_types=1);

namespace SymplifyCsFixer\Proxy;

use PhpCsFixer\Fixer\DefinedFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use SymplifyCsFixer\Container\Container;

abstract class FixerProxy implements DefinedFixerInterface
{
    public const NAME = '';

    protected const ORIGINAL_FIXER_CLASS = '';

    /**
     * @var DefinedFixerInterface
     */
    private $fixer;

    final public function __construct()
    {
        $this->fixer = self::getFixerFromContainer();
    }

    final public function isCandidate(Tokens $tokens): bool
    {
        return $this->fixer->isCandidate($tokens);
    }

    final public function isRisky(): bool
    {
        return $this->fixer->isRisky();
    }

    final public function fix(SplFileInfo $file, Tokens $tokens): void
    {
        $this->fixer->fix($file, $tokens);
    }

    final public function getName(): string
    {
        return static::NAME;
    }

    final public function getPriority(): int
    {
        return $this->fixer->getPriority();
    }

    final public function supports(SplFileInfo $file): bool
    {
        return $this->fixer->supports($file);
    }

    final public function getDefinition(): FixerDefinitionInterface
    {
        return $this->fixer->getDefinition();
    }

    final protected function getFixer(): FixerInterface
    {
        return $this->fixer;
    }

    private static function getFixerFromContainer(): DefinedFixerInterface
    {
        return Container::get(static::ORIGINAL_FIXER_CLASS);
    }
}
