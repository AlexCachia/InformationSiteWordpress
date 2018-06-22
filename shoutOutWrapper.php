<div id = "shoutOutWrapper">
	<div id = "locationDiv">
		<p class="shoutOutTitle"><strong itemprop="description">Example Shoutout Title</strong></p>
	</div>
	<div id = "availableDiv">
		<p class="shoutOutTitle" >Available for...</p>
		<span id="soloSpan">Solo</span><br/>
		<span id="duoSpan">Duo</span><br/>
		<span id="bandSpan">Band</span><br/>
		<span id="recordingSpan">Recording</span><br/>
		<span id="teachingSpan">Teaching</span>
        <span id="weddingSpan">Weddings</span>
	</div>
	<div id = "linkDiv">
		<p class="shoutOutTitle">Also find me on...</p>
		<a href="https://www.facebook.com/ExamplePage" onclick="window.open(this.href,'_blank'); return false;" title="Visit Facebook Page">
			<img class= "shoutOutImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/facebook.png" alt="Visit Facebook Page" >
		</a>  <br/>
		<a style="display: none;" href="https://twitter.com/ExamplePage" onclick="window.open(this.href,'_blank'); return false;" title="Visit Twitter Page">
			<img class= "shoutOutImage" src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/twitter.png" alt="Visit Twitter Page" >
		</a>
		<a href="https://uk.linkedin.com/in/ExamplePage" onclick="window.open(this.href,'_blank'); return false;" title="Visit LinkedIn Page">
			<img  src="<?php echo get_stylesheet_directory_uri(); ?>/media/images/linkedin.png" alt="Visit LinkedIn Page" title="Visit LinkedIn Page">
		</a>
</div>
</div>