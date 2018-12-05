<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Commenting\RemoveEmptyDocBlockFixer as OriginalFixer;

final class RemoveEmptyDocBlockFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/remove_empty_doc_block';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
