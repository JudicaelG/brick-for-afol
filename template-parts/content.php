<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Brick
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    </div>
    <?php endif; ?>
    <div class="post-content">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
                <div class="info">
				<?php
				bick_theme_posted_on();
				brick_theme_posted_by();
				?>
                </div>
                <div class="tag">
                    <?php
                    brick_theme_tag();
                    ?>
                </div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

        if(is_singular()):
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brick-for-afol' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brick-for-afol' ),
                    'after'  => '</div>',
                )
            );
        else:
        the_excerpt();
        endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php brick_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
