<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cmd_treehide".
 *
 * Auto generated 19-12-2014 09:13
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'CMD Recursive tree hider',
	'description' => 'Enable the possibility to (un)hide an entire tree at once',
	'category' => 'be',
	'shy' => false,
	'version' => '1.0.1',
	'dependencies' => 'cms,php,typo3',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => NULL,
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => true,
	'lockType' => '',
	'author' => 'Christophe Monard',
	'author_email' => 'contact@cmonard.fr',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '4.5.0-6.2.99',
			'php' => '5.3.7-5.4.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>