<?php 
	/*
	Template Name: contact
	*/
	
	get_header();
?>
<div id = "contactFormWrapper">
	<h2>Contact</h2>
	For bookings and information please complete the form below:<br>

	<form id="form1" action="sendEmail.php" method="post" >
		<input id="name" type="text" name="name" value="" placeholder="Name..."/>
		<input id="email" type="email" name="email" value="" placeholder="Email Address..."/>
		<input id="phone" type="tel" name="phone" value="" placeholder="Phone Number..."/>
		<textarea id = "message" rows="3" placeholder="Message..."></textarea>	
		<br/><input type="submit" id = "submitButton" value="Submit">     
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/media/spinner.gif" id = "spinner" alt="Sending Email..." />		
	</form>	
	<div id="responseDiv"></div>	
</div>

<?php
	$page = 'contact';
	get_footer();
?>