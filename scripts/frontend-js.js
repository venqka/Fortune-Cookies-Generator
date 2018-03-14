/****************************************************
	Frontend Fortune Cookies scripts

	1. Ajax request - asks for and receives random 
	cookie

*****************************************************/

jQuery(document).ready(function(){

	jQuery.ajax({
		url: fc_ajax.ajax_url,
		type: 'POST',
		data: {
			action: 'get_fortune_cookie',
			nonce: fc_ajax.ajax_nonce
		}, 
		success : function(response) {
			console.log(response);
			jQuery(".fc-widget-fortune-cookie").show();
			jQuery(".fc-widget-fortune-cookie .fc-share").remove();
			jQuery(".fc-widget-fortune-cookie p").remove();
			jQuery(".fc-widget-fortune-cookie").append(response);
			jQuery(".fc-widget-fortune-cookie p").show('slow');
		},
		error : function(error) {
			console.log(error);
		}

	});//jQuery.ajax

		jQuery.ajax({
		url: fc_ajax.ajax_url,
		type: 'POST',
		data: {
			action: 'get_fortune_cookie',
			nonce: fc_ajax.ajax_nonce
		}, 
		success : function(response) {
			console.log(response);
			jQuery(".fortune-cookie").show();
			jQuery(".fortune-cookie .fc-share").remove();
			jQuery(".fortune-cookie p").remove();
			jQuery(".fortune-cookie").append(response);
			jQuery(".fortune-cookie p").show('slow');
		},
		error : function(error) {
			console.log(error);
		}

	});//jQuery.ajax

});

//Ajax request

//Widget
jQuery('.fc-widget-cookie-generate-button').click(function(e){

	e.preventDefault();

	jQuery.ajax({
		url: fc_ajax.ajax_url,
		type: 'POST',
		data: {
			action: 'get_fortune_cookie',
			nonce: fc_ajax.ajax_nonce
		}, 
		success : function(response) {
			console.log(response);
			jQuery(".fc-widget-fortune-cookie").show();
			jQuery(".fc-widget-fortune-cookie .fc-share").remove();
			jQuery(".fc-widget-fortune-cookie p").remove();
			jQuery(".fc-widget-fortune-cookie").append(response);
			jQuery(".fc-widget-fortune-cookie p").show('slow');
		},
		error : function(error) {
			console.log(error);
		}

	});//jQuery.ajax

});//Ajax request

//Shortcode
jQuery('.fc-cookie-generate-button').click(function(e){

	e.preventDefault();

	jQuery.ajax({
		url: fc_ajax.ajax_url,
		type: 'POST',
		data: {
			action: 'get_fortune_cookie',
			nonce: fc_ajax.ajax_nonce
		}, 
		success : function(response) {
			console.log(response);
			jQuery(".fortune-cookie").show();
			jQuery(".fortune-cookie .fc-share").remove();
			jQuery(".fortune-cookie p").remove();
			jQuery(".fortune-cookie").append(response);
			jQuery(".fortune-cookie p").show('slow');
		},
		error : function(error) {
			console.log(error);
		}

	});//jQuery.ajax

});//Ajax request

