<?php
/**
 * Template Name: FAQ
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
			
			
			<div class="col-md-12">
          	<div id="accordion">
    
	
	<?php
			$i=0;		
					foreach(get_field('list') as $cl){ ?>
    <div class="card">
      <div class="card-header">
        <a class="<?php if($i!=0){ ?>collapsed<?php } ?> card-link" data-toggle="collapse" href="#collapse<?php echo $i; ?>">
        <?php echo $cl['title']; ?>
      </a>
      </div>
					<div id="collapse<?php echo $i; ?>" class="collapse <?php if($i==0){ ?>show <?php } ?>" data-parent="#accordion">
        <div class="card-body">
         <p><?php echo $cl['content']; ?>

</p>
        </div>
      </div>
    </div>
    
    <?php  $i++; } ?>
    
    
    
    
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
