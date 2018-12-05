<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\ControlStructure\RequireFollowedByAbsolutePathFixer as OriginalFixer;

final class RequireFollowedByAbsolutePathFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/require_followed_by_absolute_path';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
