<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Property\ArrayPropertyDefaultValueFixer as OriginalFixer;

final class ArrayPropertyDefaultValueFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/array_property_default_value';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
