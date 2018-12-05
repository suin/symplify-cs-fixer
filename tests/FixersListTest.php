<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use PHPUnit\Framework\TestCase;

/** @noinspection EfferentObjectCouplingInspection */
class FixersListTest extends TestCase
{
    public function test_list_fixers(): void
    {
        $expectedList = $this->getExpectedFixers();
        $actualList = \iterator_to_array(new SymplifyCsFixers());
        self::assertSameClasses($expectedList, $actualList);
    }

    private function getExpectedFixers(): array
    {
        return [
            new ArrayPropertyDefaultValueFixer(),
            new BlankLineAfterStrictTypesFixer(),
            new BlockPropertyCommentFixer(),
            new ClassStringToClassConstantFixer(),
            new FinalInterfaceFixer(),
            new LineLengthFixer(),
            new MethodOrderByTypeFixer(),
            new ParamReturnAndVarTagMalformsFixer(),
            new PrivateMethodOrderByUseFixer(),
            new PropertyNameMatchingTypeFixer(),
            new PropertyOrderByComplexityFixer(),
            new RemoveEmptyDocBlockFixer(),
            new RemoveEndOfFunctionCommentFixer(),
            new RemoveSuperfluousDocBlockWhitespaceFixer(),
            new RemoveUselessDocBlockFixer(),
            new RequireFollowedByAbsolutePathFixer(),
            new StandaloneLineInMultilineArrayFixer(),
        ];
    }

    private static function assertSameClasses(
        array $expectedList,
        array $actualList
    ): void {
        $expectedClasses = \array_map('\get_class', $expectedList);
        $actualClasses = \array_map('\get_class', $actualList);
        self::assertSame($expectedClasses, $actualClasses);
    }
}
