<?php
/**
 * @package Categories_to_Documents
 * @version 1.0
 */
/*
Plugin Name: Categories to Documents
Plugin URI: http://whamcat.com/plugins/categories_to_documents/
Description: Adds categories to documents
Author: Joelle Gilley
Version: 1.0
Author URI: http://whamcat.com/
*/

function categories_to_documents_init() {
    register_taxonomy_for_object_type('category', 'document');
    register_taxonomy_for_object_type('post_tag', 'document');
}

add_action( 'admin_init' , 'categories_to_documents_init' );
