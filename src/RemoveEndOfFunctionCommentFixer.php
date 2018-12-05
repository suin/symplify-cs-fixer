<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Commenting\RemoveEndOfFunctionCommentFixer as OriginalFixer;

final class RemoveEndOfFunctionCommentFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/remove_end_of_function_comment';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
