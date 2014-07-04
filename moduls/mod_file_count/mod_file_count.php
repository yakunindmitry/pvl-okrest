<?php
/**
* File_Count Module Entry Point
*
* @package Joomla.Tutorials
* @subpackage Modules
* @link 
* @license GNU/GPL, see LICENSE.php
*/
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php' );

$link = modFileCountHelper::getLink( $params ); 
$filecount = modFileCountHelper::getFileCount( $params );
require( JModuleHelper::getLayoutPath( 'mod_file_count' ) );
?>