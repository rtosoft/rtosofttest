<?php
/**
 * Template Name: Enquire
 */

get_header(); ?>



			<?php
			while ( have_posts() ) :
				the_post();

			?>

<!--Header Top Start-->
<section id="contact_page" class="inner_page">
	<div class="container">
		<div class="row">
			<div class="col-md-12 headline">
				<h2><?php the_title(); ?></h2>
			</div>
			
			
			<div class="col-lg-8 offset-2 contact_detail">
				<div class="text-center mrg30B">
					<?php the_content(); ?>
				</div>
				<hr>
				<div  class="contact_form">
<?php echo do_shortcode('[contact-form-7 id="147" title="Enquire Form"]'); ?>
			</div>
			
			</div>
		</div>
	</div>
</section>



<?php

			

			endwhile; // End the loop.
			?>


<?php
get_footer();
