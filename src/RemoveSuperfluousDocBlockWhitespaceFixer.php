<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Commenting\RemoveSuperfluousDocBlockWhitespaceFixer as OriginalFixer;

final class RemoveSuperfluousDocBlockWhitespaceFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/remove_superfluous_doc_block_whitespace';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
