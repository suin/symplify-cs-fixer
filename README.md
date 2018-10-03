# suin/symplify-cs-fixer

Make [Symplify Coding Standard]'s fixers work with [PHP-CS-Fixer].

[Symplify Coding Standard]: https://github.com/Symplify/CodingStandard
[PHP-CS-Fixer]: https://github.com/FriendsOfPHP/PHP-CS-Fixer

Since Symplify Coding Standard's fixers designed for [EasyCodingStandard], its don't work in PHP-CS-Fixer config (`.php_cs` or `.php_cs.dist`). This library provide an adaptor layer that brige the gap between PHP-CS-Fixer and Symplify Coding Standard.

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

use SymplifyCsFixer\SymplifyFixers;

$symplifyFixers = new SymplifyFixers();

return PhpCsFixer\Config::create()
    ->registerCustomFixers(
        [
            $symplifyFixers('standalone_line_in_multiline_array'),
            $symplifyFixers('block_property_comment'),
            $symplifyFixers('remove_empty_doc_block'),
            $symplifyFixers('remove_superfluous_doc_block_whitespace'),
            $symplifyFixers('remove_useless_doc_block'),
            $symplifyFixers('require_followed_by_absolute_path'),
            $symplifyFixers('line_length'),
            $symplifyFixers('property_name_matching_type'),
            $symplifyFixers('method_order_by_type'),
            $symplifyFixers('class_string_to_class_constant'),
            $symplifyFixers('array_property_default_value'),
            $symplifyFixers('final_interface'),
            $symplifyFixers('blank_line_after_strict_types'),
        ]
    )
    ->setRules(
        [
            ... other rules ...
            'Symplify/standalone_line_in_multiline_array' => true,
            'Symplify/block_property_comment' => true,
            'Symplify/remove_empty_doc_block' => true,
            'Symplify/remove_superfluous_doc_block_whitespace' => true,
            'Symplify/remove_useless_doc_block' => true,
            'Symplify/require_followed_by_absolute_path' => true,
            'Symplify/line_length' => [
                'line_length' => 80,
                'break_long_lines' => true,
                'inline_short_lines' => true,
            ],
            'Symplify/property_name_matching_type' => true,
            'Symplify/method_order_by_type' => true,
            'Symplify/class_string_to_class_constant' => true,
            'Symplify/array_property_default_value' => true,
            'Symplify/final_interface' => true,
            'Symplify/blank_line_after_strict_types' => true,
        ]
    )
    ->setFinder(
        ...
    );

```

Then run it with the command:

```
vendor/bin/php-cs-fixer fix --dry-run --diff --diff-format=udiff --verbose
```

## Changelog

Please see [CHANGELOG](https://github.com/suin/php/blob/master/CHANGELOG.md) for more details.

## Contributing

Send [issue](https://github.com/suin/php/issues) or [pull-request](https://github.com/suin/php/pulls) to main repository.
