<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent_starter_Theme
 */

?>

			<!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">


 <!-- #Content-->

			<div class="site-info">
				<div class="block">
				 <h4>contact Info</h4>
						<p><i class="fa fa-envelope"></i>info@inhabitent.com</p>
						<p><i class="fa fa-phone"></i>77-456-7891</p>
						<p>
							<i class="fa fa-facebook-official"></i>
							<i class="fa fa-twitter"></i>
							<i class="fa fa-google-plus"></i>
            </p>
	    </div>

	    <div class="block">
	      <h4> business-Hour</h4>
	        <p> <span>monday-friday:</span> 9AM to 5PM</p>
	        <p><span>saturday:</span> 10AM to 2PM</p>
	        <p><span>sunday:</span> Closed </p>
      </div>

		  <div class="inhabitent-text">
			<a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-text.svg"?>" alt="Home Page"></a>
		  </div>

</div>

<div class="copyright">
	<p>Copyright &copy; 2016 Inhabitent</p>
	</div>
</footer>


		<?php wp_footer(); ?>
		<!-- <script src="https://code.jquary.com/jquary - 3.1.0" -->

	</body>
</html>
