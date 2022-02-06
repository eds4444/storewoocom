<?php

add_action( 'after_setup_theme', 'crb_load' );

function crb_load(){
	load_template( get_template_directory(  ), '/includes/carbon-fields/vendor/autoload.php'); 
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'estore_custom_fields');
function estore_custom_fields(){
	require get_template_directory(  ) . '/includes/custom-fields-options/metabox.php';
    require get_template_directory(  ) . '/includes/custom-fields-options/theme-options.php';
}

require get_template_directory(  ) . '/includes/theme-settings.php';

require get_template_directory(  ) . '/includes/widget-areas.php';

require get_template_directory(  ) . '/includes/enqueue-script-style.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
}
