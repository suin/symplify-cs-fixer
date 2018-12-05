<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Order\MethodOrderByTypeFixer as OriginalFixer;

final class MethodOrderByTypeFixer extends Proxy\ConfigurableFixer
{
    public const NAME = 'Symplify/method_order_by_type';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
