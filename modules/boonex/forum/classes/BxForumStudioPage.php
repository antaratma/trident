<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    Forum Forum
 * @ingroup     TridentModules
 *
 * @{
 */

define('BX_DOL_STUDIO_MOD_TYPE_CATEGORIES', 'categories');

class BxForumStudioPage extends BxTemplStudioModule
{
	protected $_sModule;
	protected $_oModule;

    function __construct($sModule = "", $sPage = "")
    {
    	$this->_sModule = 'bx_forum';
    	$this->_oModule = BxDolModule::getInstance($this->_sModule);

        parent::__construct($sModule, $sPage);

        $this->aMenuItems[] = array('name' => BX_DOL_STUDIO_MOD_TYPE_CATEGORIES, 'icon' => 'bars', 'title' => '_bx_forum_lmi_cpt_categories');
    }

	protected function getCategories()
    {
        $oGrid = BxDolGrid::getObjectInstance($this->_oModule->_oConfig->CNF['OBJECT_GRID_CATEGORIES']);
        if(!$oGrid)
            return '';

        return $oGrid->getCode();
    }
}

/** @} */
