<?php

function get_the_post_summary( $length = 128, $string = "" ) {
	if( $string ) {
		$content = $string;
	} else {
		$content = wp_strip_all_tags( get_the_content() );
	}
	if( strlen( $content ) > $length ) {
		$content = substr( $content, 0, $length ) . '...';
	}
	echo $content;
}

function ciranda_enqueue_scripts() {
	/* Animate CSS */
	wp_enqueue_style( 'animate-css', get_stylesheet_direcotry_uri() . '/css/animate.min.css' );

	/* Animate on Scroll */
	wp_enqueue_style( 'aos-css', get_stylesheet_direcotry_uri() . '/css/aos.css' );
	wp_enqueue_script( 'aos-js', get_template_direcotry_uri() . '/js/aos.js ' );

	/* Swiper */
	wp_enqueue_style( 'swiper-css', get_stylesheet_direcotry_uri() . '/css/swiper-bundle.min.css' );
	wp_enqueue_script( 'swiper-js', template_direcotry_uri() . '/js/swiper-bundle.min.js' );

	/* Custom JS */
	wp_enqueue_script( 'custom-js', get_template_direcotry_uri() . '/js/custom.js' );
}
add_action( 'wp_enqueue_script', 'ciranda_enqueue_scripts' );


add_action( 'pre_get_posts', 'myprefix_query_offset', 1 );
function myprefix_query_offset(&$query) {

	//Before anything else, make sure this is the right query...
	if( ! $query->is_home() ) {
		return;
	}

	//if query hasn't offset option defined do nothing...
	if( ! isset( $query->query_vars['offset_start']  ) ) {
		return;
	}

	//First, define your desired offset...
	$offset = $query->query_vars['offset_start'];

	//Next, determine how many posts per page you want (we'll use WordPress's settings)
	$ppp = $query->query_vars['posts_per_page'];

	//Next, detect and handle pagination...
	if ( $query->is_paged ) {

		//Manually determine page query offset (offset + current page (minus one) x posts per page)
		$page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

		//Apply adjust page offset
		$query->set('offset', $page_offset );

	}
	else {

		//This is the first page. Just use the offset...
		$query->set( 'offset',$offset );

	}
}

add_filter( 'found_posts', 'myprefix_adjust_offset_pagination', 1, 2 );
function myprefix_adjust_offset_pagination( $found_posts, $query ) {

	//if query hasn't offset option defined do nothing...
	if( ! isset( $query->query_vars['offset_start']  ) ) {
		return;
	}

	//Define our offset again...
	$offset = $query->query_vars['offset_start'];

	//Ensure we're modifying the right query object...
	if ( $query->is_home() ) {
		//Reduce WordPress's found_posts count by the offset...
		return $found_posts - $offset;
	}
	return $found_posts;
}
