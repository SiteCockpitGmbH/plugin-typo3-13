<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'easyVision by SiteCockpit',
    'description' => 'Integrate SiteCockpit into TYPO3: With SiteCockpit’s easyVision, your visitors can customize the website to their needs—for more accessibility and a better user experience. Integration takes just a few minutes!',
    'category' => 'plugin',
    'author' => 'Site Cockpit GmbH',
    'author_email' => 'kontakt@sitecockpit.com',
    'author_company' => 'Site Cockpit GmbH',
    'state' => 'stable',
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
    'version' => '1.0.1',
];
