<div id="sidebar">
	<div id="mainsearch">
		<form id="mainsearchform" action="<?php bloginfo('url'); ?>/" method="get">
			<input class="input" type="text" value="Search ..." onfocus="if (this.value == 'Search ...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search ...';}" name="s" id="s" />
			<input class="submit" value="" type="submit"/>
		</form>
	</div>
	<div id="sidebar1">
		<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			<?php wp_list_pages('title_li=<h4>Pages</h4>'); ?>
		
			<?php wp_list_categories('show_count=1&title_li=<h4>Categories</h4>'); ?>

			<li>
				<h4>Archives</h4>
				<ul><?php wp_get_archives('type=monthly'); ?></ul>
			</li>
			<li><h4>Calendar</h4><?php get_calendar(); ?></li>
		<?php	endif;?>		
		</ul>
	</div>
	<div id="sidebar2">
		<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
			<li><h4>Recent Posts</h4><ul><?php wp_get_archives('type=postbypost&limit=5')?></ul></li>
			
			<li><h4>Tag Cloud</h4><?php wp_tag_cloud('smallest=10&largest=20&number=30&unit=px&format=flat&orderby=name'); ?></li>

			<?php if ( is_home() || is_page() ) { 	/* If this is the frontpage */ 
					wp_list_bookmarks('orderby=rand&title_before=<h4>&title_after=</h4>&between=<br/>&show_description=1&limit=20');

			} ?>
			<li><h4>Meta</h4>
				<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
				<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
				<?php wp_meta(); ?>
				</ul>
			</li>		
		<?php	endif;?>		
		</ul>
	</div>
</div>