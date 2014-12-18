<?php

if (!defined('TYPO3_MODE')) {
        die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
        if (version_compare(TYPO3_branch, '6.0', '<')) {
                t3lib_extMgm::addLLrefForTCAdescr(
                        '_MOD_user_setup',
                        'EXT:cmd_treehide/locallang_csh_mod.xml'
                );
                $TYPO3_USER_SETTINGS['columns']['recursiveTreeHide'] = array(
                    'csh' => 'recursiveTreeHide',
                    'label' => 'LLL:EXT:cmd_treehide/locallang.xml:recursiveTreeHide',
                    'type' => 'check'
                );
                t3lib_extMgm::addFieldsToUserSettings('recursiveTreeHide', 'before:recursiveDelete');
                $TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] = 'EXT:cmd_treehide/class.tx_cmdtreehide_tcemain.php:&tx_cmdtreehide_tcemain';
        } else {
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
                        '_MOD_user_setup',
                        'EXT:cmd_treehide/Resources/Private/Language/locallang_csh_mod.xlf'
                );
                $GLOBALS['TYPO3_USER_SETTINGS']['columns']['recursiveTreeHide'] = array(
                    'csh' => 'recursiveTreeHide',
                    'label' => 'LLL:EXT:cmd_treehide/Resources/Private/Language/locallang.xlf:recursiveTreeHide',
                    'type' => 'check'
                );
                TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToUserSettings('recursiveTreeHide', 'before:recursiveDelete');
                $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] = '&CMD\\CmdTreehide\\Hook\\Datamap';
        }
}
