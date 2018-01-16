<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ESSRRTPW.MediaEssrrtpw',
            'Pi1',
            'Liste de médias (essrrtpw)'
        );

        $pluginSignature = str_replace('_', '', 'media_essrrtpw') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:media_essrrtpw/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ESSRRTPW.MediaEssrrtpw',
            'Pi2',
            'Liste d\&#039;auteurs (essrrtpw)'
        );

        $pluginSignature = str_replace('_', '', 'media_essrrtpw') . '_pi2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:media_essrrtpw/Configuration/FlexForms/flexform_pi2.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ESSRRTPW.MediaEssrrtpw',
            'Pi3',
            'Recommandations (essrrtpw)'
        );

        $pluginSignature = str_replace('_', '', 'media_essrrtpw') . '_pi3';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:media_essrrtpw/Configuration/FlexForms/flexform_pi3.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('media_essrrtpw', 'Configuration/TypoScript', 'Media ESSRRTPW');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediaessrrtpw_domain_model_media', 'EXT:media_essrrtpw/Resources/Private/Language/locallang_csh_tx_mediaessrrtpw_domain_model_media.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediaessrrtpw_domain_model_media');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediaessrrtpw_domain_model_social', 'EXT:media_essrrtpw/Resources/Private/Language/locallang_csh_tx_mediaessrrtpw_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediaessrrtpw_domain_model_social');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediaessrrtpw_domain_model_review', 'EXT:media_essrrtpw/Resources/Private/Language/locallang_csh_tx_mediaessrrtpw_domain_model_review.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediaessrrtpw_domain_model_review');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediaessrrtpw_domain_model_author', 'EXT:media_essrrtpw/Resources/Private/Language/locallang_csh_tx_mediaessrrtpw_domain_model_author.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediaessrrtpw_domain_model_author');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediaessrrtpw_domain_model_type', 'EXT:media_essrrtpw/Resources/Private/Language/locallang_csh_tx_mediaessrrtpw_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediaessrrtpw_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediaessrrtpw_domain_model_category', 'EXT:media_essrrtpw/Resources/Private/Language/locallang_csh_tx_mediaessrrtpw_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediaessrrtpw_domain_model_category');

    }
);
