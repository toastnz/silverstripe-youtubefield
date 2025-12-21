<?php

declare(strict_types=1);

use Cambis\SilverstripeRector\Set\ValueObject\SilverstripeLevelSetList;
use Cambis\SilverstripeRector\Set\ValueObject\SilverstripeSetList;
use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withImportNames(removeUnusedImports: true, importShortClasses: false)
    ->withPaths([
        __DIR__ . '/_config.php',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withSets([
        SilverstripeLevelSetList::UP_TO_SILVERSTRIPE_60,
        SilverstripeSetList::CODE_QUALITY,
        PHPUnitSetList::PHPUNIT_110,
    ]);