<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Php\ClassStringToClassConstantFixer as OriginalFixer;

final class ClassStringToClassConstantFixer extends Proxy\ConfigurableFixer
{
    public const NAME = 'Symplify/class_string_to_class_constant';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
