<?php

declare(strict_types=1);

namespace SymplifyCsFixer\Container;

use PhpCsFixer\Fixer\DefinedFixerInterface;
use Psr\Container\ContainerInterface;
use Symplify\EasyCodingStandard\DependencyInjection\ContainerFactory;

final class Container
{
    private const CONFIG_FILE = __DIR__ . '/../../config/services.yml';

    /**
     * @var ContainerInterface
     */
    private $container;

    private function __construct()
    {
        $containerFactory = new ContainerFactory();
        $this->container = $containerFactory->createWithConfigs(
            [self::CONFIG_FILE]
        );
    }

    public static function get(string $fixerClass): DefinedFixerInterface
    {
        return self::getInstance()->getFixer($fixerClass);
    }

    private static function getInstance(): self
    {
        static $instance;
        return $instance ?? $instance = new self();
    }

    private function getFixer(string $fixerClass): DefinedFixerInterface
    {
        return $this->container->get($fixerClass);
    }
}
