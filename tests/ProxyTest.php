<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\Fixer\DefinedFixerInterface;
use PHPUnit\Framework\TestCase;
use SymplifyCsFixer\Proxy\FixerProxy;

/** @noinspection EfferentObjectCouplingInspection */
class ProxyTest extends TestCase
{
    private const CONFIGURABLE = true;

    private const UNCONFIGURABLE = false;

    /**
     * @dataProvider getDefinedFixers
     */
    public function test_defined_fixers(
        string $proxyClass,
        string $name,
        bool $isConfigurable
    ): void {
        /** @var FixerProxy & string $proxyClass */
        /** @var FixerProxy $fixer */
        $fixer = new $proxyClass();
        self::assertInstanceOf(DefinedFixerInterface::class, $fixer);

        if ($isConfigurable) {
            self::assertConfigurableFixer($fixer);
        } else {
            self::assertNotConfigurableFixer($fixer);
        }
        self::assertSame($name, $fixer->getName());
        self::assertSame($name, $proxyClass::NAME);
    }

    public function getDefinedFixers(): iterable
    {
        return [
            [
                StandaloneLineInMultilineArrayFixer::class,
                'Symplify/standalone_line_in_multiline_array',
                self::UNCONFIGURABLE,
            ],
            [
                BlockPropertyCommentFixer::class,
                'Symplify/block_property_comment',
                self::UNCONFIGURABLE,
            ],
            [
                ParamReturnAndVarTagMalformsFixer::class,
                'Symplify/param_return_and_var_tag_malforms',
                self::UNCONFIGURABLE,
            ],
            [
                RemoveEmptyDocBlockFixer::class,
                'Symplify/remove_empty_doc_block',
                self::UNCONFIGURABLE,
            ],
            [
                RemoveEndOfFunctionCommentFixer::class,
                'Symplify/remove_end_of_function_comment',
                self::UNCONFIGURABLE,
            ],
            [
                RemoveSuperfluousDocBlockWhitespaceFixer::class,
                'Symplify/remove_superfluous_doc_block_whitespace',
                self::UNCONFIGURABLE,
            ],
            [
                RemoveUselessDocBlockFixer::class,
                'Symplify/remove_useless_doc_block',
                self::CONFIGURABLE,
            ],
            [
                RequireFollowedByAbsolutePathFixer::class,
                'Symplify/require_followed_by_absolute_path',
                self::UNCONFIGURABLE,
            ],
            [
                LineLengthFixer::class,
                'Symplify/line_length',
                self::CONFIGURABLE,
            ],
            [
                PropertyNameMatchingTypeFixer::class,
                'Symplify/property_name_matching_type',
                self::CONFIGURABLE,
            ],
            [
                MethodOrderByTypeFixer::class,
                'Symplify/method_order_by_type',
                self::CONFIGURABLE,
            ],
            [
                PrivateMethodOrderByUseFixer::class,
                'Symplify/private_method_order_by_use',
                self::UNCONFIGURABLE,
            ],
            [
                PropertyOrderByComplexityFixer::class,
                'Symplify/property_order_by_complexity',
                self::UNCONFIGURABLE,
            ],
            [
                ClassStringToClassConstantFixer::class,
                'Symplify/class_string_to_class_constant',
                self::CONFIGURABLE,
            ],
            [
                ArrayPropertyDefaultValueFixer::class,
                'Symplify/array_property_default_value',
                self::UNCONFIGURABLE,
            ],
            [
                FinalInterfaceFixer::class,
                'Symplify/final_interface',
                self::CONFIGURABLE,
            ],
            [
                BlankLineAfterStrictTypesFixer::class,
                'Symplify/blank_line_after_strict_types',
                self::UNCONFIGURABLE,
            ],
        ];
    }

    private static function assertConfigurableFixer(FixerProxy $fixer): void
    {
        self::assertInstanceOf(ConfigurableFixerInterface::class, $fixer);
    }

    private static function assertNotConfigurableFixer(FixerProxy $fixer): void
    {
        self::assertNotInstanceOf(
            ConfigurableFixerInterface::class,
            $fixer
        );
    }
}
