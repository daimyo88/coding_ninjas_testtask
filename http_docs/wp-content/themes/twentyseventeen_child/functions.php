<?php


function testtheme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

    wp_enqueue_script( 'child-script',
        get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery')
    );
}
add_action( 'wp_enqueue_scripts', 'testtheme_enqueue_styles' );


//Additional options for footer contact info

add_action('customize_register', function($customizer){
    $customizer->add_section(
        'contact-info',
        array(
            'title' => 'Contact info',
            'description' => 'Footer contact info'
        )
    );

    $customizer->add_setting(
        'company-email',
        array('default' => '')
    );
    $customizer->add_control(
        'company-email',
        array(
            'label' => 'Company email',
            'section' => 'contact-info',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'company-phone',
        array('default' => '')
    );
    $customizer->add_control(
        'company-phone',
        array(
            'label' => 'Company phone',
            'section' => 'contact-info',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'contact-info',
        array('default' => '')
    );
    $customizer->add_control(
        'contact-info',
        array(
            'label' => 'Contact info (popup text)',
            'section' => 'contact-info',
            'type' => 'textarea',
        )
    );
});

// WC single product page layout changes

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 30 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


//adding CPT

function create_posttype() {

    register_post_type( 'books',
        array(
            'labels' => array(
                'name' => __( 'Books' ),
                'singular_name' => __( 'Book' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'books'),
        )
    );
}

add_action( 'init', 'create_posttype' );

?>
