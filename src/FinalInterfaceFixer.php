<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Solid\FinalInterfaceFixer as OriginalFixer;

final class FinalInterfaceFixer extends Proxy\ConfigurableFixer
{
    public const NAME = 'Symplify/final_interface';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
