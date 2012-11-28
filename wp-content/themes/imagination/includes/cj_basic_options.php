<?php
/* Changing the content of this file will render this theme useless. */
include("cj_vars.php");
$shortname = $cjvars['shortname']."_theme_";
$options = array (
		    array(  
				"oid" => "rae", //
				"oname" => "exists",
				"oinfo" => $cjvars['version'],
				"otype" => "class",
				"oclass" => "screen",
			    "ovalue" => "screen"
				),
		    array(  
				"oid" => $shortname."basic_configuration",
				"oname" => "Basic Configuration",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading1",
			    "ovalue" => 'Basic Configuration'
				),
		    array(  
				"oid" => $shortname."basic_config_info",
				"oname" => "What is This?",
				"oinfo" => '',
				"otype" => "info",
				"oclass" => "td1",
			    "ovalue" => 'Use below options to add various scripts to your theme and manage its layout.'
				),
		    array(
				"oid" => $shortname."head_code",
				"oname" => "Head Tag Scripts",
				"oinfo" => 'This code will be added within the <b>&lt;head&gt; &lt;/head&gt;</b> tag.',
				"otype" => "textarea",
				"oclass" => "td1",
			    "ovalue" => '<!-- Enter Valid Code for Head tag -->'
				),
		    array(  
				"oid" => $shortname."foot_code",
				"oname" => "Insert Stats Code",
				"oinfo" => 'This code will be added to all pages and will <b><i>not be displayed</i></b>.<br /> Example: <b>Sitemeter</b> or <b>Google Analytics</b> code.',
				"otype" => "textarea",
				"oclass" => "td1",
			    "ovalue" => '<!-- Enter Valid Code Here -->'
				),
		    array(
				"oid" => $shortname."rss_type",
				"oname" => "Choose RSS Type",
				"oinfo" => "Would you like to use your Feedburner Account or Default WordPress Settings to handle RSS. Specify the options below as per your selection",
				"otype" => "select",
				"oclass" => "td1",
			    "ovalue" => array("Feedburner", "WordPress Default")
				),
		    array(
				"oid" => $shortname."feedburner_username",
				"oname" => "Feedburner Username",
				"oinfo" => "Enter your feedburner username to display the RSS count in text format.",
				"otype" => "text",
				"oclass" => "td1",
			    "ovalue" => "cssjockey"
				),
		    array(
				"oid" => $shortname."rss_url",
				"oname" => "RSS URL",
				"oinfo" => "Enter full RSS url in the box above. e.g.<br />
							<b>Feedburner</b>: http://feeds.feedburner.com/cssjockey<br />
							<b>Default</b>:" . get_bloginfo("home")."/?feed=rss",
				"otype" => "text",
				"oclass" => "td1",
			    "ovalue" => get_bloginfo("home")."/?feed=rss"
				),
		    array(
				"oid" => $shortname."show_twitter_username",
				"oname" => "Twitter Username",
				"oinfo" => "Enter your twitter username.",
				"otype" => "text",
				"oclass" => "td1",
			    "ovalue" => "cssjockey"
				),
//Style Heading
		    array(  
				"oid" => $shortname."stylesheet_heading",
				"oname" => "Stylize Your Theme",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading7",
			    "ovalue" => 'Stylize Your Theme'
				),
		    array(
				"oid" => $shortname."style_bg_options",
				"oname" => "Choose Style",
				"oinfo" => "Select from various available styles or use your own imagination. <br />Choose <b>Custom Style</b> and play with the options below.",
				"otype" => "select",
				"oclass" => "td7",
			    "ovalue" => array("Ambient Wave", "Imperial Blue", "Cosmic", "Cold Flames", "Freshness", "Light Paper", "Copper Dust", "Granite", "Elegant", "Custom Style")
				),
		    array(
				"oid" => $shortname."rounded_corners",
				"oname" => "Rounded Corners",
				"oinfo" => "Rounded corners will not work in IE6 and Opera. By default rounded corners are enabled.",
				"otype" => "select",
				"oclass" => "td7",
			    "ovalue" => array("Enable Rounded Corners", "Disable Rounded Corners")
				),
		    array(  
				"oid" => $shortname."customize_theme_heading",
				"oname" => "Custom Background Settings",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading8",
			    "ovalue" => 'Custom Background Settings'
				),
		    array(
				"oid" => $shortname."bg_options_info",
				"oname" => '<span style="color:#990000;">Use Your Imagination</span>',
				"oinfo" => "",
				"otype" => "info",
				"oclass" => "td8 subhead",
			    "ovalue" => "Create your own theme by customizing the settings below. Use your own imagination and <br /><i><b>Feel the Freedom</b></i>!"
				),

		    array(
				"oid" => $shortname."style_bg_color",
				"oname" => "Document Background Color",
				"oinfo" => "Enter backgound color #HEX value. <br /> e.g. <b>#000000</b> for black and <b>#FFFFFF</b> for white.",
				"otype" => "text",
				"oclass" => "td8",
			    "ovalue" => '#000000'
				),
		    array(
				"oid" => $shortname."style_bg_image",
				"oname" => "Document Background Image URL",
				"oinfo" => "Enter full URL of backgound image. <br /> e.g. http://www.yoursite.com/images/bg.jpg",
				"otype" => "text",
				"oclass" => "td8",
			    "ovalue" => get_bloginfo('template_url')."/images/bg.jpg"
				),
		    array(
				"oid" => $shortname."style_bg_alignment",
				"oname" => "Background Image Alignment",
				"oinfo" => "Specify whether you want to align the background to left, right or center",
				"otype" => "select",
				"oclass" => "td8",
			    "ovalue" => array("Default", "left", "right", "center")
				),
		    array(
				"oid" => $shortname."style_bg_repeat",
				"oname" => "Repeat Background Image",
				"oinfo" => "Specify background repitition options<br />Use Fixed Background if you are using a large image as the default settings. This will move only content however the background will not scroll.",
				"otype" => "select",
				"oclass" => "td8",
			    "ovalue" => array("Fixed Background", "Repeat", "No Repeat", "Repeat Horizontal", "Repeat Vertical")
				),
//Header Settings
		    array(  
				"oid" => $shortname."header_settings",
				"oname" => "Custom Header Settings",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading2",
			    "ovalue" => 'Custom Header Settings'
				),
		    array(
				"oid" => $shortname."style_logo",
				"oname" => "Custom Logo",
				"oinfo" => "Enter Full URL of the logo image. You can find Logo.psd in theme resources folder",
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => get_bloginfo("template_url") . "/images/logo.png"
				),
		    array(
				"oid" => $shortname."top_welcome_message",
				"oname" => "Welcome Message",
				"oinfo" => "Enter welcome message to display below the logo. <br />
							Only two lines will be displayed, so keep it short.",
				"otype" => "wysiwyg",
				"oclass" => "td2",
			    "ovalue" => 'Welcome to the home of <a href="http://imagination.cssjockey.com/" title="Free WordPress Theme - Imagination"><b>Imagination</b></a>. A highly customizable free wordpress theme by <a href="http://www.cssjockey.com" title="CSSJockey">CSSJockey</a>.
							Update Theme Settings to change this welcome message.'
				),
		    array(
				"oid" => $shortname."exclude_pages_topnav",
				"oname" => "Exclude Pages <br /> Top Navigation",
				"oinfo" => "Enter Page IDs (separated with commas) to exclude from top navigation. e.g. 1,42,8",
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => "0"
				),
		    array(
				"oid" => $shortname."style_font_overall_color",
				"oname" => "Header Text Color",
				"oinfo" => "Enter #HEX color value For the header font color. e.g. #FFFFFF",
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."style_header_link_color",
				"oname" => "Header Link Color",
				"oinfo" => "Enter #HEX color value for the header links color. e.g. #FFFFFF",
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."style_header_linkhover_color",
				"oname" => "Header Link Mouseover Color",
				"oinfo" => "Enter #HEX color value for the header links mouseover color. e.g. #000000 for black",
				"otype" => "text",
				"oclass" => "td2",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."search_bg",
				"oname" => "Search Background",
				"oinfo" => "",
				"otype" => "info",
				"oclass" => "td2",
			    "ovalue" => "You can find search <b>topsearch.psd</b> in /wp-content/themes/resources/PSDs folder."
				),			
//Content Settings
		    array(  
				"oid" => $shortname."content_settings",
				"oname" => "Custom Post Settings",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading3",
			    "ovalue" => 'Custom Post Settings'
				),
		    array(
				"oid" => $shortname."style_content_bg_options",
				"oname" => "Post Background Type",
				"oinfo" => "Select whether you want to use any image or some color for content background.",
				"otype" => "select",
				"oclass" => "td3",
			    "ovalue" => array("Default", "None", "Use Color", "Use Image")
				),
		    array(
				"oid" => $shortname."style_content_background_color",
				"oname" => "Post Background Color",
				"oinfo" => "Specify #HEX vlaue for the background color of content panels.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#000000"
				),
		    array(
				"oid" => $shortname."style_content_background_image",
				"oname" => "Post Background Image URL",
				"oinfo" => "Enter full url of the image to use as content background.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => get_bloginfo('template_url')."/images/tbg.png"
				),
		    array(
				"oid" => $shortname."style_content_heading_color",
				"oname" => "Post Heading Color",
				"oinfo" => "Specify #HEX vlaue for the post heading color.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."style_content_headinghover_color",
				"oname" => "Post Heading Mouseover Color",
				"oinfo" => "Specify #HEX vlaue for the post heading mouse over color.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."style_font_panel_color",
				"oname" => "Post Text Color",
				"oinfo" => "Enter #HEX value for the post text color.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#EFEFEF"
				),
		    array(
				"oid" => $shortname."style_font_link_color",
				"oname" => "Post Link Color",
				"oinfo" => "Specify #HEX vlaue for the links color within the posts.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."style_font_linkhover_color",
				"oname" => "Post Link Mouseover Color",
				"oinfo" => "Specify #HEX vlaue for the links mouse over color within the posts.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."style_content_sticky_bgcolor",
				"oname" => "<b>Featured</b> Post Background Color",
				"oinfo" => "Specify #HEX value for background color of sticky post.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#000000"
				),
		    array(
				"oid" => $shortname."style_content_sticky_textcolor",
				"oname" => "<b>Featured</b> Post Text Color",
				"oinfo" => "Specify #HEX value for text color of sticky post.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."featured_post_link_color",
				"oname" => "<b>Featured</b> Post Link Color",
				"oinfo" => "Specify #HEX value for link color of sticky post.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."featured_post_linkhover_color",
				"oname" => "<b>Featured</b> Post Link Mouseover Color",
				"oinfo" => "Specify #HEX value for link mouseover color of sticky post.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."style_content_postmeta_bgcolor",
				"oname" => "Post Meta Background Color",
				"oinfo" => "Specify #HEX vlaue for the background color of post meta data.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#000000"
				),
		    array(
				"oid" => $shortname."style_content_postmeta_color",
				"oname" => "Post Meta Text Color",
				"oinfo" => "Specify #HEX vlaue for the text color of post meta data.",
				"otype" => "text",
				"oclass" => "td3",
			    "ovalue" => "#FFFFFF"
				),
//Sidebar Settings
		    array(  
				"oid" => $shortname."sidebar_settings",
				"oname" => "Custom Sidebar Settings",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading4",
			    "ovalue" => 'Custom Sidebar Settings'
				),
		    array(
				"oid" => $shortname."show_twitter_div",
				"oname" => "Show Twitter Feed",
				"oinfo" => "Choose if you want to display or hide twitter message above the sidebar.",
				"otype" => "select",
				"oclass" => "td4",
			    "ovalue" => array("Display Twitter Message", "Hide Twitter Message")
				),
		    array(
				"oid" => $shortname."widget_bgcolor",
				"oname" => "Sidebar Panel Background",
				"oinfo" => "Enter #HEX value or CSS Background Property for the sidebar panels background<br />
							Use Color: #FFFFFF or<br />
							Background: url(images/tbg.png)",
				"otype" => "text",
				"oclass" => "td4",
			    "ovalue" => "url(images/tbg.png)"
				),
		    array(
				"oid" => $shortname."widget_textcolor",
				"oname" => "Sidebar Text Color",
				"oinfo" => "Enter #HEX value for the sidebar panels text color. e.g. #FFFFFF for white.",
				"otype" => "text",
				"oclass" => "td4",
			    "ovalue" => ""
				),
		    array(
				"oid" => $shortname."sidebar_link_color",
				"oname" => "Sidebar Link Color",
				"oinfo" => "Enter #HEX value for the sidebar links color.",
				"otype" => "text",
				"oclass" => "td4",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."sidebar_linkhover_color",
				"oname" => "Sidebar Link Mouseover Color",
				"oinfo" => "Enter #HEX value for the sidebar links Mouse Over color.",
				"otype" => "text",
				"oclass" => "td4",
			    "ovalue" => "#FFFFFF"
				),
//Comments Settings
		    array(  
				"oid" => $shortname."comments_settings",
				"oname" => "Custom Comments Settings",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading5",
			    "ovalue" => 'Custom Comments Settings'
				),
		    array(
				"oid" => $shortname."comment_bg_color",
				"oname" => "Comments Background Color",
				"oinfo" => "Enter #HEX value for comments background color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#000000"
				),
		    array(
				"oid" => $shortname."comment_font_color",
				"oname" => "Comments Text Color",
				"oinfo" => "Enter #HEX value for comments text color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."comment_form_link_color",
				"oname" => "Comments Link Color",
				"oinfo" => "Enter #HEX value for <b>Comment Form</b> links color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."comment_form_linkhover_color",
				"oname" => "Comments Link Mouseover Color",
				"oinfo" => "Enter #HEX value for <b>Comment Form</b> links mouse over color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."comment_bg_color_admin",
				"oname" => "Admin Comments Background Color",
				"oinfo" => "Enter #HEX value for <b>Admin Comments</b> background color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#1d1d1d"
				),
		    array(
				"oid" => $shortname."comment_font_color_admin",
				"oname" => "Admin Comments Text Color",
				"oinfo" => "Enter #HEX value for Admin Comments text color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."admin_comments_link_color",
				"oname" => "Admin Comments Link Color",
				"oinfo" => "Enter #HEX value for <b>Comment Form</b> links color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FF9600"
				),
		    array(
				"oid" => $shortname."admin_comments_linkhover_color",
				"oname" => "Admin Comments Mouseover Color",
				"oinfo" => "Enter #HEX value for <b>Comment Form</b> links mouse over color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."comment_form_bgcolor",
				"oname" => "<b>Comment Form</b> Background Color",
				"oinfo" => "Enter #HEX value for <b>Comment Form</b> background color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#000000"
				),
		    array(
				"oid" => $shortname."comment_form_textcolor",
				"oname" => "<b>Comment Form</b> Text Color",
				"oinfo" => "Enter #HEX value for <b>Comment Form</b> text color.",
				"otype" => "text",
				"oclass" => "td5",
			    "ovalue" => "#FFFFFF"
				),
//Comments Settings
		    array(  
				"oid" => $shortname."Footer_settings",
				"oname" => "Custom Footer Settings",
				"oinfo" => '',
				"otype" => "heading",
				"oclass" => "heading9",
			    "ovalue" => 'Custom Footer Settings'
				),
		    array(
				"oid" => $shortname."footer_bgcolor",
				"oname" => "<b>Footer</b> Background Color",
				"oinfo" => "Enter #HEX value for footer background color.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => "#000000"
				),
		    array(
				"oid" => $shortname."footer_textcolor",
				"oname" => "<b>Footer</b> Text Color",
				"oinfo" => "Enter #HEX value for Footer text color.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => "#FFFFFF"
				),
		    array(
				"oid" => $shortname."footer_link_color",
				"oname" => "<b>Footer</b> Link Color",
				"oinfo" => "Enter #HEX value for Footer <b>links</b> color.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => "#ff9600"
				),
		    array(
				"oid" => $shortname."footer_linkhover_color",
				"oname" => "<b>Footer</b> Link Mouseover Color",
				"oinfo" => "Enter #HEX value for Footer <b>links mouse over</b> color.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => "#FFFFFF"
				),				
		    array(
				"oid" => $shortname."foot_copyright_text",
				"oname" => "Copyright Text",
				"oinfo" => "Update copyright text and year if required.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => "&copy; 2009 | "
				),
		    array(
				"oid" => $shortname."foot_copyright_link_text",
				"oname" => "Copyright Link Text",
				"oinfo" => "Update copyright link text if required.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => get_bloginfo("title")
				),
		    array(
				"oid" => $shortname."foot_copyright_link_url",
				"oname" => "Copyright Link URL",
				"oinfo" => "Update copyright link URL if required.",
				"otype" => "text",
				"oclass" => "td9",
			    "ovalue" => get_bloginfo("home")
				),
);?>