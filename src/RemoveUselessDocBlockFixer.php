<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Commenting\RemoveUselessDocBlockFixer as OriginalFixer;

final class RemoveUselessDocBlockFixer extends Proxy\ConfigurableFixer
{
    public const NAME = 'Symplify/remove_useless_doc_block';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
