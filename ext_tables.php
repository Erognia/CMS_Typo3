<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Mris.' . $_EXTKEY,
	'Pi1',
	'Catalogue'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'CatalogueMorganeStephane');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mriscatalogue_domain_model_produit', 'EXT:mris_catalogue/Resources/Private/Language/locallang_csh_tx_mriscatalogue_domain_model_produit.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mriscatalogue_domain_model_produit');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mriscatalogue_domain_model_categorie', 'EXT:mris_catalogue/Resources/Private/Language/locallang_csh_tx_mriscatalogue_domain_model_categorie.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mriscatalogue_domain_model_categorie');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mriscatalogue_domain_model_marchand', 'EXT:mris_catalogue/Resources/Private/Language/locallang_csh_tx_mriscatalogue_domain_model_marchand.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mriscatalogue_domain_model_marchand');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mriscatalogue_domain_model_caracteristique', 'EXT:mris_catalogue/Resources/Private/Language/locallang_csh_tx_mriscatalogue_domain_model_caracteristique.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mriscatalogue_domain_model_caracteristique');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mriscatalogue_domain_model_valeurcaracteristique', 'EXT:mris_catalogue/Resources/Private/Language/locallang_csh_tx_mriscatalogue_domain_model_valeurcaracteristique.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mriscatalogue_domain_model_valeurcaracteristique');
