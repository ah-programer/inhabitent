<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>


     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <header class="product-header">
             <?php if ( has_post_thumbnail() ) : ?>
                 <?php the_post_thumbnail( 'large' ); ?>
             <?php endif; ?>

             <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

         </header><!-- .entry-header -->

         <div class="entry-content">
         <?php echo CFS()->get( 'product_price' ); ?>
             <?php the_content(); ?>
<div class="bloke">
  <p><i class="fa fa-envelope"></i>info@inhabitent.com</p>
  <p><i class="fa fa-phone"></i>77-456-7891</p>
  <p>
    <i class="fa fa-facebook-official"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-google-plus"></i>
  </p>
</div>
         </div><!-- .entry-content -->

     </article><!-- #post-## -->


        <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
