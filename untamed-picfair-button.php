<?php
/**
 * Plugin Name: Untamed Picfair Button
 * Description: If custom field "picfair_url" is present, insert link button matching theme styles.
 * Version: 1.6
 * Author: Peter Mosier 2025-Nov 21
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function picfair_button_shortcode() {
    // 1. Get the current post's ID
    $post_id = get_the_ID();

    // 2. Get the value of the custom field 'picfair_url'
    $url = get_post_meta($post_id, 'picfair_url', true);

    // 3. If the field is empty, return nothing
    if (empty($url)) {
        return '';
    }

    // 4. Output the Button HTML
    // We build this as a single string to prevent WordPress from adding <br> tags.
    // We REMOVED the inline 'color' style so your Theme's hover effects will work.
	// We added padding-left and padding-right to the style attribute below.
    // This creates the 20px breathing room on mobile devices.
    
    $button_html = '<div class="wp-block-buttons is-content-justification-center is-layout-flex wp-block-buttons-is-layout-flex" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:20px;padding-right:20px;">';
    $button_html .= '<div class="wp-block-button has-custom-width wp-block-button__width-100">';
    $button_html .= '<a class="wp-block-button__link wp-element-button has-background" href="' . esc_url($url) . '" target="_blank" rel="noopener">';
    $button_html .= 'Shop this Print on Picfair';
    $button_html .= '</a></div></div>';

    return $button_html;
}
add_shortcode('picfair_btn', 'picfair_button_shortcode');