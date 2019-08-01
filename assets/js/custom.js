
$('.loaded-bg').addClass('show');
setTimeout(function () {
	var count = 0  
	var clear = setInterval(function(){
	    $('.loaded-num').text(count + '%');
	    $('.loaded-line span').width(count + '%');
	    count +=1
	    if(count === 101){
	        clearInterval(clear)
	    }
	},10);   
}, 400);

$(window).on('load', function () {
	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	$(".js-bg").each(function () {
        $(this).css('background-image', 'url(' + $(this).data("preload") + ')');
    });
    $(".js-img").each(function () {
        $(this).attr('src', $(this).data("src"));
    });

    if($('.js-stories').length) {

		var container = document.querySelector('.js-stories');
		 setTimeout(function () {
		var msnry = new Masonry(container, {
	        columnWidth: 1,
			itemSelector: '.stories_item',
	    });
	     }, 700);  

		$(".stories_item_remove").click(function () {
		    msnry.remove($(this).parents(".stories_item"));
		    setTimeout(function () {
		    	msnry.layout();
		    }, 700);
		});
	};


    //

    setTimeout(function () {  
        $('.loaded-cont').addClass('hide');
    }, 1500);

    setTimeout(function () {
    	//		
        $('.js-welcome').slick({
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    autoplay:true,
		    autoplaySpeed: 5000,
		    fade:true,
		    dots: true,  
		    arrows: false,  
		    
		});
    	var wow = new WOW( {
	        boxClass:     'wow',      // animated element css class (default is wow)
	        animateClass: 'animated', // animation css class (default is animated)
	        offset:       0,          // distance to the element when triggering the animation (default is 0)
	        mobile:       true,       // trigger animations on mobile devices (default is true)
	        live:         true,       // act on asynchronously loaded content (default is true)
	        scrollContainer: null // optional scroll container selector, otherwise use window
	      }
	    );
	    wow.init();
	    $('html,body').scrollTop(0);
		$('body').removeClass('loaded'); 
    }, 1900);
    
    setTimeout(function () {
		$('body').removeClass('loadanim'); 
    }, 8000);

    

});

/* viewport width */
function viewport(){
	var e = window, 
		a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
/* viewport width */


$(function(){
	/* placeholder*/	   
	$('input, textarea').each(function(){
 		var placeholder = $(this).attr('placeholder');
 		$(this).focus(function(){ $(this).attr('placeholder', '');});
 		$(this).focusout(function(){			 
 			$(this).attr('placeholder', placeholder);  			
 		});
 	});
	/* placeholder*/

	$('.js-filter-button').click(function(){
		$(this).toggleClass('open'); 
		$('.filterside').toggleClass('open'); 
		$('.overlay').toggleClass('open'); 
		return false;
	});
	$('.overlay').click(function(){
		$(this).removeClass('open'); 
		$('.filterside').removeClass('open'); 
		$('.js-filter-button').removeClass('open'); 
		return false;
	});
	
	/* components */  
	   //filters
    var checkfilter = function(){
    	var fl = $(".cfilters a").length;
    	if (fl>0){
    		$('.cfilters_wrap').removeClass('hid');
		}
		else {
			$('.cfilters_wrap').addClass('hid');
		}
    }
    checkfilter();
    $('.js-sfilters a').on('click',function(e){		
		$(this).toggleClass('selected');
		return false;
	});
	$('.filterside .button').on('click',function(e){		
		$('.cfilters_wrap').removeClass('hid');
		$('.sfilters a.selected').clone().appendTo(".cfilters");
		$('.overlay').removeClass('open'); 
		$('.filterside').removeClass('open'); 
		$('.js-filter-button').removeClass('open'); 

		$('.cfilters a').on('click',function(e){	
			var filt = $(this).data('filter');	
			$(this).remove();
			$("a[data-filter='" + filt +"']").removeClass('selected');
			checkfilter();
			return false;
	    });
	    return false;
	});

    $('.cfilters a').on('click',function(e){	
    	//var filt = $(this).data(filter);	
		$(this).remove();
		//$("a[data-filter='" + filt +"']").removeClass('selected');
		checkfilter();
		return false;
    });
	

	$('.stories_item_icon').hover(function () {
	  $(this).parent().addClass('hover');
	},function () {
	  setTimeout(function () {
	    $('.stories_item').removeClass('hover');
	  }, 500);
	});

    $('.stories_item_cont').on("mouseenter", function() {
        $(this).parent().addClass('hover2');
    });
    $('.stories_item').on("mouseleave", function() {
        setTimeout(function () {
        	$('.stories_item').removeClass('hover2');
        }, 500);
    })


    //
	if($('.fancybox').length) {
		$('.fancybox').fancybox();
	};

	//
	$('.down_link').click(function(e){		
		e.preventDefault();
		$('.post_top_screen').animate({ height: 0, opacity: 0 }, 500);  
		$('.post').addClass('read');
		setTimeout(function () {
			$('body').removeClass('blocked');
			$('.post_top_screen').hide(); 
    	}, 600);
    });

	if($('#form').length) {
		$("#form").validate({
		    rules: {
		      rev: {
		        required: true
		      },
		    },        
		    messages: {
		        rev: "Введите текст отзыва",     
		    },
		    submitHandler: function (form) {
		      $('.form_layer').addClass('ok');
		    }
		});
	};

	//
	if($('.js-gall').length) {
		var appendNumber = 22;
	    var prependNumber = 1;
		var swiperTeam = new Swiper('.js-gall', { 
			slidesPerView: 'auto',
		    centeredSlides: true,
		    spaceBetween: 0,
			grabCursor: true,
		    loop: false,
		    navigation: {
		        nextEl: '.swiper-gall-next',
		        prevEl: '.swiper-gall-prev',
		    },
		    on: {
			    sliderMove: function () {
			    	$('.serie-slider').addClass('drag');
			    },
			    touchEnd: function () {
			    	$('.serie-slider').removeClass('drag');
			    },
			},
			breakpoints: {
		        1024: {
		          centeredSlides: false,
		        },
		        
		    }
		    /*pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		        type: 'fraction',
		    },
			virtual: {
	        slides: (function () {
	          var slides = [];
	          for (var i = 0; i < appendNumber; i += 1) {
	            slides.push('Slide ' + (i + 1));
	          }
	          return slides;
	        }()),
	      }*/
	     
	    });
    };

 


});

var handler = function(){
	
	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;


	setTimeout(function () {
		$(".js-winscroll").mCustomScrollbar({
			axis:"y",
			autoExpandScrollbar:true,
			advanced:{autoExpandHorizontalScroll:true},
			mouseWheel:{ 
				scrollAmount: 400,
				preventDefault: false
			},
			scrollInertia: 800,
			mouseWheelPixels: 400,
			autoDraggerLength:false,
			contentTouchScroll:10,
		});
	}, 200);


	if (viewport_wid <= 1023) {
		$("#sidebar").trigger("sticky_kit:detach");
		$('.js-scroll').mCustomScrollbar("destroy");
		$('.js-vh').height('auto');
		$('.js-vh-f').height('auto');
		$('.post_txt.js-scroll').removeAttr('style');
	}
	else if (viewport_wid > 1023) {
		$('.js-vh').css({'height': viewport_height});
		$('.js-vh-f').css({'height': viewport_height - 60});
		$('.post_txt.js-scroll').css({'height': viewport_height - 200});
		$(".post_img").stick_in_parent({
			parent: '.post'
		});
		$(".js-scroll").mCustomScrollbar({
			axis:"y",
			autoExpandScrollbar:true,
			advanced:{autoExpandHorizontalScroll:true},
			mouseWheel:{ 
				scrollAmount: 400,
				preventDefault: false
			},
			scrollInertia: 800,
			mouseWheelPixels: 400,
			autoDraggerLength:false,
			contentTouchScroll:10,
		});
		$('html').on("mousewheel", function(e) {
	        if((e.originalEvent.wheelDelta < 0) && ($('.post').length) ){
		    	$('.js-post_top_screen').animate({ height: 0, opacity: 0 }, 500);  
				$('.post').addClass('read');
				setTimeout(function () {
					$('body').removeClass('blocked');
					$('.js-post_top_screen').hide(); 
		    	}, 600);
			}
			else {}
	    });
	}


	if($('.storybody').length) {   
		setTimeout(function () {
			var offs = $('.readmore').offset().top;
			function showDiv() {
			    if ( $(window).scrollTop() > offs && $('.readmore').data('positioned') == 'false') {
			      $(".readmore").data('positioned', 'true');
			      $('body').addClass('dark');
			      $('.serie-slider-wrapper').addClass('down-enter');
			      $(".swiper-lazy").each(function () {
			        $(this).attr('src', $(this).data("src")).addClass('loaded');
			      });
			    }else if ( $(window).scrollTop() <= offs && $('.readmore').data('positioned') == 'true') {
			      $(".readmore").fadeIn(0, function() {
			        $('body').removeClass('dark');
			      }).data('positioned', 'false');
			    }
			}
			$(window).scroll(showDiv);
			$('.readmore').data('positioned', 'false');
		}, 10);
	}
	
}
$(window).bind('load', handler);
$(window).bind('resize', handler);

if($('#scene').length) {
	$('#scene').parallax();
}