<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
<link rel="shortcut icon" type="image/x-icon" href="http://rice.hugs.nu/smile.ico" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php wp_title('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-', true, 'right');  ?><?php bloginfo('name'); ?>&nbsp;&nbsp;</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<link rel="stylesheet" href="/wp-content/plugins/fancy-box/jquery.fancybox.css?v=2.1.3" type="text/css" media="all" />
<script type="text/javascript" src="/wp-content/plugins/fancy-box/jquery.fancybox.js?v=2.1.3"></script>
<script type="text/javascript" src="/wp-content/plugins/fancy-box/jquery.easing.js?ver=1.3"></script>

<script type="text/javascript">
// Andy Langton's show/hide/mini-accordion - updated 23/11/2009
// Latest version @ http://andylangton.co.uk/jquery-show-hide
// this tells jquery to run the function below once the DOM is ready
$(document).ready(function() {
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='<font size="1">+</font>';
var hideText='<font size="1">-</font>';
// initialise the visibility check
var is_visible = false;
// append show/hide links to the element directly preceding the element with a class of "toggle"
$('.toggle').prev().append(' <a href="#" class="toggleLink">'+showText+'</a>');
// hide all of the elements with a class of 'toggle'
$('.toggle').hide();
// capture clicks on the toggle links
$('a.toggleLink').click(function() {
// switch visibility
is_visible = !is_visible;
// change the link depending on whether the element is shown or hidden
$(this).html( (!is_visible) ? showText : hideText);
// toggle the display - uncomment the next line for a basic "accordion" style
//$('.toggle').hide();$('a.toggleLink').html(showText);
$(this).parent().next('.toggle').toggle('slow');
// return false so any link destination is not followed
return false;
});
});

</script>

<script type="text/javascript">
	jQuery(document).ready(function($){
		var select = $('a[href$=".bmp"],a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".BMP"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]');
		select.attr('rel', 'fancybox');
		select.fancybox();
	});
</script>



   </head>
     <body>

<div id="fixed">
<?php get_sidebar(); ?>

<div id="page">
<?php next_posts_link('<span class="drr">&laquo;</span>') ?>
<?php previous_posts_link('<span class="dr">&raquo;</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="drr">&laquo;</span>', 'no'); ?>   
<?php next_post('%', '<span class="dr">&raquo;</span>', 'no'); ?><?php }?>
</div>

</div>


<div id="container">

<div id="content">