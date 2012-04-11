<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div id="content" class="narrowcolumn" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<!--<div class="navigation"><a href="../../ronin-blog/">&larr; Back to Ronin Blog</a>
  		</div>-->
		

			<div class="entry">
				<h2><?php the_title(); ?></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</div><!--entry-->
      <?php comments_template(); ?>
      <?php endwhile; else: ?>
      <?php endif; ?>

<div class="clear" style="clear:both;"></div>
	<div class="image13"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/large/mark-desk.jpg" class="about1"></div>
	</div><!--content-->
	</div>
<?php get_footer(); ?>