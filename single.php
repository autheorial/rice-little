<?php get_header(); ?>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h6><?php if(the_title( '', '', false ) !='') the_title(); else echo ' ';?></h6>
<h3>Posted on <?php the_time('l, F jS, Y') ?> at <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_time('h:i a') ?></a> <?php edit_post_link('Edit', '| '); ?> | <?php comments_popup_link('Leave a comment &raquo;', '1 comment &raquo;', '% comments &raquo;');?></h3><div class="entry">

<?php the_content(); ?>

<div class="data">Filed under <?php the_category(', ') ?> with the tag(s) of <?php the_tags( ' ', ', ', ''); ?>. 
<?php comments_number('There are currently no comments', 'There is currently one comment', 'There are currently % comments' );?> to this entry; <a href="#respond">would you like to add one?</a>
</div>


<?php comments_template(''); ?>

<?php endwhile; ?>










<?php else : ?>
<h1>Aw, hamburgers!</h1>

<div id="entry">
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>

</div>

<?php endif; ?>


</div>
<?php get_footer(); ?>