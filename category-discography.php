<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

				<h1><?php single_cat_title(); ?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				global $query_string;
				query_posts( $query_string . '&orderby=meta_value&meta_key=discography-date&order=DESC&posts_per_page=-1' );
				get_template_part( 'loop', 'discography' );
				?>

<?php get_footer(); ?>

<?php
/*
				$wp_query = new WP_Query(  array (
								'category_name' => 'discography',
								'orderby' => 'meta_value_num',
								'meta_key' => 'discography-date'
				    )
				);
'orderby'=> array(
    array(
      'key' => 'discography-date',
      'compare' => '>',
      'value' => $currentdate,
      'type' => 'DATE',
    )),
'meta_key' => 'releasedate_value',
'orderby' => 'meta_value',
'order' => 'ASC'
*/
?>

