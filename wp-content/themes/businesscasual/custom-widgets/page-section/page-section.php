<?php
/*
Widget Name: Page Section
Description: Default Page Section which includes an image, heading, description and a button.
Author: SiteOrigin
Author URI: https://siteorigin.com
*/


class Page_Section extends SiteOrigin_Widget {


	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'page-section',

        // The name of the widget for display purposes.
        __('Page Section'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('Default Page Section which includes an image, heading, description and a button.'),
            'help'        => 'http://example.com/hello-world-widget-docs',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'heading' => array(
                'type' => 'text',
                'label' => __('Heading Text'),
                'default' => ''
            ),
            'tagline' => array(
                'type' => 'text',
                'label' => __('Tagline'),
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
            'buttonText' => array(
                'type' => 'text',
                'label' => __('Button Text (Optional)'),
                'default' => ''
            ),
            'buttonLink' => array(
                'type' => 'link',
                'label' => 'Button Link',
                'default' => '#'
            )
        ),

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}
    
    function get_template_name($instance) {
    return 'page-section-template';
}

function get_template_dir($instance) {
    return 'tpl';
}
    
    function get_style_name($instance) {
    return '';
}
    
}

siteorigin_widget_register('page-section', __FILE__, 'Page_Section');