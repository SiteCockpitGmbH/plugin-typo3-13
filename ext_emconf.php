<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'easyVision',
    'description' => 'tbd',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SiteCockpit\\EasyVision\\Typo3\\' => 'Classes/',
        ],
    ],
    'clearCacheOnLoad' => 1,
];
