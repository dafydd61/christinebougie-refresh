<?php
if ( ! function_exists( 'fncy_cb_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function fncy_cb_posted_on() {
	// BP: slight modification to Twenty Ten function, converting single permalink to multi-archival link
	// Y = 2012
	// F = September
	// m = 01–12
	// j = 1–31
	// d = 01–31
	printf( __( '<span class="entry-date">%2$s %3$s %4$s</span>', 'boilerplate' ),
		// %1$s = container class
		'meta-prep meta-prep-author',
		// %2$s = month: /yyyy/mm/
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			home_url() . '/' . get_the_date( 'Y' ) . '/' . get_the_date( 'm' ) . '/',
			esc_attr( 'View Archives for ' . get_the_date( 'F' ) . ' ' . get_the_date( 'Y' ) ),
			get_the_date( 'F' )
		),
		// %3$s = day: /yyyy/mm/dd/
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			home_url() . '/' . get_the_date( 'Y' ) . '/' . get_the_date( 'm' ) . '/' . get_the_date( 'd' ) . '/',
			esc_attr( 'View Archives for ' . get_the_date( 'F' ) . ' ' . get_the_date( 'j' ) . ' ' . get_the_date( 'Y' ) ),
			get_the_date( 'j' )
		),
		// %4$s = year: /yyyy/
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			home_url() . '/' . get_the_date( 'Y' ) . '/',
			esc_attr( 'View Archives for ' . get_the_date( 'Y' ) ),
			get_the_date( 'Y' )
		),
		// %5$s = author vcard
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'boilerplate' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'boilerplate_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function boilerplate_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( '<p>Filed under %1$s and tagged %2$s.</p><a class="permalink" href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a>', 'boilerplate' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( '<p>Filed under %1$s.</p><a class="permalink" href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a>', 'boilerplate' );
	} else {
		$posted_in = __( '<a class="permalink" href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a>', 'boilerplate' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

function fncy_discography_summary() {
	$output = '<div class="discography-summary">';
	$output .= '<a href="';
	$output .= get_permalink();
	$output .= '">';
	$output .= get_the_post_thumbnail('thumbnail');
	$output .= '</a>';
	$output .= '<ul>';
	$output .= '<li class="discography-artist">';
	$output .= get_post_meta($post->ID, 'discography-artist', true);
	$output .= '</li>';
	$output .= '<li class="discography-title"><strong>';
	$output .= get_post_meta($post->ID, 'discography-title', true);
	$output .= '</strong></li>';
	$output .= '<li><em>';
	$output .= get_post_meta($post->ID, 'discography-instruments', true);
	$output .= '</em></li>';
	$buylink = get_post_meta($post->ID, 'discography-buy-url', true);
	if ( $buylink && $buylink != '' ) {
		$output .= '<li class="discography-buy"><a target="_blank" href="';
		$output .= $buylink;
		$output .= '" class="buy-button">Buy</a></li>';
	}
	$output .= '</ul>';
	$output .= '</div>';
	echo $output;
}

?>