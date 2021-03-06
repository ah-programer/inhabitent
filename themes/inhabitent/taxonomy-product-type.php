<?php
/**
 * The template for displaying archive-product pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="product-header">
            <h2><?php single_term_title(); ?></h2>
            <?php echo term_description(); ?>

			</header><!-- .page-header -->

<div class="product-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post();?>




        <div class="product-item">
          <div class="product-image">
            <?php if ( has_post_thumbnail() ) : ?>
    					<?php the_post_thumbnail( 'large' ); ?>
    				<?php endif; ?>
          </div>
          <div class="product-meta">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url
            ( get_permalink() ) ), '</a></h2>' ); ?>
            <?php echo CFS()->get('product_price'); ?>

          </div>
        </div>

      <?php endwhile; ?>
    </div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
