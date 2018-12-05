<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Commenting\BlockPropertyCommentFixer as OriginalFixer;

final class BlockPropertyCommentFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/block_property_comment';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
