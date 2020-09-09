// JavaScript Document

//Banner Carousel
var bs = $('#banner-carousel');
bs.owlCarousel({
	autoplay:false,
	//autoplayTimeout:1000,
	//autoplaySpeed:700,
    loop:true,
    nav:false,
	dots:false,
	//animateOut: 'fadeOut',
    items: 1,
	navText: [ '<i class="fa fa-chevron--left"></i>', '<i class="fa fa-chevron--right"></i>' ],	
});

//Banner Carousel
var cs = $('#certifications-carousel');
cs.owlCarousel({
	autoplay:false,
	//autoplayTimeout:1000,
	//autoplaySpeed:700,
    loop:true,
    nav:false,
	dots:false,
	//animateOut: 'fadeOut',
    items: 3,
	navText: [ '<img src="assets/img/certifications_arrow_L.png" alt="">', '<img src="assets/img/certifications_arrow_R.png" alt="">' ],
	responsive : {
    // breakpoint from 0 up
   0:{
            items:1,
	   		margin: 0,
        },
    // breakpoint from 480 up
   480:{
            items:1,
        },
    // breakpoint from 768 up
    768:{
            items:2,
        },
	 // breakpoint from 768 up
    992:{
            items:3,
        }
}
});
