<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон хэдера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
</head>
<body <?php body_class(); ?>>
<header>
<div id="header" class="site">
<nav id="site-navigation" class="navigation" role="navigation">
    <div class="menu1">
	<?php 
	     wp_nav_menu(array(
		'theme_location'=> 'top',
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'menu_class' => 'testmenu',
		'menu_id' => '',
		'depth' => 2
	     ));
      
	?>

 <ul class="testmenu">
 	<li><a href="#">Our busines</a>
        <ul class="menu">
        	<li><a href="">First submenu</a></li>
        	<li><a href="">Second submenu</a></li>
        	<li><a href="">Third submenu</a></li>
        </ul>
 	</li>
 	<li><a href="#">About</a>
        <ul class="menu">
        	<li><a href="">Our company</a></li>
        	<li><a href="">What we do</a></li>
        	<li><a href="">Our team</a></li>
        </ul>
 	</li>
 	<li><a href="#">Contact Us</a></li>
 </ul>  
 </div>

</nav>
</div>
</header><!-- #site-navigation -->

