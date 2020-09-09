<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
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
<h2>Blog Details</h2>
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