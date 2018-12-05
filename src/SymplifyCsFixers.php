<?php

declare(strict_types=1);

namespace SymplifyCsFixer;

use IteratorAggregate;
use Symfony\Component\Finder\Finder;

final class SymplifyCsFixers implements IteratorAggregate
{
    public function getIterator(): iterable
    {
        $finder = new Finder();
        $finder->in(__DIR__)->name('*Fixer.php')->sortByName()->depth(0);

        foreach ($finder->getIterator() as $file) {
            $class = \substr($file->getFilename(), 0, -4);
            $fqcn = __NAMESPACE__ . '\\' . $class;
            yield new $fqcn();
        }
    }
}
