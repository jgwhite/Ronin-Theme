<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<div class="bottommenuholder">
  <div class="bottommenu">
    <ul>
      <?php

      if (get_current_depth() > 2) {
        wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=1");
      }

      ?>  
    </ul>
  </div><!-- .bottommenu -->  
</div><!-- .bottommenuholder -->
</div>
<div class="clear" style="clear:both;"></div>
<div id="footer">
  <p>Ronin, Room 105, Parkway Business House, 2 Campbell Road, Eastleigh, Hampshire, SO50 5AD&nbsp;&nbsp;&nbsp;&nbsp;0845 680 1877&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:contact@ronin-ltd.com">contact@ronin-ltd.com</a></p>
</div>

<?php ?>
<?php wp_footer(); ?>
</body>
</html>