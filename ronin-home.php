<?php
/*
Template Name: Home
*/

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">
    
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		   <?php if(get_post_meta($post->ID, "feature-image", true)) { ?>  
        <img src="<?php echo get_post_meta($post->ID, "feature-image", true);?>" class="home">
        <?php } ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div><!--/entry-->
		</div><!--/post-->
		<?php endwhile; endif; ?>
		<div class="clear" style="clear:both;"></div>
	</div><!--/content-->
	<div class="vacancies">
		<a href="http://public.bullhornstaffing.com/JobBoard/Standard/default.cfm?privateLabelID=4811"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vac-button.gif"  class="vac-button"></a>
	</div><!--/vacancies-->
<?php get_footer(); ?>
