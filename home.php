<?php 
	/*
	Template Name: Homepage
	*/

	get_header();
?>

<h2>Title</h2>
<span itemprop="image">
	<img id = "bioImage" class = "mainImage" alt ="Example alt" title="Example Title" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/bio.jpg"/>
</span>
<p>Placeholder Text</p>
<p id = "linkPara">
	<a href="https://www.facebook.com/Example" onclick="window.open(this.href,'_blank'); return false;" title="Visit Facebook Page">
		<img class = "linkImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/facebook.png" alt="Visit Facebook Page" >
	</a>  
	<a href="https://uk.linkedin.com/in/Example" onclick="window.open(this.href,'_blank'); return false;" title="Visit LinkedIn Page">
		<img class = "linkImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/linkedin.png" alt="Visit LinkedIn Page" >
	</a>
</p>
	
<?php
	$page = '';
	get_footer();
?>
