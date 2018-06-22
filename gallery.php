<?php 
	/*
	Template Name: gallery
	*/
	
	get_header();
?>

<h2 style="text-align: center;">Gallery</h2>
<div class = "arrowDiv"><img id="leftArrow" class ="arrowImage" alt ="Left Arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/Left_Arrow.png"/></div>
<div id = "imageWrapper">
	<img itemprop="image" class = "galleryImage current" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/abba (1).jpg" alt ="ABBA inspired duo image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/abba (2).jpg" alt ="Motown inspired duo image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/abba (3).jpg" alt ="ABBA inspired duo image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (1).jpg" alt ="Band image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (2).jpg" alt ="Band image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (3).jpg" alt ="Band image" title="Example Title"/>
	<img class = "galleryImage"src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (4).jpg" alt ="Band image" title="Example Title/">
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/solo3.jpg" alt ="Solo image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/solo4.jpg" alt ="Solo image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/AbbaShow.jpg" alt ="ABBA performance image" title="Example Title"/>
	<img class = "galleryImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/TinaBacking.jpg" alt ="Band image" title="Example Title"/>
</div>
<div class = "arrowDiv"><img id="rightArrow" class ="arrowImage" alt ="Right Arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/Right_Arrow.png"/></div>
<div id = "imageTextWrapper">
</div>
<div id = "thumbs">
	<div class = "thumbnail">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/abba (1).jpg" alt ="ABBA inspired duo image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/abba (2).jpg" alt ="Motown inspired duo image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/abba (3).jpg"
alt ="ABBA inspired duo image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (1).jpg"
alt ="Band image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (2).jpg"
alt ="Band image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (3).jpg" alt ="Band image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/tina (4).jpg" alt ="Band image" title="Example Title">
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/solo3.jpg"  alt ="Solo image" title="Example Title"/>
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/solo4.jpg"  alt ="Solo image" title="Example Title"/>
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/AbbaShow.jpg"  alt ="ABBA performance image" title="Example Title"/>
		<img class = "galleryImageThumb" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/gallery/TinaBacking.jpg" alt ="Band image" title="Example Title"/>
	</div>
</div>	

<?php
	$page = 'gallery';
	get_footer();
?>
