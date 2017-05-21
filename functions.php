<?php

class NewHope
{
	function __construct()
	{
		add_action("init", array(&$this, "init"));
	}
	
	function init()
	{
		add_theme_support("custom-logo", array("height" => 90, "flex-width" => true));
		add_theme_support("post-thumbnails");
		add_theme_support("title-tag");
		register_nav_menus(array(
			"newhope-main-menu"		=> __("Main Menu"),
			"newhope-utility-menu"	=> __("Top Links")
		));
		wp_enqueue_style("dashicons");
		
		add_filter("wp_nav_menu_items", array(&$this, "wp_nav_menu_items"), 10, 2);
	}
	
	function wp_nav_menu_items($items, $args)
	{
		if($args->theme_location == "newhope-main-menu")
		{
			$items .= '<li>
				<input id="toggle-sitemap" type="checkbox" class="toggle-box" />
				<label for="toggle-sitemap" class="toggle-label">
					More
					<span class="dashicons dashicons-no-alt close-icon"></span>
					<span class="dashicons dashicons-arrow-down open-icon"></span>
				</label>
				<aside class="sitemap">
					' . wp_page_menu(array("echo" => false, "exclude" => get_option("page_on_front"))) . '
				</aside>
			</li>';
			$items .= '<li><a href="/search/"><span class="dashicons dashicons-search"></span></a></li>';
		}
		return $items;
	}
};

{
	$theme = new NewHope();
}

?>
