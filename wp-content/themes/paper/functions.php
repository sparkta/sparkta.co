<?php
function childtheme_favicon() { ?>
	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/wpcharity.png" >
<?php }
add_action('wp_head', 'childtheme_favicon');
?>
<?php 
if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on() {
	printf( __( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate><span class="tanggal">%4$s</span><span class="blnthn">%5$s/%6$s</span></span></time></a><span class="by-author">', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date('n') ),
		esc_html( get_the_date('j') ),
		esc_html( get_the_date('Y') ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		sprintf( esc_attr__( 'View all posts by %s', 'twentyeleven' ), get_the_author() ),
		esc_html( get_the_author() )
	);
}
endif;
?>