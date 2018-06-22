<?php
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
	add_action('get_header', 'remove_admin_login_header');

	function initStylesScripts(){
		wp_enqueue_style('style',get_stylesheet_uri());
		
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
		
		wp_enqueue_script('ajax-script',get_template_directory_uri().'/js/main.js');
		wp_enqueue_script('ajax-script',get_template_directory_uri().'/js/respond.1.4.2.min.js');
		wp_localize_script("ajax-script", "ajax_object", array("ajax_url" => admin_url("admin-ajax.php")));
	}
	
	add_action("init", "initStylesScripts");
	add_action("wp_ajax_nopriv_ajax-sendEmail", "sendEmail");
	add_action("wp_ajax_ajax-sendEmail", "sendEmail");
	
	add_action("wp_ajax_nopriv_ajax-createComment", "createComment");
	add_action("wp_ajax_ajax-createComment", "createComment");
	
	function sendEmail(){
		$body 		= $_GET['message'] . "<br/><br/>" . $_GET['name']  . ", " . $_GET['phone'];
		$email 		= $_GET['email'];
		$headers 	= 'From: '. $email . "\r\n" .'Reply-To: '. $email .  "\r\n" .'X-Mailer: PHP/' . phpversion();
		echo wp_mail( 'email@example.com', 'Information Enquiry', $body, $headers );
	}
	
	function createComment(){
		$name = htmlentities($_GET['name'],ENT_QUOTES, "UTF-8");
		$comment = nl2br(htmlentities($_GET['comment'],ENT_QUOTES, "UTF-8"));
		$database = include('config.php');
		$conn = new mysqli($database['host'], $database['name'], $database['pass'], $database['user']);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO abc (exampleName, testComment, testDate, isApproved) VALUES ('".$name."', '".$comment."', now(), b'0')";
		if ($conn->query($sql) === TRUE) {
			foreach ($conn->query("SELECT MAX(commentID) as ID from abc") as $row) {
				$id =  $row['ID'] ;
			}
			
			$conn->close();

			$message = "The following comment has been created by " .$_GET['name']. ":";
			$message .= "<br/>" . $_GET['comment'];
			$message .= "<br/><br/>To confirm this comment please click this link"; 
			
			$email = "comment@exampleEmail.com";
			$headers = 'From: '. $email . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			echo wp_mail( 'email@example.com', 'Someone has posted a comment!', $message, $headers );
		} else {
			echo false;
		}
	}
?>