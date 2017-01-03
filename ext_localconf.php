<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mris.' . $_EXTKEY,
	'Pi1',
	array(
		'Produit' => 'list, show, focus',
		'Marchand' => 'list',
		'Categorie' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Produit' => '',
		'Categorie' => '',
		'Marchand' => '',
		'Caracteristique' => '',
		'ValeurCaracteristique' => '',
		
	)
);
