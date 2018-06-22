<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Example Title</title>
		<meta charset="UTF-8">
		
		<meta name="title" content="title" >
		<meta name="description" content="description" >
		<meta name="keywords" content="keywords" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		
		<link rel="author" type="text/plain" href="humans.txt" />
		
		<?php wp_head(); ?>
	</head>
	<body>
		<div id = "bodyWrapper" itemscope itemtype="http://schema.org/Product">
			<div id = "bodyHeader" itemprop="name">
				<h1>Example Title</h1><h3 itemprop="description">Example Subtitle</h3>
			</div>
			<div id = "menu" class="menuHidden">
				<div id ="mobileHeader">
					<div id="headerLink" >MENU</div>
					<div class ="Arrow" id = "MainArrowDown"> &#9660;</div> 
					<div class ="Arrow" id = "MainArrowUp"> &#9650;</div> 
				</div>		
				<div id = "menuLinkList">
				<div class = "menuLinkDiv" id = "firstLink"><a href="home" class = "menuLink">HOME</a></div>
					<div class = "menuLinkDiv"><a href="options" class = "menuLink">BOOK A SHOW</a></div>
					<div class = "menuLinkDiv"><a href="tuition" class = "menuLink">SINGING TUITION</a></div>
					<div class = "menuLinkDiv"><a href="teaching" class = "menuLink">LITERACY TEACHING</a></div>
					<div class = "menuLinkDiv"><a href="multimedia" class = "menuLink">MULTIMEDIA</a></div>
					<div class = "menuLinkDiv"><a href="gallery" class = "menuLink">GALLERY</a></div>
					<div class = "menuLinkDiv" id = "reviews"><a href="reviews" class = "menuLink">REVIEWS</a></div>
					<div style="display:none;" class = "menuLinkDiv"><a href="gigs" class = "menuLink">GIGS</a></div>
					<div id="lastLink" class = "menuLinkDiv"><a href="contact" class = "menuLink">CONTACT</a></div>
				</div>
			</div>	
			<div id = "contentWrapper">
				<div id = "bodyContent">