<?php
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'home_block',
        'title'             => __('Home Block'),
        'description'       => __('A custom testimonial block.'),
        'render_template'   => plugin_dir_path( __FILE__ ).'blocks/home_block.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}