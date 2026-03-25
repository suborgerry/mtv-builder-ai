<?php
/**
 * Template Name: MC Flexible Builder
 * Template Post Type: page
 *
 * @package MTVBuilderAI
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content" class="mc-page-builder">
	<?php mtv_builder_render_flexible_sections( 'page_sections' ); ?>
</main>
<?php
get_footer();
