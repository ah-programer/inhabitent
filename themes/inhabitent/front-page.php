<?php
/**
 * The template for displaying pages
 *
* @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- this is for home page c  ---->

		<section class="hero-page">

			<img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-full.svg" alt=""/>
</section>
		<!-- for the shope page   -->
	<section class="shop-stuff-container ">
		<h2> shop stuff</h2>
			<?php $product_types = get_terms( array( 'taxonomy' =>'product-type') );?>
			<?php foreach ( $product_types as $product_type) : ?>
			<div class="product_icon">
				<?php echo $product_type->name; ?>
				<img src="<?php echo get_template_directory_uri() . "/images/product-type-icons/".$product_type->slug.".svg" ?>" alt="icon"/>
					<p><?php echo $product_type->description; ?></p>
				<a href=" <?php echo get_term_link($product_type, 'product-type') ?> " class="solid-button"> <?php echo $product_type->name; ?> &nbsp;stuff</a>
 		</div>
 		<?php endforeach; ?>
 </section>

		<!-- for the journal page  -->
	<h2> INHABITENT JOURNAL</h2>

		<div class="front-page-products">

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
						<!-- <span> -->
	             <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
	           <!-- </span> -->
	           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	           <a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
	        </div>
	     </li>
	 <?php
			endforeach;
			wp_reset_postdata() ?>
			</div>
		</ul>

		    <h2> LATEST ADVENTURE </h2>
		<section class="adventure-posts">
		 <div class="container">

		 <?php
			$args = array( 'post_type' => 'adventure',
										 'order' => 'ASC',
										 'posts_per_page' => 4);
			$adventure_posts = get_posts( $args ); // returns an array of posts
		?>
		<!-- set a counter variable, to display the first post differently -->
		<?php $count = 0; ?>
		<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
			<?php if ($count === 0): ?>
				<div class="outer left">
					<div class="inner">
						<div class="adventure-image">
							<?php if ( has_post_thumbnail() ) : ?>
							 <?php the_post_thumbnail( 'full' ); ?>
						 <?php endif; ?>
						</div>


						<div class="adventure-info">
							<h3 class="adventure-entry"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
						 <a class="btn" href="<?php the_permalink(); ?>" class="button transparent">Read More</a>
						</div>


				 </div>
				</div> <!-- end outer left (largest square adventure post)-->
				<div class="outer right">

				<?php else: ?>
					<div class="inner">

						<div class="adventure-image">
							<?php if ( has_post_thumbnail() ) : ?>
							 <?php the_post_thumbnail( 'full' ); ?>
						 <?php endif; ?>
						</div>

						<div class="adventure-info">
						 <h3 class="adventure-entry"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
							<a href="<?php the_permalink(); ?>" class="button-transparent">Read More</a>
					 </div>

				 </div>

			<?php endif; ?>
			<?php $count++; ?>
		<?php endforeach; wp_reset_postdata();?>

			 </div> <!-- end outer right (3 smaller adventure posts) -->
		 </div> <!-- end container -->

		 <a href="<?php echo get_post_type_archive_link('adventure'); ?>" class="button-reverse">More Adventures</a>
	 </section>

 </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
