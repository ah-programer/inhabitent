<?php
/**
 * The template for displaying pages
 *
* @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- this is for home page container  ---->

		<section class="hero-page">

			<img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-full.svg" alt=""/>
</section>
		<!-- for the shope page container  -->

		<h1> shop stuff</h1>

		<section class="shop-stuff">

			<?php $product_types = get_terms( array( 'taxonomy' =>'product-type') );?>



		<?php foreach ( $product_types as $product_type) : ?>
			<div class="product_icon">
				<?php echo $product_type->name; ?>
				<?php echo $product_type->slug; ?>

				<img src="<?php echo get_template_directory_uri() . "/images/product-type-icons/".$product_type->slug.".svg" ?>" alt="icon">

		<p>
			<?php echo $product_type->description; ?>
		</p>
		<a href=" <?php echo get_term_link($product_type, 'product-type') ?> "><?php echo $product_type->name; ?> &nbsp;stuff</a>

 </div>
 <?php endforeach; ?>
 </section>


		<!-- for the journal page  -->
	<h2> INHABITENT JOURNAL</h2>

		<div class="front-page-products"> </div>

		<ul class="journal-container">

		<?php
 			$args = array(
	 			'posts_per_page' => 3,
 			);

			$blog_posts = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

	 			<li>
					<div class="journal-page">
						<?php if (has_post_thumbnail( )): ?>
	         		<?php the_post_thumbnail( 'large' ); ?>
 						<?php endif ; ?>
					</div>

					<div class="journal-information">
						<span>
	             <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
	           </span>
	           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	           <a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
	        </div>
	     </li>
	 <?php
			endforeach;
			wp_reset_postdata() ?>
		</ul>

 </div>

<?php get_footer(); ?>
