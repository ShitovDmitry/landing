// JavaScript Document
// Primo Multipurpose rsponsive Landing
//Author Name: Saptarang
//Author URI: http://www.saptarang.org
//Themeforest: http://themeforest.net/user/saptarang?ref=saptarang
//Creation Date: 20th November, 2013
//Description: A default stylesheet for Primo Responsive Landing Template Designed & Developed By Saptarang.


$(document).ready(function() {
	
	// Global Color
	$('head style').append('h1,h2,h3,h4,h5,h6, .navigation ul li a, blockquote,.btnMain,.btnColor2,.btnColor3,.btnLte {font-family:"'+Heading_Font+'"; } html, body, div, p, table, tr, td, th, tbody, tfoot, ul, li, ol, dl, dd, dt, fieldset, cite, input, select, textarea, button, a, section, article, aside, header, footer, nav {font-family:"'+Site_Font+'"; } #Featured, .btnMain, .featureBox i,  .carousel-indicators .active, #quoteSlider a.left, #quoteSlider a.right, .platinum, #Team .social a:hover i, a.top, .navbar,#Gallery .gallery:hover, #Features .cBox:hover, #Pricing {background-color:#'+main_color+';} h5,  a,.navigation nav ul li a:hover, .welcomeIntro h2 i, ul li:before, .panel-heading span.status, .priceIntro span i, .priceIntro h3 strong, #Features .cBox:nth-of-type(odd) i, #Support ul li i {color:#'+main_color+';} #Subscribe, #Contact, .featuresDark, .btnColor2,.btnColor3:hover, .panel .active,#Features .cBox:nth-of-type(even):hover {background-color:#'+color2+'} h6, .social i, #Features .cBox:nth-of-type(even) i {color:#'+color2+';} .welcomeIntro span i,.priceBox .heading,.btnColor3,.btnColor2:hover {background-color:#'+color3+';} ::selection {background-color:#'+main_color+'; color:#fff;} ::-moz-selection {background-color:#'+main_color+'; color:#fff;} #Contact {background-color:#'+footer_color+'; } #Copyright {background-color:#'+copy_color+'; }');
	
	// Fixed Top
	$(window).scroll(function() {
		if ($(window).scrollTop() > 500) { 
			$('a.top').fadeIn('slow'); 
		} else { 
			$('a.top').fadeOut('slow');
		}
	});
	
	// Image Lightbox
	 $("a[rel^='prettyPhoto']").prettyPhoto({overlay_gallery: true});
	 $('.gallery a').append('<span class="link"><i class="fa fa-search-plus"></i></span>');
	
	// Tooltip
	$('a.tips').tooltip();
	
	// Accordion Symbols
	$('.panel-heading').append('<span class="status">+</span>');
	
	$('.panel-heading a').click(function() {
	var thisParent = $(this).parent().next();
	if(thisParent.hasClass('in')) {
	$(this).next('span.status').html('+');
	$(this).parent().removeClass('active');
	} else {
	$('.panel-heading span.status').html('+');
	$('.panel-heading').removeClass('active');
	$(this).next('span.status').html('-');
	$(this).parent().addClass('active');
	}
	});
	
	//page Scroll
	$('nav a[href^=#], a.top[href^=#]').click(function() {
			$('html,body').animate({
            scrollTop: $(this.hash).offset().top},
            1000);	
			event.preventDefault();
	});
	
	// Subscription Form Validation
	$('#subscribeForm').submit(function() {
		if($('#emailSubscribe').val() != "") {
			var subEmail = $('#emailSubscribe').val();	
			 if(subEmail.indexOf('@') == -1 || subEmail.indexOf('.') == -1) {
				  $('#subscribeForm')
				  .append('<div class="alert alert-danger fade in">Please enter valid email address!</div>');
				  $('#subscribeForm').find('.alert').animate({ marginTop:'15px', opacity:'1'}, 300);
				  setTimeout(function() {
					  $('#subscribeForm').find('.alert').animate({ marginTop:'-10px', opacity:'0'}, 300);
				  }, 3000);
				  setTimeout(function() {
					  $('#subscribeForm').find('.alert').remove();
				  }, 3300);
			  } else {
				  $('#subscribeForm')
				  .append('<div class="alert alert-success fade in"><strong>Thank You!</strong> Your email address has been added in our list.</div>');
				 $('#subscribeForm').find('.alert').animate({ marginTop:'15px', opacity:'1'}, 300);
				  setTimeout(function() {
					  $('#subscribeForm').find('.alert').animate({ marginTop:'-10px', opacity:'0'}, 300);
				  }, 3000);
				  setTimeout(function() {
					  $('#subscribeForm').find('.alert').remove();
				  }, 3300);
			  }
		} else {
			  $('#subscribeForm')
			  .append('<div class="alert alert-danger">Please enter your email address!</div>');
			  $('#subscribeForm').find('.alert').animate({ marginTop:'15px', opacity:'1'}, 300);
				  setTimeout(function() {
					  $('#subscribeForm').find('.alert').animate({ marginTop:'-10px', opacity:'0'}, 300);
				  }, 3000);
				  setTimeout(function() {
					  $('#subscribeForm').find('.alert').remove();
				  }, 3300);
			
		}
		 return false;
	});	
	
	// Contact Form
				 $('.loader').hide();
				 $("input, textarea").focus(function() {
					$(this).prev("label").hide();
					$(this).prev().prev("label").hide();	 		 	
				});
				 
				$("#contact_form").submit(function() {
						  // validate and process form here
						  var name = $("#name").val();
								if (name == "") {
								$('#name').addClass('reqfld');
								$('<span class="error" style="display:none; margin-top:0px;">Required!</span>').insertBefore('#name').fadeIn(400);
								$("#name").focus(function() {  $('#name').removeClass('reqfld');  $(this).prev().fadeOut(400);});
								return false;
						  } 
							
						  var phone = $("#phone").val();
								if (phone == "") {
								$('#phone').addClass('reqfld');
								$('<span class="error" style="display:none;">Required!</span>').insertBefore('#phone').fadeIn(400);
								$("#phone").focus(function() {  $('#phone').removeClass('reqfld');  $(this).prev().fadeOut(400);});
								return false;
						  }
						  
						  var email = $("#email").val();
						  if (email == "") {
								$('#email').addClass('reqfld');
								$('<span class="error" style="display:none;">Required!</span>').insertBefore('#email').fadeIn(400);
								$("#email").focus(function() {  $('#email').removeClass('reqfld');  $(this).prev().fadeOut(400);});
								return false;
						   } else if(email.indexOf('@') == -1 || email.indexOf('.') == -1) {
								$('#email').addClass('reqfld');
								$('<span class="error" style="display:none;">Invalid Email Address!</span>').insertBefore('#email').fadeIn(400);
								$("#email").focus(function() {  $('#email').removeClass('reqfld');  $(this).prev().fadeOut(400);});
								return false;
						  }
						  
						  var comment = $("#comment").val();
								if (comment == "") {
								$('#comment').addClass('reqfld');
								$('<span class="error" style="display:none;">Required!</span>').insertBefore('#comment').fadeIn(400);
								$("#comment").focus(function() {  $('#comment').removeClass('reqfld');  $(this).prev().fadeOut(400);});
								return false;
						  }
						  
						  $('#contact_form').animate({opacity:'0.3'}, 500);
						  
						  var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&comment=' + comment;
						  //alert (dataString);return false;
						  $.ajax({
							type: "POST",
							url: "http://www.saptarang.org/TF/primo/form/contact.php",
							data: dataString,
							success: function() {
							  $("#contact_form").animate({opacity:'1'}, 500);
							  $('.loader').hide();
							  $("<div id='success' class='alert alert-success' style='border:#"+successBox_Border_Color+" 1px "+successBoxBorderStyle+"; background:#"+successBoxColor+";' ></div>").insertAfter('#contact_form');
							  $('#contact_form').slideUp(300);
							  $('#success').html("<h5 style='color:#"+textColor+";'>"+submitMessage+"</h5><p style='color:#"+textColor+";'>"+successParagraph+"</p>")
							  .hide().delay(300)
							  .fadeIn(1500);
							}
						  });
						  return false;
				});
});