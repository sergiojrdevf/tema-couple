$(document).ready(function(){
	$('.hamburger').click(function() {
		$(this).toggleClass('is-active');
		 if($(".nav-content").hasClass('showMenu')) {
			$(".nav-content").removeClass('showMenu').slideUp('slow');
		} else {
			$(".nav-content").addClass('showMenu').slideDown('slow');	 
	 	}  
	});
	
	$(document).on('submit', "form", function(e) {
		$(this).find('.submit').prop('disabled', true).addClass('disabled');
	});

	$('.btn-acount').click(function() {
		$('.modal').addClass('active');
	});

	$('#create-login').validate({
	  rules: {
	    user_name: {
	    	required: true
		},
	    user_email: {
	      required: true,
	      email: true
	    },
		user_pass: {
			required: true,
			minlength: 6
		},
		user_repass: {
			required: true,
			minlength: 6,
			equalTo: "#user_pass"
		},
	  },
	  messages: {
	    user_name: "Digite seu nome.",
	    user_email: {
	      required: "Digite seu e-mail.",
	      email: "Digite um e-mail válido."
	    },
	    user_pass: {
			required: 'Digite sua senha',
			minlength: 'Digite uma senha com no mínimo 6 caracteres.'
	    },
	    user_repass: {
	    	required: 'Digite sua senha',
	    	minlength: 'Digite uma senha com no mínimo 6 caracteres.',
			equalTo: 'Por favor, confirma sua senha.'
	    }
	  }
	});

// Set the date we're counting down to
var countDownDate = new Date("2017-06-27T12:50:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
  

	$('.number-days').text(days);
	$('.number-hours').text(hours);
	$('.number-minutes').text(minutes);
	$('.number-seconds').text(seconds);

    // // If the count down is over, write some text 
    // if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("demo").innerHTML = "EXPIRED";
    // }
}, 1000);

 	function setRadio() {
 		setTimeout(function() {
 			$('.owl-item.active').find($('input:radio')).prop('checked', true);
 		}, 100);
 	}

 	setRadio();

 	$(".owl-carousel").on('changed.owl.carousel', function() {
 		setRadio();
 	});

 	$('.change-dashboard').click(function(e){
 		$('.change-dashboard').removeClass('active');
 		$('.dashboard-view').removeClass('active');
 		$(this).addClass('active');
 		$('.dashboard').find("[data-show='" + $(this).data().menu + "']").addClass('active');
 		// console.log($(this).data().menu);
 		e.preventDefault();
 	}); 
});

$(window).on('load', function() {
 	$(".slidersingle").owlCarousel({
	    autoHeight: true,
	    items:1,
	    nav: true,
	    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	});

 	$("#sliderhome").owlCarousel({
	    items:1,
	    loop:true,
	    nav: false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false, 
 	});
});