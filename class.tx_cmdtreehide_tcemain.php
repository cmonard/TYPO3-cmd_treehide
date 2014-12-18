<?php

class tx_cmdtreehide_tcemain implements t3lib_Singleton {

        public function processDatamap_afterDatabaseOperations($status, $table, $id, $fieldArray, $pObj) {
                if ($status == 'update' && $table == 'pages' && t3lib_div::inArray(array_keys($fieldArray), 'hidden') && $GLOBALS['BE_USER']->uc['recursiveTreeHide']) {
                        $perms_clause = $GLOBALS['BE_USER']->getPagePermsClause(1);
                        $queryGenerator = t3lib_div::makeInstance('t3lib_queryGenerator');
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
