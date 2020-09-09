<?php
/**
 * Template Name: Contact us
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
				<h2><?php the_title(); ?><h2>
			</div>
<?php the_content(); ?>
			<div class="col-md-12 contact_detail">
			<div  class="contact_form">
<?php echo do_shortcode('[contact-form-7 id="151" title="Contact Form"]'); ?>
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
