<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Order\PropertyOrderByComplexityFixer as OriginalFixer;

final class PropertyOrderByComplexityFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/property_order_by_complexity';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
