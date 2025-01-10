<?php
// using this function for in dashboard  under appearance add menu option Avaliable
// Register Primary and Secondary Menus

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu'   => __('Primary Menu', 'textdomain'),
            'secondary-menu' => __('Secondary Menu', 'textdomain'),
        )
    );
}
add_action('init', 'register_my_menus');

// using this function for in dashboard  under post page  add images uplode  Avaliable

add_theme_support('post-thumbnails');

// using this function for in dashboard  under  appearance add header option Avaliable

add_theme_support('custom-header');

// using this function for in dashboard  under  appearance add weight option Avaliable

   register_sidebar( array(
        'name'          => __( 'Custom Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main sidebar.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

// using this function for in dashboard  under  appearance add background option Avaliable

add_theme_support('custom-background');

// using this function for in dashboard  under  page and post  add short description option Avaliable

add_post_type_support('page','excerpt');




?>