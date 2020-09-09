<?php
/**
 * Template Name: Our Diff
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
			<?php
					$i=0;
					foreach(get_field('list') as $cl){
					if($i%2==0){	
						?>
				<div class="whyus_txt left_sec">
					<div class="whyus_img">
						<img src="<?php echo $cl['image']; ?>" alt="">
					</div>
					<h3><?php echo $cl['title']; ?></h3>
			
					<p><?php echo $cl['content']; ?>

</p>
				</div>
					<?php }else{ ?>
				<div class="whyus_txt right_sec">
					<div class="whyus_img">
						<img src="<?php echo $cl['image']; ?>" alt="">
					</div>
					<h3><?php echo $cl['title']; ?></h3>
			
					<p><?php echo $cl['content']; ?>



</p>
				</div>
				
					<?php } $i++;  } ?>
				
				
				
				
				
			</div>
			
			<div class="col-md-12">
<?php the_content(); ?>
				
			</div>
			
			
			
		</div>
	</div>
</section>



<?php

			

			endwhile; // End the loop.
			?>


<?php
get_footer();
