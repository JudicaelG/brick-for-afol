<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brick
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brick-for-afol' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'brick-for-afol' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'brick-for-afol' ), 'brick-for-afol', '<a href="https://github.com/JudicaelG">Judicael Guillaume</a>' );
				?>
		</div><!-- .site-info -->
        <div class="footer-menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                )
            );
            ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
