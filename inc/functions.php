<?php
/*

 * Support for Google updated/published date

 */

if ( ! function_exists( 'kilimandjaro_published_date' ) ) :



	function kilimandjaro_published_date() {

		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {

			$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';

		}

		$time_string = sprintf( $time_string,

			esc_attr( get_the_date( 'c' ) ),

			esc_html( get_the_date() ),

			esc_attr( get_the_modified_date( 'c' ) ),

			esc_html( get_the_modified_date() )

		);

		printf( __( '<span class="posted-on"><a href="%1$s" title="%2$s" rel="bookmark">%3$s</a></span>', 'kilimandjaro' ),

			esc_url( get_permalink() ),

			esc_attr( get_the_time() ),

			$time_string

		);

	}



endif;

