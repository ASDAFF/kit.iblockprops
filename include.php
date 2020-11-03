<?
/**
 * Copyright (c) 2/2/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

CModule::AddAutoloadClasses(
	'kit.iblockprops',
	array(
		'CKITIBlockPropSection' => 'classes/general/iblock_prop_section.php',
		'CKITIBlockPropElement' => 'classes/general/iblock_prop_element.php',
	)
);

$arJSConfig = array(
	'js' => '/bitrix/js/kit.iblockprops/interface.js',
	'css' => '/bitrix/css/kit.iblockprops/interface.css',
	'rel' => array('jquery'),
);

CJSCore::RegisterExt('kit_iblockprops', $arJSConfig);