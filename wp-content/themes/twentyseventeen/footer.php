<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

	
<footer>
	<div class="big_footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<a href="<?php echo home_url(); ?>" class="footer_logo"><img src="<?php echo asset; ?>/img/footer_logo.png" alt=""></a>
					<?php
				wp_nav_menu( array(

				'theme_location' => 'footer-bottom',
				'items_wrap' => '<ul class="term_list">%3$s</ul>',
				'container' => ''
				) );
                ?> 
				</div>
				<div class="col-lg-3 col-md-6">
					<h4>Reach Us</h4>
					
					<ul class="footer_conlist">
				<?php $phone1= str_replace(array('+','(',')',' ','-'),'',ot_get_option('phone')); ?>
						<li><a href="tel:<?php echo $phone1; ?>"><img src="<?php echo asset; ?>/img/ph_ico.png" alt=""><?php echo ot_get_option('phone'); ?></a></li>
						<li><a href="mailto:<?php echo ot_get_option('email'); ?>"><img src="<?php echo asset; ?>/img/mail_ico.png" alt=""><?php echo ot_get_option('email'); ?></a></li>
						<li><a href=""><img src="<?php echo asset; ?>/img/globe_ico.png" alt=""><?php echo ot_get_option('website'); ?></a></li>
						<li><a href=""></a></li>
					</ul>
					
				</div>
				<div class="col-lg-3 col-md-6">
					
					<div class="quick_sec">
						<h4>Quick Links</h4>
						
						<?php
				wp_nav_menu( array(

				'theme_location' => 'footer-section',
				'items_wrap' => '<ul class="quick_list">%3$s</ul>',
				//'menu_class'     => 'primary-menu',
				'container' => ''
				) );
                ?>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-6">
					<h4>Follow us</h4>
					<div class="footer_social">
						<ul class="social_list">
    			<li><a href="<?php echo ot_get_option('facebook'); ?>" class="fb_ico" target="_blank">&nbsp;</a></li>
    			<li><a href="<?php echo ot_get_option('twitter'); ?>" class="tw_ico"  target="_blank">&nbsp;</a></li>
    			<li><a href="<?php echo ot_get_option('linkedin'); ?>" class="in_ico"  target="_blank">&nbsp;</a></li>
    			<li><a href="<?php echo ot_get_option('youtube'); ?>" class="yout_ico"  target="_blank">&nbsp;</a></li>
    		</ul>
					</div>
					<a href="https://play.google.com/store?hl=en_IN" target="_blank"><img src="<?php echo asset; ?>/img/goole_play_ico.png" alt=""></a>
				</div>
				
				
			</div>
		</div>
	</div>
	<div class="copy_footer">
		<div class="container">
		
				<p><?php echo ot_get_option('copyright_text'); ?></p>
			
		</div>
	</div>
</footer>


<!-- Bootstrap core JavaScript --> 
<script src="<?php echo asset; ?>/js/jquery-3.4.1.js"></script> 
<script src="<?php echo asset; ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo asset; ?>/js/owl.carousel.js"></script> 
<script src="<?php echo asset; ?>/js/stellarnav.js"></script> 

<script src="<?php echo asset; ?>/js/jquery-ui.min.js"></script>
<!--For Time Picker-->
<script src="<?php echo asset; ?>/js/jquery.timepicker.js"></script>
<script src="<?php echo asset; ?>/js/theme.js"></script> 
<script src="<?php echo asset; ?>/js/wow.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light',
				breakpoint: 767,
				position: 'right',
				//phoneBtn: '18009997788',
				//locationBtn: 'https://www.google.com/maps'
			});
		});
	</script>
	<script>
wow = new WOW(
{
animateClass: 'animated',
offset:       100,
mobile:       false,  
}
);
wow.init();
</script>

<script>
	
 $(function() {
$( "#datepicker" ).datepicker({minDate: 0});
$( "#datepicker1" ).datepicker({minDate: 0});
});
	
	
	$(function() {
  $('#timepicker').timepicker({
    //timeFormat: 'h:mm p',
    dynamic: false,
    dropdown: true,
    scrollbar: true
  });


});
</script>
<script>
jQuery(document).ready(function(){
	var cpt = '<?php echo get_the_title(34); ?>';
		jQuery(".page-template-temp-contact .headline").html("<h2>"+cpt+"</h2>");
});
</script>	
<?php wp_footer(); ?>

</body>
</html>
