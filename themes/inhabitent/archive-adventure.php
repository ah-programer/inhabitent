<?php
/**
 * The template for displaying advenutre archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="adventure-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );

				?>
			</header><!-- .page-header -->
			<div class="adventure-page">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


					<div class="adventure-wrapper">
					<a href="<?php the_permalink(); ?>">

						<?php if ( has_post_thumbnail() ) : ?>
        			<?php the_post_thumbnail( 'large' ); ?>
        		<?php endif; ?>

						<div class="advenutre-info">

	        		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

							<a href="<?php the_permalink(); ?>" class="botton transparent">Read More</a>
						</div>
					</a>
 				</div>  <!-- end advenutre wrapper -->
			<?php endwhile; ?>
 		</div> <!-- end advenutre grid -->


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
