<?php
/* Changing the content of this file will render this theme useless. */
include("cj_vars.php");
$shortname = $cjvars['shortname']."_widget_";
$options = array (
		    array(  
				"oid" => "raeo", //
				"oname" => "exists",
				"oinfo" => "none",
				"otype" => "class",
				"oclass" => "screen2",
			    "ovalue" => "screen"),
// Flickr Photostream
		    array(  
				"oid" => $shortname."flickr_widget",
				"oname" => "Flickr Widget Settings",
				"oinfo" => ' ',
				"otype" => "heading",
				"oclass" => "heading2",
			    "ovalue" => 'Flickr Widget Settings'),
		    array(  
				"oid" => $shortname."flickr_widget_info",
				"oname" => "What is This",
				"oinfo" => ' ',
				"otype" => "info",
				"oclass" => "td2",
			    "ovalue" => 'Following settings will help you customize the Flickr Widget'),
		    array(  
				"oid" => $shortname."flickr_widget_heading",
				"oname" => "Flickr Widget Heading",
				"oinfo" => 'Enter heading for Flickr Widget',
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => 'Photostream'),
		    array(  
				"oid" => $shortname."flickr_username",
				"oname" => "Flickr Username",
				"oinfo" => 'Enter your Flickr Username here',
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => '30659159%40N08'),
		    array(  
				"oid" => $shortname."flickr_image_count",
				"oname" => "Number of Images",
				"oinfo" => 'Enter the number of images to show in the widget',
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => '6'),
		    array(  
				"oid" => $shortname."flickr_photostream_text",
				"oname" => "Your Photostream Link Text",
				"oinfo" => 'Enter text or valid image code to be displayed at the bottom of the your photostream',
				"otype" => "textarea",
				"oclass" => "td2",
			    "ovalue" => 'View All'),				
// Entrecard Widget
		    array(  
				"oid" => $shortname."entrecard_widget",
				"oname" => "Entrecard Widget Settings",
				"oinfo" => ' ',
				"otype" => "heading",
				"oclass" => "heading3",
			    "ovalue" => 'Entrecard Widget Settings'),
		    array(  
				"oid" => $shortname."entrecard_widget_info",
				"oname" => "What is This",
				"oinfo" => ' ',
				"otype" => "info",
				"oclass" => "td3",
			    "ovalue" => 'Following settings will help you customize the Entrecard Widget'),
		    array(  
				"oid" => $shortname."entrecard_widget_heading",
				"oname" => "Entrecard Widget Heading",
				"oinfo" => 'Enter heading for Entrecard Widget',
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => 'Blog of the day!'),				
		    array(  
				"oid" => $shortname."entrecard_widget_code",
				"oname" => "Entrecard Code",
				"oinfo" => 'Enter code provided by entrecard.com',
				"otype" => "textarea",
				"oclass" => "td3",
			    "ovalue" => '<a target="_blank" href="http://www.cssjockey.com/" title="CSSJockey.com"><img src="http://themes.cssjockey.com/theme_files/entrecard-img.jpg" alt="CSSJockey.com" /></a>'),				
		    array(  
				"oid" => $shortname."entrecard_widget_align",
				"oname" => "Align widget",
				"oinfo" => 'Select an option to align this widget',
				"otype" => "select",
				"oclass" => "td3",
			    "ovalue" => array("left", "center", "right")),
);?>