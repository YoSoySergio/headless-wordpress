<?php

/**
 * Plugin Name:  Register Theme Directory
 * Plugin URI:   https://github.com/roots/bedrock/
 * Description:  Register default theme directory
 * Version:      1.0.0
 * Author:       Roots
 * Author URI:   https://roots.io/
 * License:      MIT License
 */

if (!defined('WP_DEFAULT_THEME')) {
    register_theme_directory(ABSPATH . 'wp-content/themes');
}

add_filter('graphql_allowed_fields_on_restricted_type', function ($fields, $model_name, $data, $visibility, $owner, $current_user) {
    print_r($model_name);
    if ('PostTypeObject' === $model_name) {
        $fields[] = 'label';
    }
    return $fields;
}, 10, 6);
