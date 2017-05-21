<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" />
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cormorant" />
		<meta name="viewport" content="width=device-width" />
	</head>
	<body <?php body_class(); ?>>
		<aside class="utility-links">
			<?php wp_nav_menu(array(
				"container"			=> "nav",
				"theme_location"	=> "newhope-utility-menu",
				"fallback_cb"		=> false
			)); ?>
		</aside>
		<header <?php echo has_post_thumbnail() ? "class=\"has-featured-image\"" : "" ?>>
			<?php the_custom_logo(); ?>
			<input id="toggle-menu" type="checkbox" class="toggle-box" />
			<label for="toggle-menu" class="toggle-menu toggle-label">
				Menu
				<span class="dashicons dashicons-no-alt close-icon"></span>
				<span class="dashicons dashicons-menu open-icon"></span>
			</label>
			<div class="menu-right">
				<?php wp_nav_menu(array(
					"container"			=> "nav",
					"theme_location"	=> "newhope-main-menu"
				)); ?>
			</div>
		</header>
		<main>
