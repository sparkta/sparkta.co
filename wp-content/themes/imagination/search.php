<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class('pngfix curved clearfix') ?>>
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content() ?>
				</div>
				<p class="postmetadata clearfix">
					<span class="icondate floatleft">
						<?php the_time('d.m.Y'); ?> 
					</span>
					<span class="iconcat floatleft">
						<?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?>  
					</span>
					<span class="iconcomment floatright">
						<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
					</span>
				</p>

			</div>

		<?php endwhile; ?>

		<div class="navigation curved pngfix clearfix">
			<div class="floatleft"><?php next_posts_link('Previous Entries') ?></div>
			<div class="floatright"><?php previous_posts_link('Newer Entries') ?></div>
		</div>

	<?php else : ?>
	
	<div class="post pngfix curved">
		<h2 class="center">No posts found. Try a different search?</h2>
	</div>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>