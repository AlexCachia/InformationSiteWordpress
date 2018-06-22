<?php 
	/*
	Template Name: options
	*/
	
	get_header();
?>

<h2>Title</h2>
<div class = "optionSection">	
	<h3>Section</h3>
	<img itemprop="image" id = "soloImage" class = "mainImage" alt ="Example Alt" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/solo.jpg" title="Example Title">
	<p>
		Placeholder Text
	</p>
<p><a  class="enquiryClass" href="contact">Click to make an enquiry</a></p>
</div> 

	
<?php
	$page = 'options';
	get_footer();
?>
