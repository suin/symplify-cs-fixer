<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\Fixer\DefinedFixerInterface;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use TypeError;

final class Configurable extends FixerProxy implements ConfigurableFixerInterface, DefinedFixerInterface
{
    /**
     * @var ConfigurableFixerInterface & DefinedFixerInterface
     */
    private $configurableFixer;

    public function __construct(ConfigurableFixerInterface $configurableFixer)
    {
        if (!$configurableFixer instanceof DefinedFixerInterface) {
            throw new TypeError(
                \sprintf(
                    'Argument given #0 must be instance of %s & %s',
                    ConfigurableFixerInterface::class,
                    DefinedFixerInterface::class
                )
            );
        }
        $this->configurableFixer = $configurableFixer;
        parent::__construct($configurableFixer);
    }

    public function configure(array $configuration = null): void
    {
        $this->configurableFixer->configure($configuration);
    }

    public function getDefinition(): FixerDefinitionInterface
    {
        return $this->configurableFixer->getDefinition();
    }
}
