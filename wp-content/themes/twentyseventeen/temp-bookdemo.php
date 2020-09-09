<?php
/**
 *Template Name: Book Demo
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
			<div class="col-lg-12">
				<?php the_content(); ?>
				
			<br>

		<hr>
			</div>
			
			<div class="col-md-12 contact_detail">
			
				<p><u>We want you to evaluate TEAMS first-hand and be able to ask as many questions as you like.</u></p>
				<p><big><strong>A detailed demo only takes about 35-45 minutes plus any questions that you or your team members may have.
</strong></big></p>
			
<div  class="contact_form">
<?php echo do_shortcode('[contact-form-7 id="5" title="Book Demo"]'); ?>
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
