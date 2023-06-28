<?php

/**
 * Extension Manager/Repository config file for ext "base_vite_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Base Vite Sitepackage',
    'description' => 'This sitepackage is the base for TYPO3 with Vite and Bootstrap',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\BaseViteSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '11.0.0',
];
