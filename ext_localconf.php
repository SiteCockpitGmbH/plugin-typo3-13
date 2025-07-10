<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:scp_easyvision_typo3/Configuration/TypoScript/constants.typoscript'",
    false
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:scp_easyvision_typo3/Configuration/TypoScript/setup.typoscript'",
    false
);
