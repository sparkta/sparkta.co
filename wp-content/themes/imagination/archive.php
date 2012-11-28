<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>


	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class('pngfix curved clearfix') ?>>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('l, F jS, Y') ?></small>

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
	<div class="post curved pngfix">
<?php
		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		?>
		
		</div>

<?php endif; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
