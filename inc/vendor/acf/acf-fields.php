<?php
/**
 * Advanced Custom Fields Setup
 *
 * @package _s
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-fields',
		'title' => 'About Fields',
		'fields' => array (
			array (
				'key' => 'field_54875daac9140',
				'label' => 'Services Intro',
				'name' => 'services_intro',
				'type' => 'textarea',
				'instructions' => 'Enter some text introducing the services the business provides.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_548753d052a6c',
				'label' => 'Item List',
				'name' => 'item_list',
				'type' => 'repeater',
				'instructions' => 'Add a list of items (e.g. "Industries" or "Disciplines") by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_5487542f52a6d',
						'label' => 'List Name',
						'name' => 'list_name',
						'type' => 'text',
						'instructions' => 'Enter the name of the list here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. Industries',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5487544552a6e',
						'label' => 'List Items',
						'name' => 'list_items',
						'type' => 'wysiwyg',
						'instructions' => 'Add the list of items here.',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => 2,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_5485c99631946',
				'label' => 'Enable Social',
				'name' => 'enable_social',
				'type' => 'true_false',
				'instructions' => 'Check to enable the social links section at the bottom of the page.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5485c93a54d1e',
				'label' => 'Social Headline',
				'name' => 'social_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the social links section.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5485c99631946',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5485c95c54d1f',
				'label' => 'Social Text',
				'name' => 'social_text',
				'type' => 'textarea',
				'instructions' => 'Enter some text to appear below the social links section headline.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5485c99631946',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/about-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_contact-fields',
		'title' => 'Contact Fields',
		'fields' => array (
			array (
				'key' => 'field_546e6badb8ba3',
				'label' => 'Contact Forms',
				'name' => 'contact_forms',
				'type' => 'acf_cf7',
				'instructions' => 'Select one or more contact forms here.',
				'required' => 1,
				'allow_null' => 0,
				'multiple' => 1,
				'disable' => array (
					0 => 0,
				),
			),
			array (
				'key' => 'field_546e2c5d1a646',
				'label' => 'Google Map',
				'name' => 'google_map',
				'type' => 'google_map',
				'instructions' => 'Enter the business address to display it on a map.',
				'required' => 1,
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/contact-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_page-fields',
		'title' => 'Page Fields',
		'fields' => array (
			array (
				'key' => 'field_546e2c9cf3d07',
				'label' => 'Custom Heading',
				'name' => 'custom_heading',
				'type' => 'text',
				'instructions' => 'Enter a custom heading for the page.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'page-templates/home-page.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_web-services-fields',
		'title' => 'Web Services Fields',
		'fields' => array (
			array (
				'key' => 'field_5489d850cd3e3',
				'label' => 'Website Features',
				'name' => 'website_features',
				'type' => 'repeater',
				'instructions' => 'Add some features of the websites we build by clicking "Add Row" below.',
				'sub_fields' => array (
					array (
						'key' => 'field_5489d8bacd3e4',
						'label' => 'Feature Title',
						'name' => 'feature_title',
						'type' => 'text',
						'instructions' => 'Add a title for the feature.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. "Responsive"',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5489d952cd3e5',
						'label' => 'Feature Text',
						'name' => 'feature_text',
						'type' => 'textarea',
						'instructions' => 'Add some text about the feature.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => 300,
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => 3,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/web_services-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_work-item-fields',
		'title' => 'Work Item Fields',
		'fields' => array (
			array (
				'key' => 'field_5487343ac75f6',
				'label' => 'Item Link',
				'name' => 'item_link',
				'type' => 'text',
				'instructions' => 'Enter a URL for the work item to link to.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_548737a023b59',
				'label' => 'Item Images',
				'name' => 'item_images',
				'type' => 'repeater',
				'instructions' => 'Upload item images by clicking "Add Row" below.',
				'sub_fields' => array (
					array (
						'key' => 'field_548737be23b5a',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => 'Upload an image (or screenshot) of the item here.',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'work_item',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_work-page-fields',
		'title' => 'Work Page Fields',
		'fields' => array (
			array (
				'key' => 'field_54aef6b50ec8f',
				'label' => 'Work Items',
				'name' => 'work_items',
				'type' => 'relationship',
				'instructions' => 'Select the work items to appear on the work page.',
				'required' => 1,
				'return_format' => 'object',
				'post_type' => array (
					0 => 'work_item',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'featured_image',
					1 => 'post_title',
				),
				'max' => 18,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/work-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_hero-section',
		'title' => 'Hero Section',
		'fields' => array (
			array (
				'key' => 'field_54738ed1a796c',
				'label' => 'Hero Background',
				'name' => 'hero_background',
				'type' => 'image',
				'instructions' => 'Upload an image to use as the background of the hero section.',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_54737b85cff93',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'instructions' => 'Upload an image to use in the hero section.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_546e4a48b0c32',
				'label' => 'Hero Headline',
				'name' => 'hero_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the hero section.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e4a59b0c33',
				'label' => 'Hero Text',
				'name' => 'hero_text',
				'type' => 'textarea',
				'instructions' => 'Enter some text for the hero section.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => 150,
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_546e4ac6b0c34',
				'label' => 'Button Text',
				'name' => 'hero_button_text',
				'type' => 'text',
				'instructions' => 'Enter some text for the button in the hero section.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 15,
			),
			array (
				'key' => 'field_5473a37464a31',
				'label' => 'Button URL',
				'name' => 'hero_button_url',
				'type' => 'text',
				'instructions' => 'Enter a URL for the button to link to.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_about-section',
		'title' => 'About Section',
		'fields' => array (
			array (
				'key' => 'field_5476287d77e7e',
				'label' => 'Enable About',
				'name' => 'enable_about',
				'type' => 'true_false',
				'instructions' => 'Check to enable the contact section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5476293077e7f',
				'label' => 'About Headline',
				'name' => 'about_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the about section here.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5476287d77e7e',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5476294777e80',
				'label' => 'About Text',
				'name' => 'about_text',
				'type' => 'textarea',
				'instructions' => 'Enter some text to appear below the about headline.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5476287d77e7e',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5476297177e81',
				'label' => 'Button Text',
				'name' => 'about_button_text',
				'type' => 'text',
				'instructions' => 'Enter some text for the button in the about section.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5476287d77e7e',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5476297877e82',
				'label' => 'Button URL',
				'name' => 'about_button_url',
				'type' => 'text',
				'instructions' => 'Enter a URL for the button to link to.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5476287d77e7e',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
	register_field_group(array (
		'id' => 'acf_services-section',
		'title' => 'Services Section',
		'fields' => array (
			array (
				'key' => 'field_5474ed23a096b',
				'label' => 'Enable Services?',
				'name' => 'enable_services',
				'type' => 'true_false',
				'instructions' => 'Check to enable the services section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_546e4c085048e',
				'label' => 'Services Headline',
				'name' => 'services_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the services section here.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ed23a096b',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e4b9a8dbea',
				'label' => 'Services',
				'name' => 'services',
				'type' => 'repeater',
				'instructions' => 'Add services by clicking "Add Row" below.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ed23a096b',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_546e4f4631480',
						'label' => 'Service Icon',
						'name' => 'service_icon',
						'type' => 'image',
						'instructions' => 'Upload an image to use as the service icon.',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_546e4ba58dbeb',
						'label' => 'Service Title',
						'name' => 'service_title',
						'type' => 'text',
						'instructions' => 'Enter a headline for the service.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => 30,
					),
					array (
						'key' => 'field_546e4bdd8dbec',
						'label' => 'Service Text',
						'name' => 'service_text',
						'type' => 'textarea',
						'instructions' => 'Enter some text describing the service.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => 150,
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_5473aed9631c5',
						'label' => 'Service URL',
						'name' => 'service_url',
						'type' => 'text',
						'instructions' => 'Enter a URL for the service to link to.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 3,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 3,
	));
	register_field_group(array (
		'id' => 'acf_work-section',
		'title' => 'Work Section',
		'fields' => array (
			array (
				'key' => 'field_5474edc6e97f5',
				'label' => 'Enable Work?',
				'name' => 'enable_work',
				'type' => 'true_false',
				'instructions' => 'Check to enable the services section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_546e5c7fa8528',
				'label' => 'Work Items',
				'name' => 'work_items',
				'type' => 'repeater',
				'instructions' => 'Add work items by clicking "Add Row" below.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474edc6e97f5',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_546e60856ae7c',
						'label' => 'Item',
						'name' => 'item',
						'type' => 'relationship',
						'instructions' => 'Select a work item using the search form below.',
						'required' => 1,
						'column_width' => '',
						'return_format' => 'object',
						'post_type' => array (
							0 => 'work_item',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'filters' => array (
							0 => 'search',
						),
						'result_elements' => array (
							0 => 'featured_image',
							1 => 'post_title',
						),
						'max' => 1,
					),
					array (
						'key' => 'field_548607d085b4f',
						'label' => 'Item Image',
						'name' => 'item_image',
						'type' => 'image',
						'instructions' => 'Upload an image for the item here.',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_546e5de9a8529',
						'label' => 'Item Text',
						'name' => 'item_text',
						'type' => 'textarea',
						'instructions' => 'Enter some text describing the work item here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => 175,
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => 2,
				'row_limit' => 3,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 4,
	));
	register_field_group(array (
		'id' => 'acf_more-work-section',
		'title' => 'More Work Section',
		'fields' => array (
			array (
				'key' => 'field_5487282da9c73',
				'label' => 'Enable More Work?',
				'name' => 'enable_more_work',
				'type' => 'true_false',
				'instructions' => 'Check to enable the more work section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_548727f12f0c9',
				'label' => 'More Work Headline',
				'name' => 'more_work_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the more work section here.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5487282da9c73',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54872a0dc4a88',
				'label' => 'Button Text',
				'name' => 'more_work_button_text',
				'type' => 'text',
				'instructions' => 'Enter some text for the more work button.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5487282da9c73',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_548f0b8b53dcf',
				'label' => 'More Work Items',
				'name' => 'more_work_items',
				'type' => 'repeater',
				'instructions' => 'Add work items to the "More Work" section by clicking "Add Row" below.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5487282da9c73',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_548f0d91e54bf',
						'label' => 'Work Item',
						'name' => 'work_item',
						'type' => 'post_object',
						'instructions' => 'Select a work item here.',
						'required' => 1,
						'column_width' => '',
						'post_type' => array (
							0 => 'work_item',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'allow_null' => 1,
						'multiple' => 0,
					),
				),
				'row_min' => 3,
				'row_limit' => 3,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 5,
	));
	register_field_group(array (
		'id' => 'acf_testimonials-section',
		'title' => 'Testimonials Section',
		'fields' => array (
			array (
				'key' => 'field_5474ed4a0f2c9',
				'label' => 'Enable Testimonials?',
				'name' => 'enable_testimonials',
				'type' => 'true_false',
				'instructions' => 'Check to enable the testimonials section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_546e571539794',
				'label' => 'Testimonials Headline',
				'name' => 'testimonials_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the testimonials section here.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ed4a0f2c9',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e577521444',
				'label' => 'Testimonials',
				'name' => 'testimonials',
				'type' => 'repeater',
				'instructions' => 'Add testimonials by clicking "Add Row" below.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ed4a0f2c9',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_546e579021445',
						'label' => 'Testimonial Text',
						'name' => 'testimonial_text',
						'type' => 'textarea',
						'instructions' => 'Enter the text of the testimonial here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => 300,
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_546e57cb21446',
						'label' => 'Author',
						'name' => 'author',
						'type' => 'text',
						'instructions' => 'Enter the name of the person who provided the testimonial.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_546e580a21447',
						'label' => 'Author Title',
						'name' => 'author_title',
						'type' => 'text',
						'instructions' => 'Enter the title (or position) of the testimonial author.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 6,
	));
	register_field_group(array (
		'id' => 'acf_clients-section',
		'title' => 'Clients Section',
		'fields' => array (
			array (
				'key' => 'field_5474ed6065b02',
				'label' => 'Enable Clients?',
				'name' => 'enable_clients',
				'type' => 'true_false',
				'instructions' => 'Check to enable the clients section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_546e568c5fc3e',
				'label' => 'Clients Headline',
				'name' => 'clients_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the clients section here.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ed6065b02',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e55a468e7f',
				'label' => 'Clients',
				'name' => 'clients',
				'type' => 'repeater',
				'instructions' => 'Add client logos by clicking "Add Row" below.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ed6065b02',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_546e55be68e80',
						'label' => 'Client Logo',
						'name' => 'client_logo',
						'type' => 'image',
						'instructions' => 'Upload an image of the client logo (preferably a PNG).',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => 3,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 7,
	));
	register_field_group(array (
		'id' => 'acf_contact-section',
		'title' => 'Contact Section',
		'fields' => array (
			array (
				'key' => 'field_5474ee1948f51',
				'label' => 'Enable Contact',
				'name' => 'enable_contact',
				'type' => 'true_false',
				'instructions' => 'Check to enable the contact section.',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5474ebd6fcfee',
				'label' => 'Contact Headline',
				'name' => 'contact_headline',
				'type' => 'text',
				'instructions' => 'Enter a headline for the contact section here.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ee1948f51',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474ee417a041',
				'label' => 'Contact Text',
				'name' => 'contact_text',
				'type' => 'textarea',
				'instructions' => 'Enter some text to appear below the contact headline.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ee1948f51',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => 100,
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5474f6375ea21',
				'label' => 'Button Text',
				'name' => 'contact_button_text',
				'type' => 'text',
				'instructions' => 'Enter some text for the button in the contact section.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ee1948f51',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 15,
			),
			array (
				'key' => 'field_5474eea87a042',
				'label' => 'Button URL',
				'name' => 'contact_button_url',
				'type' => 'text',
				'instructions' => 'Enter a URL for the button to link to.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5474ee1948f51',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 8,
	));
}
