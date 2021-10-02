<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php do_action('my_hook'); ?>
<?php
hello_elementor_body_open();

// if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
// 	if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
// 		get_template_part( 'template-parts/dynamic-header' );
// 	} else {
// 		get_template_part( 'template-parts/header' );
// 	}
// }
?>
<nav class="navbar">
      <div class="navbar__container">
       
        <a href="#home" id="navbar__logo">Sportshop</a>
        <ul class="navbar__menu">
        <?php wp_nav_menu( array(
 'theme_location' => 'main-menu', 'menu_class' => "menu"
) ); ?>
        </ul>
      </div>
    </nav>


