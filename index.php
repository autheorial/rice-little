<?php get_header(); ?>


<?php if (is_front_page() && !is_paged() )
     $posts = query_posts($query_string . '&cat=-174'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h6><?php if(the_title( '', '', false ) !='') the_title(); else echo '';?></h6>
<h3>Posted on <?php the_time('l, F jS, Y') ?> at <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_time('h:i a') ?></a> <?php edit_post_link('Edit', '| '); ?> | <?php comments_popup_link('Leave a comment &raquo;', '1 comment &raquo;', '% comments &raquo;');?></h3><div class="entry">

<?php the_content( '<div class="more">Read more &raquo;</div>' , TRUE, '' ); ?> 
</div>

<br />

<?php endwhile; ?>


<?php else : ?>

<h1>Aw, hamburgers!</h1>

<div class="entry">
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>

</div>
<?php endif; ?>
</div></div>