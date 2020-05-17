<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

function job_post_type() {
    $labels = array(
        'name'                => 'Oferta pracy',
        'singular_name'       => 'Oferta pracy',
        'menu_name'           => 'Oferty pracy',
        'parent_item_colon'   => 'Nadrzędna oferta pracy',
        'all_items'           => 'Wszystkie oferty pracy',
        'view_item'           => 'Zobacz ofertę',
        'add_new_item'        => 'Dodaj ofertę',
        'add_new'             => 'Dodaj nową',
        'edit_item'           => 'Edytuj ofertę',
        'update_item'         => 'Aktualizuj',
        'search_items'        => 'Szukaj ofert pracy',
        'not_found'           => 'Nie znaleziono',
        'not_found_in_trash'  => 'Nie znaleziono'
    ); 
    $args = array(
        'label' => 'job',
        'rewrite' => array(
            'slug' => 'oferty-pracy'
        ),
        'description'         => 'Oferta pracy',
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true, 
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-id-alt',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'job', $args );
} 
add_action( 'init', 'job_post_type', 0 );

