<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-title" content="Strathard Hub">
<meta name="application-name" content="Strathard Hub">
<meta name="msapplication-TileColor" content="#0693cf">
<meta name="theme-color" content="#0693cf">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="sbh_global-header">
		<div class="sbh_wrap">
			<nav class="sbh_global-nav">
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>
				</ul>
			</nav>
		</div>
	</header>
