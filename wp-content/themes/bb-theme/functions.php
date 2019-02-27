<?php

/*

WARNING! DO NOT EDIT THEME FILES IF YOU PLAN ON UPDATING!

Theme files will be overwritten and your changes will be lost 
when updating. Instead, add custom code in the admin under 
Appearance > Theme Settings > Code or create a child theme.

*/

// Defines
define( 'FL_THEME_VERSION', '1.5.4' );
define( 'FL_THEME_DIR', get_template_directory() );
define( 'FL_THEME_URL', get_template_directory_uri() );

// Classes
require_once 'classes/class-fl-color.php';
require_once 'classes/class-fl-customizer.php';
require_once 'classes/class-fl-fonts.php';
require_once 'classes/class-fl-theme.php';
require_once 'classes/class-fl-theme-update.php';

// Theme Actions
add_action( 'after_switch_theme',    'FLCustomizer::refresh_css' );
add_action( 'after_setup_theme',     'FLTheme::setup' );
add_action( 'init',                  'FLTheme::init_woocommerce' );
add_action( 'wp_enqueue_scripts',    'FLTheme::enqueue_scripts', 999 );
add_action( 'widgets_init',          'FLTheme::widgets_init' );
add_action( 'wp_footer',             'FLTheme::go_to_top' );

// Theme Filters
add_filter( 'body_class',            'FLTheme::body_class' );
add_filter( 'excerpt_more',          'FLTheme::excerpt_more' );

// Theme Updates
add_action( 'init',                  'FLThemeUpdate::init' );

// Admin Actions
add_action( 'admin_head',            'FLTheme::favicon' );

// Customizer
add_action( 'customize_preview_init',                    'FLCustomizer::preview_init' );
add_action( 'customize_controls_enqueue_scripts',        'FLCustomizer::controls_enqueue_scripts' );
add_action( 'customize_controls_print_footer_scripts',   'FLCustomizer::controls_print_footer_scripts' );
add_action( 'customize_register',                        'FLCustomizer::register' );
add_action( 'customize_save_after',                      'FLCustomizer::save' );

add_action('wp_enqueue_scripts', 'my_register_javascript', 100);

function my_register_javascript() {
  wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), '4.8.2', true);
  wp_enqueue_script('mediaelement');
}

function registro_nuevo_menu() {
  register_nav_menu('este-menu',__( 'Menu Superior' ));
}
add_action( 'init', 'registro_nuevo_menu' );

 

add_filter( 'wp_nav_menu_items', 'galusso_log_menu', 10, 2 );

function galusso_log_menu( $items, $args ) {

    if (!is_user_logged_in()) {
    	if (qtranxf_getLanguage() == 'es') {
    		$items .= '<li class="salado"><a class="menuadicional" href="http://estudioagil.com/hencorp/inicio-de-sesion/?lang=es">Ingresar</a></li>';
    	}else{
    		$items .= '<li class="salado"><a class="menuadicional" href="http://estudioagil.com/hencorp/inicio-de-sesion/?lang=en">Log In</a></li>';
    	}
    	
    }

    elseif (is_user_logged_in()) {
		if (qtranxf_getLanguage() == 'es') {
    		$items .= '<li class="salado"><a class="menuadicional" href="'.wp_logout_url( get_option('home') ).'">Salir</a></li>';
    	}else{
    		$items .= '<li class="salado"><a class="menuadicional" href="'.wp_logout_url( get_option('home') ).'">Log Out</a></li>';
    	}
	}

return $items;

}



add_filter('wp_nav_menu_items','add_to_second_menu', 10, 2);
function add_to_second_menu( $items, $args ) {
       if (is_user_logged_in()) {
            if (qtranxf_getLanguage() == 'es') {
                $items .= '<li class="prueba"><a class="menuabajo" href="http://estudioagil.com/hencorp/gobierno-corporativo/?lang=es">Corporativo</a></li>';
            }else{
                $items .= '<li class="prueba"><a class="menuabajo" href="http://estudioagil.com/hencorp/gobierno-corporativo/?lang=en">Corporate</a></li>';
            }
        }else{}
    
    return $items;
}



function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
    background-image: url(<?=get_option('home')?>/wp-content/uploads/2018/05/Logo-Hencorp-Home.png);
     width: 100%;
        background-size: contain;
    }
  </style>
<?php }//end my_login_logo()

add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
  return home_url();
}

add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
  return 'HENCORP';
}//end my_login_logo_url_title()

add_filter( 'login_headertitle', 'my_login_logo_url_title' );

if (current_user_can('subscriber')){
    show_admin_bar(false);
}
