<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
            <div class="footer-fix">
                <div id="site-info">
                    <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div><!-- #site-info -->
    
                <div id="site-generator">
                    <?php do_action( 'twentyeleven_credits' ); ?>
                    <a href="http://wordpress.org">WordPress</a> &nbsp; <a class="wpcharity" href="http://wpcharity.com">WPCharity</a>
                </div><!-- #site-generator -->
           </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>