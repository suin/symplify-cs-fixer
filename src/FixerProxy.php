<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;

abstract class FixerProxy implements FixerInterface
{
    /**
     * @var FixerInterface
     */
    private $fixer;

    public function __construct(FixerInterface $fixer)
    {
        $this->fixer = $fixer;
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
        return 'Symplify/' . $this->getRuleName();
    }

    final public function getPriority(): int
    {
        return $this->fixer->getPriority();
    }

    final public function supports(SplFileInfo $file): bool
    {
        return $this->fixer->supports($file);
    }

    protected function fixer(): FixerInterface
    {
        return $this->fixer;
    }

    private function getRuleName(): string
    {
        $className = \get_class($this->fixer);
        $ruleName = \preg_replace('/^.+\\\\(.+)Fixer$/', '$1', $className);
        $ruleName = \preg_replace('/([A-Z])/', '_$1', $ruleName);
        $ruleName = \ltrim($ruleName, '_');
        $ruleName = \strtolower($ruleName);
        return $ruleName;
    }
}
