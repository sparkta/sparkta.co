<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post pngfix curved" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>