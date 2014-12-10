<?php
/**
 * Utility Functions
 *
 * @package _s
 */

/**
 * Flush rewrite rules on theme activation
 */
function _s_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_s_flush_rewrite_rules' );

/**
 * Add page template slug body class
 */
function _s_page_template_slug( $slug ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = get_page_template_slug( $post->ID );
		// get only template name if in subfolder
		$class_slug = ltrim( strstr( $classes[0], '/' ), '/' );
		// remove the file extension
		$slug[] = str_replace( '.php', '', $class_slug );
	}
	return $slug;
}
add_filter( 'body_class', '_s_page_template_slug' );

/**
 * Post Thumbnail URL function
 */
function _s_thumbnail_url( $size ) {
	// hat tip: http://goo.gl/fzHOaB
	$img_id = get_post_thumbnail_id();
	$img_array = wp_get_attachment_image_src( $img_id, $size, true );
	$img_url = $img_array[0];
	return $img_url;
}

/**
 * Post Thumbnail alt text function
 */
function _s_thumbnail_alt() {
	$img_id = get_post_thumbnail_id();
	$img_alt = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
	return $img_alt;
}

/**
 * Get home page ID
 */
function _s_home_ID() {
	$home_id = get_option( 'page_on_front' );
	return $home_id;
}

/**
 * Strip phone number formatting
 */
function _s_phone_number( $phone ) {
	$phone = preg_replace( '/[^0-9]/', '', $phone );
	return $phone;
}

/**
 * Custom excerpt using word count
 */
function _s_custom_excerpt( $more_text = '', $stripteaser = 0, $more_file = '' ) {
	$content = get_the_content( $more_text, $stripteaser, $more_file );
	$content = apply_filters( 'the_content', $content );
	$content = strip_tags( $content, '<p>' );
	// remove <p> tags left after stripping images
	$content = preg_replace( '/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '', $content );
	return $content;
}


/**
 * Add classes to image anchor tags
 */
function _s_custom_image_classes( $content ) {
	// add classes separated by spaces
	$classes = 'swipebox';
	// check for class existance
	if ( preg_match('/<a.*? class=".*?"><img/', $content ) ) {
		$content = preg_replace('/(<a.*? class=".*?)(".*?><img)/', '$1 ' . $classes . '$2', $content );
	} else {
		$content = preg_replace('/(<a.*?)><img/', '$1 class="' . $classes . '" ><img', $content );
	}
	return $content;
}
add_filter( 'the_content', '_s_custom_image_classes' );

/**
 * Detect current template
 *//*
function _s_show_template() {
	global $template;
	print_r( $template );
}
add_action( 'wp_head', '_s_show_template' ); */
