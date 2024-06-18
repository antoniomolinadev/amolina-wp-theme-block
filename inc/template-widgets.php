<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amolina_wp_theme_block_widgets_init_header() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Header', 'amolina-wp-theme-block' ),
			'id'            => 'sidebar-header',
			'description'   => esc_html__( 'Add widgets here.', 'amolina-wp-theme-block' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'amolina_wp_theme_block_widgets_init_header' );

function amolina_wp_theme_block_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Footer', 'amolina-wp-theme-block' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Add widgets here.', 'amolina-wp-theme-block' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'amolina_wp_theme_block_widgets_init' );