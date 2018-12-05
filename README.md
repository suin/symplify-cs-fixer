# suin/symplify-cs-fixer

Make [Symplify Coding Standard]'s fixers work with [PHP-CS-Fixer].

[Symplify Coding Standard]: https://github.com/Symplify/CodingStandard
[PHP-CS-Fixer]: https://github.com/FriendsOfPHP/PHP-CS-Fixer

Since Symplify Coding Standard's fixers designed for [EasyCodingStandard], its don't work in PHP-CS-Fixer config (`.php_cs` or `.php_cs.dist`). This library provide an adaptor layer that bridge the gap between PHP-CS-Fixer and Symplify Coding Standard.

[EasyCodingStandard]: https://github.com/Symplify/EasyCodingStandard 

## Installation

```
composer require --dev suin/symplify-cs-fixer
```

## Usage

At first, create a PHP-CS-Fixer ruleset XML (`.php_cs.dist` or `.php_cs`) file in the root of your project.

```php
<?php

declare(strict_types=1);

return PhpCsFixer\Config::create()
    ->registerCustomFixers(new SymplifyCsFixer\SymplifyCsFixers())
    ->setRules(
        [
            SymplifyCsFixer\ArrayPropertyDefaultValueFixer::NAME => true,
            SymplifyCsFixer\BlankLineAfterStrictTypesFixer::NAME => true,
            SymplifyCsFixer\BlockPropertyCommentFixer::NAME => true,
            SymplifyCsFixer\ClassStringToClassConstantFixer::NAME => true,
            SymplifyCsFixer\FinalInterfaceFixer::NAME => true,
            SymplifyCsFixer\LineLengthFixer::NAME => [
                'line_length' => 80,
                'break_long_lines' => true,
                'inline_short_lines' => true,
            ],
            SymplifyCsFixer\MethodOrderByTypeFixer::NAME => true,
            SymplifyCsFixer\ParamReturnAndVarTagMalformsFixer::NAME => true,
            SymplifyCsFixer\PrivateMethodOrderByUseFixer::NAME => true,
            SymplifyCsFixer\PropertyNameMatchingTypeFixer::NAME => true,
            SymplifyCsFixer\PropertyOrderByComplexityFixer::NAME => true,
            SymplifyCsFixer\RemoveEmptyDocBlockFixer::NAME => true,
            SymplifyCsFixer\RemoveEndOfFunctionCommentFixer::NAME => true,
            SymplifyCsFixer\RemoveSuperfluousDocBlockWhitespaceFixer::NAME => true,
            SymplifyCsFixer\RemoveUselessDocBlockFixer::NAME => true,
            SymplifyCsFixer\RequireFollowedByAbsolutePathFixer::NAME => true,
            SymplifyCsFixer\StandaloneLineInMultilineArrayFixer::NAME => true,  
        ]
    )
    // ...
    ;
```

Then run it with the command:

```
vendor/bin/php-cs-fixer fix --dry-run --diff --diff-format=udiff --verbose
```

## Changelog

Please see [CHANGELOG](https://github.com/suin/php/blob/master/CHANGELOG.md) for more details.

## Contributing

Send [issue](https://github.com/suin/php/issues) or [pull-request](https://github.com/suin/php/pulls) to main repository.
