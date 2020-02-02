<?
/**
 * Copyright (c) 2/2/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

CModule::AddAutoloadClasses(
	'collected.iblockprops',
	array(
		'CCOLLECTEDIBlockPropSection' => 'classes/general/iblock_prop_section.php',
		'CCOLLECTEDIBlockPropElement' => 'classes/general/iblock_prop_element.php',
	)
);

$arJSConfig = array(
	'js' => '/bitrix/js/collected.iblockprops/interface.js',
	'css' => '/bitrix/css/collected.iblockprops/interface.css',
	'rel' => array('jquery'),
);

CJSCore::RegisterExt('collected_iblockprops', $arJSConfig);