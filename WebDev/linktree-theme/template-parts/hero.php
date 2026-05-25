<?php
/**
 * Hero template part.
 *
 * @package Syifaa_Linktree
 */

$hero_image = get_template_directory_uri() . '/assets/images/hero-sky.svg';
?>

<header class="hero">
	<img src="<?php echo esc_url( $hero_image ); ?>" alt="<?php esc_attr_e( 'Blue sky and modern building', 'syifaa-linktree' ); ?>" class="hero__image">
	<h1 class="hero__title">
		<?php
		if ( has_custom_logo() ) {
			bloginfo( 'name' );
		} else {
			echo esc_html__( 'Syifaa', 'syifaa-linktree' ) . '<br>' . esc_html__( 'Linktree', 'syifaa-linktree' );
		}
		?>
	</h1>
</header>

<section class="contact-grid" aria-label="<?php esc_attr_e( 'Contact actions', 'syifaa-linktree' ); ?>">
	<a class="contact-card" href="tel:+60123456789">
		<span aria-hidden="true">📱</span>
		<span><?php esc_html_e( 'Contact', 'syifaa-linktree' ); ?></span>
	</a>
	<a class="contact-card" href="mailto:hello@example.com">
		<span aria-hidden="true">✉️</span>
		<span><?php esc_html_e( 'Email', 'syifaa-linktree' ); ?></span>
	</a>
</section>
