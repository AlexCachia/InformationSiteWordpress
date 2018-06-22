//Mobile functions

var mobileShown = $("#mobileHeader").is(":visible") ;	

$( window ).resize(function() {	
	//if changed to 800
	if ( !$("#mobileHeader").is(":visible")  && mobileShown)
	{
		mobileShown = false;
		$("#menuLinkList").attr('style', '');
	}
	//if changed to 400
	else if ($("#mobileHeader").is(":visible")  && !mobileShown) 
	{
		mobileShown = true;
	}
});

$( document ).on( "click", "#mobileHeader", function() {
	$("#menuLinkList").slideToggle("slow");
	$("#menu").toggleClass("menuHidden");
	$("#MainArrowUp").toggle();
	$("#MainArrowDown").toggle();
});



 
//Gallery functions
$( document ).on( "click", ".galleryImageThumb", function() {
	$("#imageWrapper").find('.current').removeClass("current");		
	$( ".galleryImage" ).eq( $(this).parent().children().index(this)).addClass("current");	
});
	
$( document ).on( "click", "#rightArrow", function() {		
	setImage("next");
});

$( document ).on( "click", "#leftArrow", function() {
	setImage("prev");
});


function setImage(direction){
	$("#imageTextWrapper").empty();
	var current = $("#imageWrapper").find('.current');
	current.removeClass("current");	
	
	if (direction == "next"){
		var elem = current.next();	
	}
	else{
		var elem = current.prev();	
	}
		
	if (!(elem.length)){
		if (direction == "next"){
			elem = $("#imageWrapper .galleryImage").first();
		}
		else{
			elem = $("#imageWrapper .galleryImage").last();
		}		
	}
	elem.addClass("current");
	
	$("#imageTextWrapper").html($("#imageWrapper").find('.current').attr('title'));
}


//MTD Functions
$("audio").on("play", function() {
	$("audio").not(this).each(function(index, audio) {
		audio.pause();
	});
});	



//Comment functions
$( document ).on( "keypress", "input", function() {
	$(this).removeClass("errorClass");		
});

$( document ).on( "keypress", "textarea", function() {
	$(this).removeClass("errorClass");		
});	

$( document ).on( "click", "#commentButton", function(event) {
	event.preventDefault();

	var valid = true;
	$("input").removeClass("errorClass");
	$("textarea").removeClass("errorClass");

	if (($.trim($("#name").val())=='') || ($.trim($("#name").val())==$("#name").attr('placeholder')) ){
		valid = false;
		$("#name").addClass("errorClass");
	}
	
	if (($.trim($("#comment").val())=='') || ($.trim($("#comment").val())==$("#comment").attr('placeholder')) ){
		valid = false;
		$("#comment").addClass("errorClass");
	}
	
	if (valid == true)
	{
		$('#spinner').show();
		$.ajax({
			 url: ajax_object.ajax_url,
			 data:{
				action	: 'ajax-createComment',
				name 	: $("#name").val(),
				comment :  $("#comment").val()
			 },
			 success:function(data){
				$.each(  $("[placeholder]"), function() {
					var input = $(this);	
					if (input.hasClass("placeholder")){
						input.val(input.attr('placeholder'));
					}
					else{
						input.val("");
					}
				});
	
				if (data == '10'){
					var html =  'Comment has been sent for approval';
				}else{
					var html = 'Error has occurred, please try again later.';
				}

				$("#responseDiv").html(html);
				$('#spinner').hide();
			 },
			 error:function(errorThrown){
				  $("#responseDiv").html(errorThrown);
				  $('#spinner').hide();
			 }
		}); 
		                
	}
	else{
		alert("Please ensure all fields are filled out correctly before submitting");
	}
});


//Contact Us
$( document ).on( "click", "#submitButton", function(event) {
	event.preventDefault();
	 var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 var phoneRegex = /^(0[1-9](([0-9]\s?[0-9]{8})|([0-9]{2}\s?[0-9]{7})|([0-9]{3}\s?[0-9]{6})))$/;
	 
	var valid = true;
	$("input").removeClass("errorClass");
	$("textarea").removeClass("errorClass");

	if (($.trim($("#name").val())=='') || ($.trim($("#name").val())==$("#name").attr('placeholder')) ){
		valid = false;
		$("#name").addClass("errorClass");
	}
	
	if (($.trim($("#email").val())=='')|| ($.trim($("#email").val())==$("#email").attr('placeholder')) ){
		valid = false;
		$("#email").addClass("errorClass");
	}
	else if (emailRegex.test($("#email").val()) == false){
		valid = false;
		$("#email").addClass("errorClass");
	}
	
	if ((phoneRegex.test($("#phone").val()) == false) || ($.trim($("#phone").val())==$("#phone").attr('placeholder')) ){
		valid = false;
		$("#phone").addClass("errorClass");
	}

	if (($.trim($("#message").val())=='')  || ($.trim($("#message").val())==$("#message").attr('placeholder')) ) {
		valid = false;
		$("#message").addClass("errorClass");
	}
	
	if (valid == true){	
		$('#spinner').show();
		$.ajax({
			 url: ajax_object.ajax_url,
			 data:{
				action: 'ajax-sendEmail',
				name : $("#name").val(),
				email : $("#email").val(),
				phone : $("#phone").val(),
				message :  $("#message").val()
			 },
			 success:function(data){
				$.each(  $("[placeholder]"), function() {
					var input = $(this);	
					if (input.hasClass("placeholder")){
						input.val(input.attr('placeholder'));
					}
					else{
						input.val("");
					}
				});
	
				if (data == '10'){
					var html =  'Message sent successfully';
				}else{
					var html = 'Error has occurred, please try again later.';
				}
				
				 $("#responseDiv").html(html);
				 $('#spinner').hide();
			 },
			 error:function(errorThrown){
				  $("#responseDiv").html(errorThrown);
				  $('#spinner').hide();
			 }
		});                 
	}
	else{
		alert("Please ensure all fields are filled out correctly before submitting");
	}
	
});
