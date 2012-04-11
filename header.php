<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name='viewport' content='initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0' />
<meta name='viewport' content='user-scalable=false' />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://use.typekit.com/imm7npd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/header-magic.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<script type="text/javascript">
function popup (url) {
  var yourwindow = window.open(url, "PopupwindowName", "width=800,height=500,resizable=yes");
  yourwindow.focus();
  return false;
}
</script>

<script type="text/javascript">
$(document).ready(function() {		$('a[href*="http://public.bullhornstaffing.com/JobBoard/Standard/default.cfm?privateLabelID=4811"]').attr('onclick', 'return popup(this.href);');
});
</script>
</head>
<body <?php body_class(); ?>>
<div class="page yellow">
  <div id="header">
  <a href="<?php echo get_option('home'); ?>/"><img id="home_link" src="<?php bloginfo('stylesheet_directory'); ?>/images/ronin-header-logo.gif" alt="Ronin Recruitment" class="ronin-header-logo"></a>
    <div id="access" role="navigation">
  	<?php ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		<div class="mobiledrop"><label class="roninmenulabel">Ronin Menu: </label><?php dropdown_menu( array( 
			'dropdown_title' => '-- Main Menu --'
			) ); ?></div>

    </div><!--access-->
  </div><!--header-->
</div><!--page-->
<div class="page grey">
  