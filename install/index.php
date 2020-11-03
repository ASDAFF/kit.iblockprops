<?
/**
 * Copyright (c) 2/2/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

class kit_iblockprops extends CModule
{
    var $MODULE_ID = "kit.iblockprops";
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;
	public $PARTNER_NAME;

	public function __construct()
    {
        $arModuleVersion = array();
        
        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");
        
        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }
        
		$this->PARTNER_NAME = "ASDAFF";
		$this->PARTNER_URI = "https://asdaff.github.io/";
        
        $this->MODULE_NAME = "Удобная привязка к разделам/элементам инфоблока";
        $this->MODULE_DESCRIPTION = "После установки вы сможете пользоваться пользовательскими типами свойств «Привязка к разделам (checkbox/radio)» и «Привязка к элементам (checkbox/radio)»";
    }
    
    public function DoInstall()
    {
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/kit.iblockprops/install/js/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/js/kit.iblockprops/', true, true);
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/kit.iblockprops/install/css/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/css/kit.iblockprops/', true, true);
		RegisterModuleDependences('iblock', 'OnIBlockPropertyBuildList', 'kit.iblockprops', 'CKITIBlockPropSection', 'GetUserTypeDescription');
		RegisterModuleDependences('iblock', 'OnIBlockPropertyBuildList', 'kit.iblockprops', 'CKITIBlockPropElement', 'GetUserTypeDescription');
        RegisterModule("kit.iblockprops");
    }
    
    public function DoUninstall()
    {
		DeleteDirFilesEx('/bitrix/js/kit.iblockprops/');
		DeleteDirFilesEx('/bitrix/css/kit.iblockprops/');
        UnRegisterModuleDependences('iblock', 'OnIBlockPropertyBuildList', 'kit.iblockprops', 'CKITIBlockPropSection', 'GetUserTypeDescription');
        UnRegisterModuleDependences('iblock', 'OnIBlockPropertyBuildList', 'kit.iblockprops', 'CKITIBlockPropElement', 'GetUserTypeDescription');
        UnRegisterModule("kit.iblockprops");
    }
}
?>