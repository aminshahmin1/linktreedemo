<?php
/**
 * Front page template.
 *
 * @package Syifaa_Linktree
 */

get_header();
?>

<main class="page-shell" aria-label="<?php esc_attr_e( 'Personal links', 'syifaa-linktree' ); ?>">
	<article class="linktree-card">
		<?php
		get_template_part( 'template-parts/hero' );
		get_template_part( 'template-parts/links' );
		?>
	</article>
</main>

<?php
get_footer();
