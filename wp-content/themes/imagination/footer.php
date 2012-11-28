<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div> <!-- /content container -->
<div id="footer" class="clearfix curved pngfix">
	<div id="footleft" class="floatleft">
		<?php echo top("foot_copyright_text"); ?> <a href="<?php echo top("foot_copyright_link_url"); ?>/" title="<?php echo top("foot_copyright_link_text"); ?>"><b><?php echo top("foot_copyright_link_text"); ?></b></a> 
	</div><!-- /footleft -->
	<div id="footright" class="floatleft">
		Powered by <a target="_blank" href="http://www.wordpress.org/" title="WordPress"><b>WordPress</b></a> |
		<!-- ******** CREDIT LINK SHOULD NOT BE REMOVED ********* -->
			<a target="_blank" href="http://www.cssjockey.com/imagination" title="Imagination"><b>Imagination</b></a> by <a href="http://www.cssjockey.com/" title="Unique &amp; Practical Web Presense"><b>CSSJockey</b></a>
		<!-- ******** CREDIT LINK SHOULD NOT BE REMOVED ********* -->	
	</div><!-- /footright -->
</div><!-- /footer -->
</div><!-- /wrapper -->
<?php wp_footer(); ?>
<div class="hidden">
	<?php echo top('foot_code'); ?>
</div>
<br /><br />
</body>
</html>
