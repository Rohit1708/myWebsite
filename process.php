<?php ob_start();



	if(isset($_POST['submit'])) {

	$to = "rs.rohit1708@gmail.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: somebodyelse@example.com";

	mail($to,$subject,$message,$headers);

	header("Location: contact.html");




	}




?>
