<?php
/**
 * Custom functions
 */
function custom_excerpt_length( $length ) {
    return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '… <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Adds breadcrumbs functionality
 *
 * Use it with:
 * if(function_exists('custom_breadcrumb')) custom_breadcrumb();
 *
 */
function custom_breadcrumb() {
	if(!is_home()) {
		echo '<ol class="breadcrumb box-colored">';
		echo '<li><a href="'.get_option('home').'">Home</a></li>';
		if (is_category() || is_single()) {
      echo '<li>';
      the_category(', ');
      echo '</li>';
      if (is_single()) {
        echo '<li>';
        the_title();
        echo '</li>';
      }
		} elseif (is_page()) {
      echo '<li>';
      the_title();
      echo '</li>';
		} elseif (is_tag()) {
      echo '<li>Tag: ';
      single_tag_title();
      echo '</li>';
    } elseif (is_day()) {
      echo"<li>Archive for ";
      the_time('F jS, Y');
      echo'</li>';
    } elseif (is_month()) {
      echo"<li>Archive for ";
      the_time('F, Y');
      echo'</li>';
    } elseif (is_year()) {
      echo"<li>Archive for ";
      the_time('Y');
      echo'</li>';
    } elseif (is_author()) {
      echo"<li>Author Archive";
      echo'</li>';
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
      echo "<li>Blog Archives";
      echo'</li>';
    } elseif (is_search()) {
      echo"<li>Search Results";
      echo'</li>';
    }
		echo '</ol>';
	}
}


?>
