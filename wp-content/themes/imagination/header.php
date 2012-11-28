<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<!-- 
**** This credit note should not be removed ****************
Imagination - Free WordPress Theme by CSSJockey.com
Grab Your Copy Now: http://imagination.cssjockey.com/
**** This credit note should not be removed ****************
-->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/stylereset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/styleheader.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/stylecontent.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/stylecomments.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/stylesidebar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/stylefooter.css" media="screen" />
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>

<?php if(top("rounded_corners") == "Disable Rounded Corners"){ echo "";}else{ ?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/DD_roundies.uicornerfix.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ DD_roundies.addRule('.post, .sticky, .curved, .footer, .navigation', 12, true); })
</script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/custom.js"></script>
<?php 
switch (top("style_bg_options")){
case "Array": $cjstyle = "/styles/ambient_wave/style.css"; $logourl = top('style_logo'); break;
case "Please Select": $cjstyle = "/styles/ambient_wave/style.css"; $logourl = top('style_logo'); break;
case "Custom Style": $cjstyle = "/stylecustom.php"; $logourl = top('style_logo'); break;
case "Ambient Wave": $cjstyle = "/styles/ambient_wave/style.css"; $logourl = top('style_logo'); break;
case "Imperial Blue": $cjstyle = "/styles/imperial_blue/style.css"; $logourl = top('style_logo'); break;
case "Cosmic": $cjstyle = "/styles/cosmic/style.css"; $logourl = top('style_logo'); break;
case "Cold Flames": $cjstyle = "/styles/cold_flames/style.css"; $logourl = top('style_logo'); break;
case "Freshness": $cjstyle = "/styles/freshness/style.css"; $logourl = top('style_logo'); break;
case "Light Paper": $cjstyle = "/styles/light_paper/style.css"; $logourl = top('style_logo'); break;
case "Copper Dust": $cjstyle = "/styles/copper_dust/style.css"; $logourl = top('style_logo'); break;
case "Granite": $cjstyle = "/styles/granite/style.css"; $logourl = top('style_logo'); break;
case "Elegant": $cjstyle = "/styles/elegant/style.css"; $logourl = top('style_logo'); break;
default: $cjstyle = "/stylecustom.php"; $logourl = top('style_logo'); break;
}
?>
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/styleie7.css" media="screen" />
<![endif]-->
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/styleie6.css" media="screen" />
<script src="<?php bloginfo("template_url"); ?>/js/pngfix.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?><?php echo $cjstyle; ?>" media="screen" />
<!--[if lte IE 6]>
<style type="text/css" media="screen">
.sticky{
	background-image:none !important;
}
</style> 
<![endif]-->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php echo top("head_code"); ?>
<?php wp_head(); ?>
</head>
<body>
	
<div id="wrapper">
	<div id="header">
		<div id="logo" class="floatleft">
			<a href="<?php bloginfo("home"); ?>/" title="<?php bloginfo("description"); ?>">
			<img src="<?php echo $logourl; ?>" class="pngfix" alt="<?php bloginfo("description"); ?>" />
			</a>
		</div><!-- /logo -->
		<div id="logoright" class="floatright">
			<ul>
		<li><a href="<?php bloginfo("home"); ?>/" title="home">Home</a></li>
<?php
$top_page_defaults = array(
    'depth'       => -1,
    'show_date'   => '',
    'date_format' => get_option('date_format'),
    'child_of'    => 0,
    'exclude'     => '',
    'title_li'    => __(''),
    'echo'        => 1,
    'authors'     => '',
    'sort_column' => 'menu_order',
    'link_before' => '',
    'link_after'  => '',
    'exclude_tree'=> top("exclude_pages_topnav") );
	wp_list_pages($top_page_defaults);
?>
			</ul><!-- /toplinks -->
			<div id="toprss" class="clearfix">
				<div id="toprssimg" class="floatright">
					<a target="_blank" href="<?php echo top("rss_url"); ?>" title="Subscribe via RSS">
						<img src="<?php bloginfo("template_url"); ?>/images/toprss.png" width="54" height="54" class="pngfix" alt="Subscribe via RSS" />
					</a>
				</div><!-- /toprssimg -->
<?php
$feedusername = top("feedburner_username");
$rsstype = top("rss_type");
if($rsstype == "Feedburner"){

	$whaturl="https://feedburner.google.com/api/awareness/1.0/GetFeedData?uri={$feedusername}"; 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $whaturl);
	$data = curl_exec($ch);
	curl_close($ch);
	$xml = new SimpleXMLElement($data);
	$fb = $xml->feed->entry['circulation'];
	$fb = $fb;
	$message = "Subscribers";
	$rssemail = "http://feedburner.google.com/fb/a/mailverify?uri={$feedusername}&amp;loc=en_US";

}
else{
	$fb = "";
	$message = "Stay up-to-date via RSS!";
	$rssemail = top("rss_url");	
}
?>
				<div id="toprssinfo" class="floatright">
					<h1><span class="toprsscolor"><?php echo $fb; ?></span> <span class="colororange"><?php echo $message; ?></span></h1>
					<a target="_blank" href="<?php echo top("rss_url"); ?>">Subscribe via RSS</a> | <a target="_blank" href="<?php echo $rssemail; ?>">Subscribe via Email</a>
				</div><!-- /toprssinfo -->
			</div><!-- /toprss -->
		</div><!-- /logoright -->
	</div><!-- /header -->
	<div id="topmsg">
		<div id="welcome" class="floatleft">
			<?php echo top("top_welcome_message"); ?>
		</div>
		<div id="topsearch" class="floatright pngfix">
			<form method="get" id="searchform1" action="<?php bloginfo('url'); ?>/">
			<div>
			<input title="enter keywords and hit enter" type="text" value="enter keywords and hit enter" name="s" id="tops" onfocus="if ( this.value == this.defaultValue ) this.value = '';" onblur="if ( this.value == '' ) this.value = this.defaultValue" />
			<input type="submit" id="topsearchsubmit" value="Search" />
			</div>
			</form>
		</div><!-- /toprssinfo -->
	</div>
	<div id="contentcontainer">
		<div id="content" class="floatleft">
