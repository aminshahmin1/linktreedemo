<?php
/**
 * Links template part.
 *
 * @package Syifaa_Linktree
 */

$links = array(
	array(
		'icon'  => '📷',
		'label' => __( 'Instagram', 'syifaa-linktree' ),
		'url'   => 'https://instagram.com',
	),
	array(
		'icon'  => '🎵',
		'label' => __( 'TikTok', 'syifaa-linktree' ),
		'url'   => 'https://tiktok.com',
	),
	array(
		'icon'  => '✏️',
		'label' => __( 'Portfolio', 'syifaa-linktree' ),
		'url'   => '#portfolio',
	),
	array(
		'icon'  => '💼',
		'label' => __( 'LinkedIn', 'syifaa-linktree' ),
		'url'   => 'https://linkedin.com',
	),
	array(
		'icon'  => '👩‍💻',
		'label' => __( 'Website', 'syifaa-linktree' ),
		'url'   => '#website',
	),
	array(
		'icon'  => '🌻',
		'label' => __( 'Spotify', 'syifaa-linktree' ),
		'url'   => 'https://spotify.com',
	),
);
?>

<?php
if ( has_nav_menu( 'primary' ) ) :
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container'      => 'nav',
			'container_class'=> 'links wp-menu-links',
			'menu_class'     => 'menu-link-list',
			'fallback_cb'    => false,
			'depth'          => 1,
		)
	);
else :
	?>
	<nav class="links" aria-label="<?php esc_attr_e( 'Social and portfolio links', 'syifaa-linktree' ); ?>">
		<?php foreach ( $links as $link ) : ?>
			<a class="link-card" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo 0 === strpos( $link['url'], 'http' ) ? '_blank' : '_self'; ?>" rel="noreferrer">
				<span class="link-card__icon" aria-hidden="true"><?php echo esc_html( $link['icon'] ); ?></span>
				<span><?php echo esc_html( $link['label'] ); ?></span>
			</a>
		<?php endforeach; ?>
	</nav>
<?php endif; ?>

<footer class="site-footer">
	<p><?php esc_html_e( 'Made with calm clicks.', 'syifaa-linktree' ); ?></p>
</footer>
