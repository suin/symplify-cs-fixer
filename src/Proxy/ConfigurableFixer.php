<?php

declare(strict_types=1);

namespace SymplifyCsFixer\Proxy;

use PhpCsFixer\Fixer\ConfigurableFixerInterface;

abstract class ConfigurableFixer extends FixerProxy implements ConfigurableFixerInterface
{
    final public function configure(array $configuration = null): void
    {
        /** @var ConfigurableFixerInterface $fixer */
        $fixer = $this->getFixer();
        $fixer->configure($configuration);
    }
}
