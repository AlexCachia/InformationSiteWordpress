<?php 
	/*
	Template Name: reviews
	*/
	
	get_header();
?>

<h2>Reviews</h2>
<form id="form1" action="createComment.php" method="post" >
	<input id="name" type="text" value="" placeholder="Name..."/>
	<textarea id="comment" rows="3" placeholder="Add a comment..."></textarea>
	<input type="submit" id = "commentButton" value="Comment"/>   
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/media/spinner.gif" id = "spinner" alt="Submitting comment..." />					
</form>	

<div id="responseDiv"></div>
<div id="commentArea">
	<?php include 'loadComments.php';?>
</div>

<?php
	$page = 'reviews';
	get_footer();
?>
