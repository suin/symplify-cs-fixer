<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer as OriginalFixer;

final class StandaloneLineInMultilineArrayFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/standalone_line_in_multiline_array';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
