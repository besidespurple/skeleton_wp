<?php

/**
 * bbPress User Profile Edit
 *
 * @package bbPress
 * @subpackage Theme
 */
get_header();
do_action('st_before_content');
do_action( 'bbp_template_notices' );
?>
<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
	<div class="entry-content">
		<?php bbp_get_template_part( 'bbpress/content', 'single-user-edit'   ); ?>
	</div><!-- .entry-content -->
</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->
<?php
do_action('st_after_content');

// get_sidebar('bbpress');
get_footer();
?>