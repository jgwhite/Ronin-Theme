<?php
/*
Template Name: About and Home
*/

get_header(); ?>
<script type="text/javascript">
function popup (url) {
  var yourwindow = window.open(url, "PopupwindowName", "width=800,height=500,resizable=yes");
  yourwindow.focus();
  return false;
}
</script>
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
<div class="image1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/large/about.jpg" class="about1"></div>
	</div><!--/content-->
	<div class="vacancies">
		<div class="vacholder">
		  <a href="http://public.bullhornstaffing.com/JobBoard/Standard/default.cfm?privateLabelID=4811" target="_blank" onclick="return popup(this.href);"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vac-button.gif"  class="vac-button"></a>
		  </div>
	</div><!--/vacancies-->
<?php get_footer(); ?>