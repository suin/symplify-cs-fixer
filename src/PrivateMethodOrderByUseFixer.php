<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Order\PrivateMethodOrderByUseFixer as OriginalFixer;

final class PrivateMethodOrderByUseFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/private_method_order_by_use';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
