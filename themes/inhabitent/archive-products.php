
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

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );

					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
        <!-- list of taxonomy terms -->
        <?php $terms = get_terms( array( 'taxonomy' => 'product-type') ); ?>
        <ul>
          <?php foreach ($terms as $term): ?>
            <li><a href="<?php echo get_term_link($term );?>"><?php echo $term->name;
            ?></a></li>

              <?php endforeach; ?>

			</header><!-- .page-header -->

<div class=("cpt-grid")>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : ?>




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
