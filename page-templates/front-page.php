<?php
/**
 * Template Name: Front Page
 *
 * @package Motif
 */

get_header(); ?>

	<div id="primary" class="content-area front-page-content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="hero <?php echo ( '' != get_the_post_thumbnail() ) ? 'with-featured-image' : 'without-featured-image'; ?>">

				<?php if ( '' != get_the_post_thumbnail() ) : ?>
				<figure class="hero-content">
					<?php the_post_thumbnail( 'motif-hero-thumbnail' ); ?>
					<div class="hero-content-overlayer">
						<div class="hero-container-outer">
							<div class="hero-container-inner">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="entry-header">
										<h1 class="entry-title"><?php the_title(); ?></h1>
									</header><!-- .entry-header -->

									<div class="entry-content">
										<?php the_content(); ?>
									</div><!-- .entry-content -->
									<?php edit_post_link( __( 'Edit', 'motif' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
								</article><!-- #post-## -->
							</div><!-- .hero-container-inner -->
						</div><!-- .hero-container-outer -->
					</div><!-- .hero-content-overlayer -->
				</figure><!-- .hero-content -->

				<?php else : ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endif; ?>

			</div>

		<?php endwhile;

		?>

	</div><!-- #primary -->

	<div class="grid-page-content-area full-width">
		<div class="child-pages grid">
		<?php if ( 0 !== hlc_home_block_count( 'block-1', 'block-2', 'block-3' ) ) : ?>
			<div class="grid-row blocks-<?php echo hlc_home_block_count( 'block-1', 'block-2', 'block-3' ); ?>">
				<?php hlc_home_block( 'block-1' ); ?>
				<?php hlc_home_block( 'block-2' ); ?>
				<?php hlc_home_block( 'block-3' ); ?>
			</div><!-- .grid-row -->
		<?php endif; ?>

		<?php if ( 0 !== hlc_home_block_count( 'block-4', 'block-5', 'block-6' ) ) : ?>
			<div class="grid-row blocks-<?php echo hlc_home_block_count( 'block-4', 'block-5', 'block-6' ); ?>">
				<?php hlc_home_block( 'block-4' ); ?>
				<?php hlc_home_block( 'block-5' ); ?>
				<?php hlc_home_block( 'block-6' ); ?>
			</div><!-- .grid-row -->
		<?php endif; ?>
		</div><!-- .child-pages grid -->
	</div>

<?php get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
