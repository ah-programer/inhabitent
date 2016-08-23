<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if( have_posts((); ?>


     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <?php if ( has_post_thumbnail() ) : ?>
                 <?php the_post_thumbnail( 'large' ); ?>
             <?php endif; ?>

              div class="product-img-wrapper">

         </header><!-- .entry-header -->

         <div class="entry-content">
         <?php echo CFS()->get( 'product_price' ); ?>
             <?php the_content(); ?>
         </div><!-- .entry-content -->

     </article><!-- #post-## -->


        <?php endwhile; // End of the loop. ?>

        
    </div><!-- #primary -->

<?php get_footer(); ?>
