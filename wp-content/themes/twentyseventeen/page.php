<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
$img = get_the_post_thumbnail_url();
			?>

<!--Header Top Start-->
<section id="about_page" class="inner_page">
<div class="container">
<div class="row">
<div class="col-md-12 headline">
<h2><?php the_title(); ?></h2>
</div>
<div class="col-md-12">
	<?php if($img){
		echo '<img src="'.$img.'" class="page_img" alt="img" />';
	}
 the_content(); ?>





</div>





</div>
</div>
</section>

<?php

			

			endwhile; // End the loop.
			?>


<?php
get_footer();
