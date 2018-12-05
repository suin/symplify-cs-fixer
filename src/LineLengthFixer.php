<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer as OriginalFixer;

final class LineLengthFixer extends Proxy\ConfigurableFixer
{
    public const NAME = 'Symplify/line_length';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
