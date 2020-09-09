<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>


<section id="blog_page" class="inner_page">
  <div class="container">
   
      		<div class="row">
      			<div class="col-md-12 headline">
          <h2><?php echo get_the_title(24); ?></h2>
        </div>
          
       <div class="col-md-12">
    
    	<div class="row">

		<?php
			if ( have_posts() ) :

				// Start the Loop.
				while ( have_posts() ) :
					the_post();

					$author_id = get_the_author_meta( 'ID' );

					//print_r(get_user_meta($author_id, 'profilepicture', true));
?>
    		    <div class="col-lg-4 col-md-6">
     <div class="blog_details">
   <div class="blog_img">
   	<div class="user_img">
   		<img src="<?php echo get_user_meta($author_id, 'profilepicture', true); ?>" alt="">
   	</div>
   	<div class="img_sec">
    <img src="<?php echo THIMTHUMBURL.'?src='.get_the_post_thumbnail_url().'&h=190&w=328&zc=1' ;?>" alt="blog_img1">	</div>
   </div>
   
   <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <p><?php echo wp_trim_words(get_the_content(), 20); ?> </p>
   
   <div class="mrg20T"><a href="<?php echo get_the_permalink(); ?>" class="btn btn-more">read more..</a></div> 
   <hr>
   <span><?php echo get_the_date(); ?> <!--posted by <b>Admin</b>--></span>
  </div>
    </div>
    
	   <?php 
		   endwhile;
		endif; ?>

    	</div>
    
   </div>
   

          
          
          
      		</div>
      
          
          
    
  </div>
</section>

			


<?php
get_footer();
