<?php
header("Content-type: text/css");
require_once( dirname(__FILE__) . '../../../../wp-config.php');
require_once( dirname(__FILE__) . '/functions.php');
function sop($var){
global $wpdb, $cj_table, $cjvars, $opt;
$opt_id = $cjvars['shortname']."_theme_".$var;
$opt = $wpdb->get_var("SELECT value FROM $cj_table WHERE id='$opt_id'");
return($opt);
}
?>
<?php 
$bodybgcolor = sop("style_bg_color");
$bodybgimage = sop("style_bg_options");
/* Background Image */
switch ($bodybgimage)
{
case "Array":
  	$bodybgimage = "url(images/bg.jpg) fixed no-repeat";
  break;
case "Default":
  	$bodybgimage = "url(images/bg.jpg) fixed no-repeat";
  break;
case "No Image":
  	$bodybgimage = "";
  break;
case "Custom Style":
	$bodybgimage = "url(" . sop("style_bg_image") . ")";
	break;
case "Plese Select":
  	$bodybgimage = "url(images/bg.jpg) fixed no-repeat";
  break;
case "Option One":
  	$bodybgimage = "url(images/bg2.jpg)";
  break;

case "Option Two":
  	$bodybgimage = "url(images/bg3.jpg)";
  break;

default:
  	$bodybgimage = "url(images/bg.jpg)";
break;
}
/* Background Alignment */
switch (sop("style_bg_alignment"))
{
case "Please Select":
$bgalign = "center";
break;
case "Array":
$bgalign = "center";
break;
case "Default":
$bgalign = "center";
break;
case "left":
$bgalign = "left";
break;
case "right":
$bgalign = "right";
break;
case "center":
$bgalign = "center";
break;
default:
$bgalign = "center";
break;
}
/* Background Repeat */
switch (sop("style_bg_repeat")){
case "Array":
$bgrepeat = "no-repeat";
break;
case "Plese Select":
$bgrepeat = "no-repeat";
break;
case "Default":
$bgrepeat = "no-repeat";
break;
case "Repeat":
$bgrepeat = "repeat";
break;
case "No Repeat":
$bgrepeat = "no-repeat";
break;
case "Repeat Horizontal":
$bgrepeat = "repeat-x";
break;
case "Repeat Vertical":
$bgrepeat = "repeat-y";
break;
case "Fixed Background":
$bgrepeat = "fixed no-repeat";
break;
default:
$bgrepeat = "no-repeat";
break;
}
/* Post Background Color */
switch (sop("style_content_bg_options")){
case "Array":
$contentbg = "url(images/tbg.png)";
break;
case "Please Select":
$contentbg = "url(images/tbg.png)";
break;
case "Default":
$contentbg = "url(images/tbg.png)";
break;
case "None":
$contentbg = "none";
break;
case "Use Color":
$contentbg = sop("style_content_background_color");
break;
case "Use Image":
$contentbg = "url(".sop("style_content_background_image").")";
break;
default:
$contentbg = "url(images/tbg.png)";
break;
}
?>
body{
background:<?php echo $bodybgcolor; ?> <?php echo $bodybgimage; ?> top <?php echo $bgalign; ?> <?php echo $bgrepeat; ?>;
color:<?php echo sop("style_font_overall_color"); ?>;
}
#content{
color:<?php echo sop("style_font_panel_color"); ?>;
}
a{
color:<?php echo sop("style_font_link_color"); ?>;
}
a:hover{
color:<?php echo sop("style_font_linkhover_color"); ?>;
}
#header a, #welcome a:hover{
color:<?php echo sop("style_header_link_color"); ?> !important;
}
#header a:hover, #welcome a{
color:<?php echo sop("style_header_linkhover_color"); ?>  !important;
}

#content h1, #content h2, #content h3, #content h4, #content h5, #content h6 a{
color:<?php echo sop("style_content_heading_color"); ?>  !important;
}

#content h1 a, #content h2 a, #content h3 a, #content h4 a, #content h5 a, #content h6 a{
color:<?php echo sop("style_content_heading_color"); ?>  !important;
}
#content h1 a:hover, #content h2 a:hover, #content h3 a:hover, #content h4 a:hover, #content h5 a:hover, #content h6 a:hover{
color:<?php echo sop("style_content_headinghover_color"); ?>  !important;
}
#toptwitter h2 a{
color:<?php echo sop("style_header_link_color"); ?> !important;
}
.toptwittermsg ul li a{
color:<?php echo sop("style_header_link_color"); ?> !important;
}
.toprsscolor{
color:<?php echo sop("style_font_overall_color"); ?>  !important;
}
.colororange{
color:<?php echo sop("style_header_linkhover_color"); ?>  !important;
}
#toptwitter h2 a:hover{
color:<?php echo sop("style_header_linkhover_color"); ?>  !important;
}
.curved{
padding:10px;
background:<?php echo $contentbg; ?>;
border-color:#000;
}
.sticky {
	background:<?php echo sop("style_content_sticky_bgcolor") ?> url(images/featured.png) right top no-repeat !important;
	color:<?php echo sop("style_content_sticky_textcolor") ?>
}
div#content div.sticky h2 a{
color:<?php echo sop("featured_post_link_color") ?> !important;
}
div.sticky a{
	color:<?php echo sop("featured_post_link_color") ?> !important;
}
.sticky a:hover, div#content div.sticky h2 a{
	color:<?php echo sop("featured_post_linkhover_color") ?>
}

.postmetadata{
	background:<?php echo sop("style_content_postmeta_bgcolor") ?>;
	padding:5px 10px 5px 10px;
	color:<?php echo sop("style_content_postmeta_color") ?>;
}
ol.commentlist li{
	background:<?php echo sop("comment_bg_color"); ?>;
	color:<?php echo sop("comment_font_color"); ?>;
}
ol.commentlist li.comment-author-admin{
	background:<?php echo sop("comment_bg_color_admin"); ?>;
	color:<?php echo sop("comment_font_color_admin"); ?>;
}
#author{
background:<?php echo sop("comment_form_bgcolor"); ?>;
color:<?php echo sop("comment_form_textcolor"); ?>;
}
#email{
background:<?php echo sop("comment_form_bgcolor"); ?>;
color:<?php echo sop("comment_form_textcolor"); ?>;
}
#url{
background:<?php echo sop("comment_form_bgcolor"); ?>;
color:<?php echo sop("comment_form_textcolor"); ?>;
}
#comment{
background:<?php echo sop("comment_form_bgcolor"); ?>;
color:<?php echo sop("comment_form_textcolor"); ?>;
}
.widget_text a{
color:<?php echo sop("style_font_link_color"); ?>;
}
.widget_text a:hover{
color:<?php echo sop("style_font_linkhover_color"); ?>;
}
.widget{
color:<?php echo sop("style_font_panel_color"); ?>;
}
.widget ul li a,#wp-calendar a:hover,.widget a{
color:<?php echo sop("sidebar_link_color"); ?>;
}
.widget ul li a:hover,#wp-calendar a,.widget a:hover{
color:<?php echo sop("sidebar_linkhover_color"); ?>;
}
ol.commentlist li a{
color:<?php echo sop("comment_form_link_color"); ?> ;
}
ol.commentlist li a:hover{
color:<?php echo sop("comment_form_linkhover_color"); ?>;
}
#submit{
background:<?php echo sop("comment_form_bgcolor"); ?>;
color:<?php echo sop("comment_form_textcolor"); ?>;
}
#footer{
color:<?php echo sop("style_font_panel_color"); ?>;
}
.widget{
	background:<?php echo sop("widget_bgcolor"); ?> !important;
	color:<?php echo sop("widget_textcolor"); ?> !important;
}
.comment-author-admin a{
	color:<?php echo sop('admin_comments_link_color'); ?> !important;
}
.comment-author-admin a:hover{
	color:<?php echo sop('admin_comments_linkhover_color'); ?>  !important;
}
#footer{
background:<?php echo sop("footer_bgcolor"); ?>;
color:<?php echo sop("footer_textcolor"); ?>;
}
#footer a{
color:<?php echo sop("footer_link_color"); ?>;
}
#footer a:hover{
color:<?php echo sop("footer_linkhover_color"); ?>;
}