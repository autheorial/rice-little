<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php the_post(); ?>

<h1>Search</h1>
		<?php get_search_form(); ?>

<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<ul>
		<?php wp_get_archives('type=monthly&show_post_count=true' ); ?>	
		</ul>	
		<h1>Most Recent</h1>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=10'); ?>
		</ul>
		
		<h1>Categories</h1>
		<ul>
			 <?php wp_list_categories('title_li='); ?>
		</ul>
		
		<h1>Tags</h1>
		
		<?php wp_tag_cloud(''); ?>
	</div>
</div>

<?php get_footer(); ?>