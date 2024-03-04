<?php 
/**
 * Plugin Name: Example Blocks
 * Plugin URI: https://blocks.local.nl
 * Author: Samir Rafiq
 * Description: This is my custom block made with acf
 */


// Define the path to our plugin.
DEFINE( 'VGS_PLUGIN_PATH', plugin_dir_path( __FILE__) );

// Register our blocks.
function vgs_register_blocks() {
    register_block_type( VGS_PLUGIN_PATH . 'blocks/example-1/block.json' );
    register_block_type( VGS_PLUGIN_PATH . 'blocks/example-2/block.json' );
    register_block_type( VGS_PLUGIN_PATH . 'blocks/example-3/block.json' );
    register_block_type( VGS_PLUGIN_PATH . 'blocks/example-4/block.json' );
    register_block_type( VGS_PLUGIN_PATH . 'blocks/example-5/block.json' );
    register_block_type( VGS_PLUGIN_PATH . 'blocks/example-7/block.json' );
    register_block_type( VGS_PLUGIN_PATH . 'blocks/infobox/block.json' );
}
add_action('init', 'vgs_register_blocks');

// Save point.
function vgs_acf_json_save_point( $path ) {
    $path = VGS_PLUGIN_PATH . 'acf-json';
    return($path);

}
add_filter('acf/settings/save_json', 'vgs_acf_json_save_point');

// Load point.
function vgs_acf_json_load_point ( $paths) {
    unset( $path);
    $paths[] = VGS_PLUGIN_PATH . 'acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'vgs_acf_json_load_point');

// Add block category
function inesta_block_categories( $categories, $post ) {
$categories[] = array (
    'slug' => 'inesta-blocks',
    'title' => 'Inesta Blocks',
    'icon' => 'wordpress',
);
 return $categories;
}

add_filter('block_categories_all', 'inesta_block_categories', 10, 2 );