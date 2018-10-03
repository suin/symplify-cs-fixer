<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use PhpCsFixer\Fixer\DefinedFixerInterface;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;

final class Unconfigurable extends FixerProxy implements DefinedFixerInterface
{
    /**
     * @var DefinedFixerInterface
     */
    private $definedFixer;

    public function __construct(DefinedFixerInterface $fixer)
    {
        $this->definedFixer = $fixer;
        parent::__construct($fixer);
    }

    public function getDefinition(): FixerDefinitionInterface
    {
        return $this->definedFixer->getDefinition();
    }
}
