<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rightlandpro
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rightlandpro_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'rightlandpro_body_classes' );

/**
 * Get tags.
 */
function rightlandpro_get_tag() {
	$html = '';
	if(has_tag()) {
		$html .= '<div class="blog-post-tag"><span>'. esc_html__('Releted Tags','rightlandpro') .'</span>';
			$html .= get_the_tag_list('',' ','');
		$html .= '</div>';
	}
	return $html;
}


/**
 * Get categories.
 */
function rightlandpro_get_category() {

$categories = get_the_category( get_the_ID() );
	$x = 0;
	foreach ($categories as $category){
		
	if($x==2){
		break;
	}	
	$x++;
	print '<span><a class="news-tag" href="' . get_category_link($category->term_id) . '">'  . $category->cat_name . '</a></span>';

	}
}

// rightlandpro_member_sidebar_func
function rightlandpro_member_sidebar_func() {
	if(is_active_sidebar('members-sidebar')){

		dynamic_sidebar( 'members-sidebar');
	}
}
add_action('rightlandpro_member_sidebar','rightlandpro_member_sidebar_func',20);

// rightlandpro_service_sidebar
function rightlandpro_service_sidebar_func() {
	if(is_active_sidebar('services-sidebar')){

		dynamic_sidebar( 'services-sidebar');
	}
}
add_action('rightlandpro_service_sidebar','rightlandpro_service_sidebar_func',20);

// rightlandpro_portfolio_sidebar
function rightlandpro_portfolio_sidebar_func() {
	if(is_active_sidebar('portfolio-sidebar')){

		dynamic_sidebar( 'portfolio-sidebar');
	}
}
add_action('rightlandpro_portfolio_sidebar','rightlandpro_portfolio_sidebar_func',20);