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

