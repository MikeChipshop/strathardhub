<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-title" content="Strathard Hub">
<meta name="application-name" content="Strathard Hub">
<meta name="msapplication-TileColor" content="#0693cf">
<meta name="theme-color" content="#0693cf">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="sbh_global-header">
		<div class="sbh_wrap">
			<h1 class="sbh_global-logo">
				<a href="<?php bloginfo('url'); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 522.4973 357.49654">
						<defs><style>.cls-1{fill:#58575e;}.cls-2{fill:#f0824a;}</style></defs>
						<title>Artboard 1</title>
						<g id="Layer_2" data-name="Layer 2">
							<path class="cls-1" d="M522.4973,0,72.54361.11959C32.377.11959.16667,45.32987.16667,91.49654L0,255.16321l320.16667-1.33333c29.66666,0,27.16666-52.33334,0-52.33334h-124c-84.00458-.18918-83.67125-148.18916.33332-148L522.4973,52.17269Z"/>
						</g>
						<g id="Layer_3" data-name="Layer 3">
							<path class="cls-2" d="M.16667,356.989l449.97752.50754c40.16667,0,71.43914-45.91667,71.43914-92.08333l.08334-163.56964L203.14419,103.1632c-29.66666,0-27.16666,52.33334,0,52.33334h124c84.00458.18918,83.67125,148.18916-.33332,148L.33466,304.82987Z"/>
						</g>
					</svg>
					Strathard<span>Hub</span>
				</a>
			</h1>
			<nav class="sbh_global-nav">
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>
				</ul>
			</nav>
		</div>
	</header>
