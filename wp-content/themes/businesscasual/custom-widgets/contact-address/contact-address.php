<?php
/*
Widget Name: Contact Address Block
Description: Contact Address block for contact us page which had heading, email, phone and address.
Author: SiteOrigin
Author URI: https://siteorigin.com
*/


class Contact_Address extends SiteOrigin_Widget {


	function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'contact-address',

        // The name of the widget for display purposes.
        __('Contact Address'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('Contact Address block for contact us page which had heading, email, phone and address.'),
            'help'        => 'http://example.com/hello-world-widget-docs',
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        array(
            'Rows' => array(
                'type' => 'select',
                'label' => __('Number of blocks per row'),
                'default' => '',
                'options' => array(
            'col-md-6' => __( 'Two', 'widget-form-fields-text-domain' ),
            'col-md-4 col-sm-6' => __( 'Three', 'widget-form-fields-text-domain' ),
            'col-xl-3 col-md-4 col-sm-6' => __( 'Four', 'widget-form-fields-text-domain' ),
        )
            ),
            'contactForm' => array(
                'type' => 'text',
                'label' => __('Contact7 Form Code'),
                'default' => '[contact-form-7 id="124" title="Contact Us Form"]'
            ),
            'a_repeater' => array(
                'type' => 'repeater',
                'label' =>'Contact Address',
                'item_name'  => 'Add Contact Address',
                'item_label' => array(
                    'selector'     => "[id*='repeat_text']",
                    'update_event' => 'change',
                    'value_method' => 'val'
                ),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Heading Text'),
                        'default' => ''
                    ),
                    'address' => array(
                        'type' => 'text',
                        'label' => __('Address'),
                        'default' => ''
                    ),
                    'email' => array(
                        'type' => 'text',
                        'label' => __('Email Address'),
                        'default' => ''
                    ),
                    'phone' => array(
                        'type' => 'text',
                        'label' => __('Phone Number'),
                        'default' => ''
                    )
                )
            )
        ),

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
}
    
    function get_template_name($instance) {
    return 'contact-address-template';
}

function get_template_dir($instance) {
    return 'tpl';
}
    
    function get_style_name($instance) {
    return '';
}
    
}

siteorigin_widget_register('contact-address', __FILE__, 'Contact_Address');