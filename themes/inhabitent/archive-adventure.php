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

			<header class="archive-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );

				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="advenutre-page">

					<div class="advenutre-wrapper"
					<a herf="<?php the_permalink(); ?>">

						<?php if ( has_post_thumbnail() ) : ?>
        			<?php the_post_thumbnail( 'large' ); ?>
        		<?php endif; ?>

						<div class="advenutre-info">

        		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<herf="<?php the_permalink(); ?>" class="botton transparent">Read More</a>
</div>
 </div>   <!-- end advenutre wrapper -->
 </div>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
