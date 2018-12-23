            $("#owl-demo4").owlCarousel({
				navigation : true, 
                autoPlay: 3000,
                items: 6,
                itemsDesktop: [1199, 6],
                itemsDesktopSmall: [979, 6],
				itemsTablet: [768,6],
				itemsMobile : [479,3]
            });
			$("#owl-demo2").owlCarousel({
				navigation : true, 
                autoPlay: 3000,
                items: 1,
                itemsDesktop: [1199, 1],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsMobile : [479,1]
            });
			
			$("#owl-demo3").owlCarousel({
				navigation : true, 
                autoPlay:5000,
                items: 1,
                itemsDesktop: [1199, 1],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsMobile : [479,1]
            });
			
			$("#owl-demo5").owlCarousel({
				navigation : true, 
                autoPlay: 3000,
                items: 1,
                itemsDesktop: [1199, 1],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsMobile : [479,1]
            });
			
			$("#owl-demo6").owlCarousel({
				navigation : true, 
                autoPlay: 3000,
                items: 2,
                itemsDesktop: [1199, 2],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsMobile : [479,1]
            });
			
			
			$('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

        