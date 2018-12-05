<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use Symplify\CodingStandard\Fixer\Naming\PropertyNameMatchingTypeFixer as OriginalFixer;

final class PropertyNameMatchingTypeFixer extends Proxy\ConfigurableFixer
{
    public const NAME = 'Symplify/property_name_matching_type';

    protected const ORIGINAL_FIXER_CLASS = OriginalFixer::class;
}
