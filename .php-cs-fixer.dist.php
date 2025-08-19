<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->in(__DIR__)
    ->exclude(__DIR__ . '/vendor');

return new Config()
    ->setFinder($finder)
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PhpCsFixer' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'yoda_style' => false,
    ]);
