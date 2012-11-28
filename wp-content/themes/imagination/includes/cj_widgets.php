<?php 
include('cj_vars.php'); 
function wop($var){
global $wpdb, $cj_table, $cjvars;
$opt_id = $cjvars['shortname']."_widget_".$var;
$opt = $wpdb->get_var("SELECT value FROM $cj_table WHERE id='$opt_id'");
return stripcslashes($opt);
}?>
<?php // Flickr Widget
function cj_flickr_widget($args) {
  extract($args);
echo $before_widget; echo $before_title . 
wop("flickr_widget_heading") //Widget Title
. $after_title; ####Edit code below ?>
<div id="flickr_badge_uber_wrapper">
<div id="flickr_badge_wrapper" class="clearfix">
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo wop("flickr_image_count") ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo wop("flickr_username"); ?>"></script>
</div>
<div class="cj_flickr_link">
<a target="_blank" href="http://www.flickr.com/photos/<?php echo wop("flickr_username"); ?>/" title=""><?php echo wop("flickr_photostream_text") ?></a>
</div>
</div><!-- /flickr widget -->
<?php ####Stop Editing 
echo $after_widget; }
register_sidebar_widget('Flickr', 'cj_flickr_widget');
?>
<?php // Entrecard Widget
function cj_entrecard_widget($args) {
  extract($args);
echo $before_widget; echo $before_title . 
wop("entrecard_widget_heading") //Widget Title
. $after_title; ####Edit code below ?>
<?php 
$entrecard_align = wop("entrecard_widget_align");
if($entrecard_align == "" || $entrecard_align == "Array" || $entrecard_align == "Please Select" ){ $entrecard_align = "center";} ?>
<div style="text-align:<?php echo $entrecard_align; ?>; padding:10px 0 10px 0;">
<?php echo wop("entrecard_widget_code") ?>
</div><!-- /entrecard -->
<?php ####Stop Editing 
echo $after_widget; }
register_sidebar_widget('Entrecard', 'cj_entrecard_widget');
?>