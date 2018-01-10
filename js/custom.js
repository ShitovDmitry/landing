// JavaScript Document

//Author Name: Saptarang
//Author URI: http://www.saptarang.org
//Themeforest: http://themeforest.net/user/saptarang?ref=saptarang
//Creation Date: 14th November, 2013
//Description: A default stylesheet for Primo Responsive Landing Template Designed & Developed By Saptarang.



/* CUSTOM PARAMETERS */

/* ==================================  GLOBAL  ==================================== */

			var main_color = "fd7e23"; // Orange: This is global main color for your template.
			
			var color2 = "916a53"; // Medium Brown: This is second priority color for your template.
			
			var color3 = "433b38"; // Dark Brown: This is third priority color for your template.
			
			var footer_color = "433b38"; // This is footer color for your template.
			
			var copy_color = "fd7e23"; // This is copyright bar color for your template.
			
			var Heading_Font = "Open sans"; // thats your special Heading font
			
			var Site_Font = "asap"; // thats your special body content font
			
			
/* ================================  CONTACT PAGE  =================================== */
			
	/* SET CONTACT FORM SUCCESS MESSAGE */
	
			var submitMessage = "Your form has been submitted successfully.";
			
			var successParagraph = "We'll respond to your message within 24 hours. <br> Please call <b>123.456.789</b> for any urgent queries. Thank You!";
			
			var successBoxColor = "f9ffef"; // Background color for the success box
			
			var successBoxBorderStyle = "solid"; // Border Style  -  Example: solid, dotted, dashed, double
			
			var successBox_Border_Color = "bede8f"; // Border color for success box
			
			var textColor = "7a994c"; // text color for success box
			
/* ================================  REPLACE GOOGLE FONT CODE HERE  =================================== */

// Google Web Fonts

WebFontConfig = {
    google: { families: [ 'Open+Sans:400,300,600,700,800,400italic:latin', 'Asap:400,400italic,700,700italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();