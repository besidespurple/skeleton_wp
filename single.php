<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */

get_header();
do_action('st_before_content');
get_template_part( 'loop', 'single' );
do_action('st_after_content');
get_sidebar();
get_footer();
?>