<?php
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    Air Air template
 * @ingroup     DolphinModules
 *
 * @{
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'type' => BX_DOL_MODULE_TYPE_TEMPLATE,
    'name' => 'bx_air',
    'title' => 'Air',
    'note' => 'Design template',
    'version' => '8.0.0',
    'vendor' => 'BoonEx',
	'help_url' => 'http://feed.boonex.com/?section={module_name}',

    'compatible_with' => array(
        '8.0.x'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/air/',
    'home_uri' => 'air',

    'db_prefix' => 'bx_air_',
    'class_prefix' => 'BxAir',

    /**
     * Category for language keys.
     */
    'language_category' => 'BoonEx Air',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_languages' => 1,
    	'clear_db_cache' => 1
    ),
    'uninstall' => array (
        'execute_sql' => 1,
        'update_languages' => 1,
    	'clear_db_cache' => 1
    ),
    'enable' => array(
        'execute_sql' => 1
    ),
    'disable' => array(
        'execute_sql' => 1
    ),

    /**
     * Dependencies Section
     */
    'dependencies' => array(),
);

/** @} */
