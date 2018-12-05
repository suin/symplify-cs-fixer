<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer as OriginalFixer;

final class ParamReturnAndVarTagMalformsFixer extends Proxy\FixerProxy
{
    public const NAME = 'Symplify/param_return_and_var_tag_malforms';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
