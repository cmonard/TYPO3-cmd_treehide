<?php

namespace CMD\CmdTreehide\Hook;

class Datamap implements \TYPO3\CMS\Core\SingletonInterface {

        public function processDatamap_afterDatabaseOperations($status, $table, $id, $fieldArray, \TYPO3\CMS\Core\DataHandling\DataHandler $pObj) {
                if ($status == 'update' && $table == 'pages' && \TYPO3\CMS\Core\Utility\GeneralUtility::inArray(array_keys($fieldArray), 'hidden') && $GLOBALS['BE_USER']->uc['recursiveTreeHide']) {
                        $perms_clause = $GLOBALS['BE_USER']->getPagePermsClause(1);
                        $queryGenerator = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Database\\QueryGenerator');
                        $pidList = $queryGenerator->getTreeList($id, 99, 0, $perms_clause);
                        if ($pidList != '') {
                                $updArray = array(
                                    'hidden' => $fieldArray['hidden'],
                                    'tstamp' => $GLOBALS['EXEC_TIME'],
                                );
                                $GLOBALS['TYPO3_DB']->exec_UPDATEquery($table, 'uid IN (' . $pidList . ')', $updArray);
                        }
                }
        }

}
