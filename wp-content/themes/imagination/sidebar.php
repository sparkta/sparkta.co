<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
</div><!-- /content -->
<div id="sidebar" class="floatleft">

<?php $showtwitter = top("show_twitter_div");
if($showtwitter == "Hide Twitter Message"){
	echo "";
}else { ?> 
<div id="toptwitter" class="pngfix">
	<h2><a target="_blank" href="http://twitter.com/<?php echo top("show_twitter_username"); ?>" title="Follow Me">Follow me on Twitter<i>!</i></a></h2>
	<div class="toptwittermsg">
		<ul id="twitter_update_list"><li></li></ul>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo top("show_twitter_username"); ?>.json?callback=twitterCallback2&amp;count=1"></script>
	</div><!-- /twittermsg -->
</div><!-- /top twitter -->
<?php } ?>
<?php
if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right_Sidebar') ) : ?>
<?php endif; ?>
</div><!-- /sidebar -->


