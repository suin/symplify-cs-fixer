<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use PhpCsFixer\Fixer\FixerInterface;
use Psr\Container\ContainerInterface;
use Symplify\EasyCodingStandard\DependencyInjection\ContainerFactory;

final class SymplifyFixers
{
    private const CONFIG_FILE = __DIR__ . '/../config/services.yml';

    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct()
    {
        $containerFactory = new ContainerFactory();
        $this->container = $containerFactory->createWithConfigs(
            [self::CONFIG_FILE]
        );
    }

    public function __invoke(string $fixerClass): FixerInterface
    {
        return $this->get($fixerClass);
    }

    private function get(string $fixerClass): FixerInterface
    {
        return $this->container->get($fixerClass);
    }
}
