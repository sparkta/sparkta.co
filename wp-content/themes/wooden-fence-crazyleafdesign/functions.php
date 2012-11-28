<?php
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' =>'Sidebar 1',
		'before_widget' => '<li><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>')
	);
	register_sidebar(array(
		'name' =>'Sidebar 2',
		'before_widget' => '<li><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>')
	);
	function unregister_problem_widgets() {
		unregister_sidebar_widget('search');
	}
	add_action('widgets_init','unregister_problem_widgets');
}
function style_tag_cloud($tags){
	return '<div style="padding:5px;">'.$tags.'</div>';
}
add_action('wp_tag_cloud', 'style_tag_cloud');
include(TEMPLATEPATH.'/template.php');
?>