<?php
/*
Widget Name: Store Section
Description: Store Section where we have store timing, phone and address.
Author: SiteOrigin
Author URI: https://siteorigin.com
*/


class Store_Section extends SiteOrigin_Widget {


	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'store-section',

        // The name of the widget for display purposes.
        __('Store Section'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('Store Section where we have store timing, phone and address.'),
            'help'        => 'http://example.com/hello-world-widget-docs',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'upperHeading' => array(
                'type' => 'text',
                'label' => __('Upper Heading'),
                'default' => 'Heading'
            ),
            'lowerHeading' => array(
                'type' => 'text',
                'label' => __('Lower Heading'),
                'default' => 'Heading'
            ),
            'address' => array(
                'type' => 'tinymce',
                'label' => __('Address'),
                'default' => 'Lorem Ipsum'
            ),
            'phone' => array(
                'type' => 'text',
                'label' => __('Phone'),
                'default' => ''
            ),
            'a_repeater' => array(
                'type' => 'repeater',
                'label' =>'Store Timing',
                'item_name'  => 'Add Timing for the Day',
                'item_label' => array(
                    'selector'     => "[id*='repeat_text']",
                    'update_event' => 'change',
                    'value_method' => 'val'
                ),
                'fields' => array(
                    'Day' => array(
                        'type' => 'text',
                        'label' => 'Day',
                        'default' => ''
                    ),
                    'Timing' => array(
                        'type' => 'text',
                        'label' => 'Open Close Time',
                        'default' => ''
                    )
                )
            ),
        ),

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}
    
    function get_template_name($instance) {
    return 'store-section-template';
}

function get_template_dir($instance) {
    return 'tpl';
}
    
    function get_style_name($instance) {
    return '';
}
    
}

siteorigin_widget_register('store-section', __FILE__, 'Store_Section');