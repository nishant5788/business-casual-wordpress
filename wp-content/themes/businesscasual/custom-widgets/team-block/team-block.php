<?php
/*
Widget Name: Team Block
Description: A team Block which contains Members' image, name, designation, description and social media links.
Author: SiteOrigin
Author URI: https://siteorigin.com
*/


class Team_Block extends SiteOrigin_Widget {


	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'team-block',

        // The name of the widget for display purposes.
        __('Team Block'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('A team Block which contains Members image, name, designation, description and social media links.'),
            'help'        => 'http://example.com/hello-world-widget-docs',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'heading' => array(
                'type' => 'text',
                'label' => __('Name'),
                'default' => ''
            ),
            'tagline' => array(
                'type' => 'text',
                'label' => __('Designation'),
                'default' => ''
            ),
            'description' => array(
                'type' => 'tinymce',
                'label' => __('Description'),
                'default' => ''
            ),
            'image' => array(
                'type' => 'media',
                'label' => __('Image'),
                'default' => ''
            ),
            'linkedin' => array(
                'type' => 'text',
                'label' => __('Linkedin'),
                'default' => '#'
            ),
            'facebook' => array(
                'type' => 'text',
                'label' => __('Facebook'),
                'default' => '#'
            ),
            'twitter' => array(
                'type' => 'text',
                'label' => __('Twitter'),
                'default' => '#'
            )
        ),

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}
    
    function get_template_name($instance) {
    return 'team-block-template';
}

function get_template_dir($instance) {
    return 'tpl';
}
    
    function get_style_name($instance) {
    return '';
}
    
}

siteorigin_widget_register('team-block', __FILE__, 'Team_Block');