<?php

/*PARA REGISTRAR EL MENÚ*/
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



/*PARA EL MENÚ DESPLEGABLE FUNCIONE*/

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


/* PARA NO USAR CDN*/
/*function agregar_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery'), '1.14', true);

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js', array('popper'), '5.2', true);
}
add_action('wp_enqueue_scripts', 'agregar_css_js');
*/



/*registraar menús*/

function tema1_register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Superior' )
     )
   );
 }
 add_action( 'init', 'tema1_register_my_menus' );