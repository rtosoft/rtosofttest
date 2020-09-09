<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>//css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/animate.css">
 <!--For Date Picker-->
 <link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/jquery-ui.css">
<!--For Time Picker-->
  <link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/jquery.timepicker.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/stellarnav.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset; ?>/css/responsive.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();
$logo_id=get_theme_mod('custom_logo');
$logo_url=wp_get_attachment_image_src($logo_id , 'full');

?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<div class="row">
					<a href="<?php echo home_url(); ?>" class="logo_area"><img src="<?php echo $logo_url[0] ;?>" alt=""></a>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="row">
					<div class="stellarnav">
					<?php
				wp_nav_menu( array(

				'theme_location' => 'top',
				'items_wrap' => '<ul class="">%3$s</ul>',
				//'menu_class'     => 'primary-menu',
				'container' => ''
				) );
                ?>
	</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<ul class="log_list">
					<li><a target="_blank" href="<?php echo ot_get_option('login_url'); ?>" class="btn btn-log">Student login</a></li>
					<!-- <li><a target="_blank" href="<?php echo ot_get_option('registration_url'); ?>" class="btn btn-register">register</a></li> -->
				</ul>
				</div>
			</div>
			
		</div>
	</div>
</header>

