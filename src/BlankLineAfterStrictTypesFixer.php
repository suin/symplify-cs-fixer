<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Strict\BlankLineAfterStrictTypesFixer as OriginalFixer;

final class BlankLineAfterStrictTypesFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/blank_line_after_strict_types';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
