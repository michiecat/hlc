<?php
/**
 * The template used for displaying page content.
 *
 * @package Motif
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( '' == get_the_post_thumbnail() ) : ?>
		<header class="entry-header">
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
		</header>

	<?php else: ?>
		<div class="entry-thumbnail">
			<div class="entry-thumbnail-inner">
				<div class="entry-header">
					<h1 class="entry-subtitle">
						<?php
							if ( function_exists( 'the_subtitle' ) ) {
								the_subtitle();
						} ?>
					</h1>
				</div><!-- .entry-header -->

				<?php
					if ( is_page_template( 'page-templates/full-width-page.php' ) || is_page_template( 'page-templates/grid-page.php' ) ) :
						the_post_thumbnail( 'motif-page-thumbnail' );
					else :
						the_post_thumbnail();
					endif;
				?>
			</div><!-- .entry-thumbnail-inner -->
		</div><!-- .entry-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'motif' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'motif' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
