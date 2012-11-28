<?php // Please do not change anything in this file otherwise theme won't work properly
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
if ( function_exists('register_sidebar') )
    register_sidebar(
	array(
		'name' => 'Right_Sidebar',
		'before_widget' => '<div class="widget pngfix curved %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
    ));
ob_start();
include("includes/functions.php");
include('includes/cj_widgets.php');
?>