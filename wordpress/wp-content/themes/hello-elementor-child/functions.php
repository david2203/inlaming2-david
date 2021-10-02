<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

add_action('my_hook', "display_sitename");
function display_sitename() {
	echo "Davids Sportshop";
}

function cw_change_product_price_display( $price ) {
    $price .= ' per unit';

    return $price;
}

add_filter( 'woocommerce_get_price_html', 'cw_change_product_price_display' );


function register_my_menus()
{
register_nav_menus(
array(
'main-menu' => __('Main Menu', 'text_domain'),
'mobile-menu' => __('Mobile Menu', 'text_domain'),
'side-menu' => __('Side Menu', 'text_domain')

)
);
}
add_action('init', 'register_my_menus');


// Our custom post type function
function create_posttype() {
 
    register_post_type( 'store',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Stores' ),
                'singular_name' => __( 'Store' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Stores'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Stores', 'Post Type General Name', 'labb1-david' ),
            'singular_name'       => _x( 'Store', 'Post Type Singular Name', 'labb1-david' ),
            'menu_name'           => __( 'Stores', 'labb1-david' ),
            'parent_item_colon'   => __( 'Parent Store', 'labb1-david' ),
            'all_items'           => __( 'All Stores', 'labb1-david' ),
            'view_item'           => __( 'View Store', 'labb1-david' ),
            'add_new_item'        => __( 'Add New Store', 'labb1-david' ),
            'add_new'             => __( 'Add New', 'labb1-david' ),
            'edit_item'           => __( 'Edit Store', 'labb1-david' ),
            'update_item'         => __( 'Update Store', 'labb1-david' ),
            'search_items'        => __( 'Search Store', 'labb1-david' ),
            'not_found'           => __( 'Not Found', 'labb1-david' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'labb1-david' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Stores', 'labb1-david' ),
            'description'         => __( 'Store news and reviews', 'labb1-david' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'store', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );


    //enqueing some styles
function wpdocs_theme_name_scripts() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '0.1.0', 'all');
   }

   add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
    ?>
