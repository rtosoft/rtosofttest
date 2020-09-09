<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>


		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				$bc = get_field('banner_course');
				?>


<!--Header Top Start-->
<section class="banner_area">
	<div id="banner-carousel" class="owl-carousel">
                    <div class="item">
                    	<div class="container">
                    		<div class="row">
                    			<div class="banner_sec">
                    		<div class="banner_txt">
<?php the_content(); ?>
                   				
                   				
                    		</div>
                    		<div class="banner_img">
                    			<div class="banner_img_area">
                    				<div class="banner_img1">
                    					<img src="<?php echo THIMTHUMBURL.'?src='.get_the_post_thumbnail_url().'&h=407&w=387&zc=1' ;?>" alt="">
                    				</div>
                    				<ul class="bnnr_course_list">
										<?php foreach($bc as $b){ ?>
                    					<li class="bounce-1">
                    						<a href="<?php echo $b['link']; ?>">
                    							<div class="course_img"><img src="<?php echo $b['icon']; ?>" alt=""></div>
                    						<p><?php echo $b['title']; ?></p>
                    						</a>
                    					</li>
										<?php } ?>
                    					
                    				</ul>
                    			</div>
                    		</div>
                    	</div>
                    		</div>
                    	</div>
						
                    </div>
                    
                </div>
</section>

<section class="possibilities_area">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<div class="possibilities_box">
					<div class="possibilities">
					<div class="possibilities_left">
						<?php echo get_field('after_banner_left_content'); ?>
					</div>
					<div class="possibilities_right">
					<?php echo get_field('after_banner_right_content'); ?>
					</div>
					
				</div>
			<div class="Learning">
				<ul class="Learning_list">
					<?php foreach(get_field('before_feature_loop') as $bl){ ?>
					<li><a ><img src="<?php echo asset; ?>/img/tick_ico.png" alt=""><?php echo $bl['content']; ?>
</a></li>
					<?php } ?>			
				
				</ul>
			</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="integrated_area">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-1 headline">
				<?php echo get_field('feature_content'); ?>
			</div>
			
			<div class="col-md-12 integrated_sec">
				<div class="row">
					<?php foreach(get_field('features') as $f){ ?>
					<div class="col-lg-4 col-md-6">
						<div class="integrated">
							<div class="integrated_img">
								<img src="<?php echo $f['icon']; ?>" alt="">
							</div>
							<div class="integrated_txt">
								<h4><?php echo $f['title']; ?></h4>
								<p><?php echo $f['content']; ?></p>
							</div>
						</div>
					</div>
					<?php } ?>
					
					<div class="col-md-12 text-center">
						<a href="<?php echo get_field('course_link'); ?>" class="btn btn-more">View All Courses</a>
					</div>
					
					
					
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="how_it_works_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 how_it_works">
				<div class="row">
				<?php foreach(get_field('after_feature_section') as $af){ ?>
					<div class="col-lg-4">
						<div class="works_sec">
							
							<div class="works_img">
								<img src="<?php echo $af['icon']; ?>" alt="">
							</div>
							<div class="works_txt">
							<?php echo $af['content']; ?>
								<div class="text-center">
									<a href="<?php echo $af['link']; ?>" class="btn btn-learn">Learn More...</a>
								</div>
							</div>
						
						</div>
					</div>
					

					<?php } ?>
					
					<div class="col-md-12 headline"><h2>How it works</h2></div>
					<?php
					$i=1;
					foreach(get_field('work_section') as $w){ ?>
					<div class="col-lg-4">
						<div class="howit_sec">
							
							<div class="howit_img">
								<img src="<?php echo $w['icon']; ?>" alt="">
							</div>
							<div class="howit_txt">
								<h4><?php echo $i; ?>. 	<?php echo $w['title']; ?></h4>
								<p>	<?php echo $w['content']; ?></p>
								
							</div>
						
						</div>
					</div>
					
					<?php $i++; } ?>
					
					
				</div>
				
			</div>
		</div>
	</div>
</section>

<section class="Certifications_Area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 Certifications_Sec">
				<div class="row">
					<div class="col-md-12 headline">
<?php echo get_field('certificate_content'); ?>
					</div>
					<div class="col-md-12">
						<div id="certifications-carousel" class="owl-carousel">
						<?php
					
					foreach(get_field('certificate_list') as $cl){ ?>
                    <div class="item">
                    	<div class="Certifications_Img">
                    		<img src="<?php echo $cl['image']; ?>" alt="">
                    	</div>
						
                    </div>
                    <?php  } ?>
                    
                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
			endwhile;
		
		endif;
		?>

	

<?php
get_footer();
