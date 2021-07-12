<?php
/*
 * Plugin Name: Lista de Contatos LB
 * Description: Lista os contatos
 *  Version: 1.0.0
 * Author: Lucas B. M.
*/

//=================================================
// Security: Abort if this file is called directly
//=================================================
if ( !defined('ABSPATH') ) {
    die;
}

//=================================================
// Includes
//=================================================
require_once (plugin_dir_path(__FILE__) . 'lista-de-contatos-son-post-type.php');

//=================================================
// Constante do plugin ACF
//=================================================
define('ACF_LITE', true);

//=================================================
// Dependencies
//=================================================
require_once (plugin_dir_path(__FILE__) . 'dep/advanced-custom-fields/acf.php');
