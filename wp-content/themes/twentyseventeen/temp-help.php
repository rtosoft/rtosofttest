<?php
/**
 * Template Name: Who We Help
 */

get_header(); ?>



			<?php
			while ( have_posts() ) :
				the_post();

			?>

<!--Header Top Start-->
<section id="about_page" class="inner_page">
<div class="container">
<div class="row">
<div class="col-md-12 headline">
<h2><?php the_title(); ?></h2>
</div>
<div class="col-md-12">
<?php the_content(); ?>

<ul class="bread_list">
			<li><a href="<?php echo home_url(); ?>">Home > </a></li>
			<li><a >Why Choose Us </a></li>
		</ul>
		<div class="col-md-12 mrg20T mrg40B">
			<div class="row">
				<a href="<?php echo home_url(); ?>/book-a-demo/" class="btn btn-demo">Book Demo</a>
				<a href="<?php echo home_url(); ?>/enquire-now/" class="btn btn-enquire">Enquire Now...</a>
			</div>
		</div>



</div>
<?php
					
					foreach(get_field('list') as $cl){ ?>
<div class="col-lg-6">
				<div class="help_area">
					<h3><a href="<?php echo $cl['link']; ?>"><?php echo $cl['title']; ?></a></h3>
					<p><?php echo $cl['content']; ?>

</p>
					<a href="<?php echo $cl['link']; ?>" class="btn btn-more">Read More »</a>
						
				</div>
			</div>
			
			<?php } ?>



</div>
</div>
</section>

<?php

			

			endwhile; // End the loop.
			?>


<?php
get_footer();
