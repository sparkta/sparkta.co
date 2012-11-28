<?php get_header(); ?>
<div id="content">
<?php 
	if(is_home()||is_front_page()) echo '<div class="spacer">&nbsp;</div>';
	if (have_posts()) :
		$post = $posts[0]; // Hack. Set $post so that the_date() works.
		if(is_category()){
			echo '<h3 class="archivetitle">Archive for the Category &raquo;'.single_cat_title('',FALSE).' &laquo;</h3>';
		}elseif(is_day()){
			echo '<h3 class="archivetitle">Archive for &raquo; '.get_the_time('F jS, Y').'&laquo;</h3>';
		}elseif(is_month()){
			echo '<h3 class="archivetitle">Archive for &raquo; '.get_the_time('F, Y').' &laquo;</h3>';
		}elseif(is_year()){
			echo '<h3 class="archivetitle">Archive for &raquo; '.get_the_time('Y').' &laquo;</h3>';
		} elseif(is_search()){
			echo '<h3 class="archivetitle">Search Results</h3>';
		}elseif(is_author()){
			echo '<h3 class="archivetitle">Author Archive</h3>';
		}elseif(isset($_GET['paged']) && !empty($_GET['paged'])){ // If this is a paged archive
			echo '<h3 class="archivetitle">Blog Archives</h3>';
		}elseif(is_tag()){
			echo '<h3 class="archivetitle">Tag-Archive for &raquo; '.single_tag_title('',FALSE).' &laquo; </h3>';
		}
		
		while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post_top"></div>
				<div class="post_mid">
					<div class="iehack"></div>	
					<div class="entry">
						<h2 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="post_author"><?php the_time('d M Y');?> by <?php the_author_posts_link('nickname'); ?> <?php edit_post_link(' Edit ',' &bull; &raquo;','&laquo;'); ?></div>
						<?php 
							if (is_search()){
								the_excerpt();
							}else{
								the_content('more...'); 
							}
						?>
						<div class="clear"></div>
						<div class="info">
							<span class="category">Category: <?php the_category(', ') ?></span>
							<?php the_tags('&nbsp;<span class="tags">Tags: ', ', ', '</span>'); ?>
							&nbsp;<span class="bubble"><?php comments_popup_link('Leave a Comment','One Comment', '% Comments', '','Comments off'); ?></span>
						</div>
					</div>
				</div>
				<div class="post_btm"></div>
			</div>
<?php 
		endwhile; 
?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
<?php 
	else : ?>
		<h3 class="archivetitle">Not found</h3>
		<p class="sorry">"Sorry, but you are looking for something that isn't here. Try something else.</p>
<?php
	endif;
	?>
	<a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed" class="rss"></a>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>		

