<?php
if(isset($_POST['name']) && isset($_POST['email'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$to = "brassai.oroksegunk@yahoo.com";
	//$from = $_POST['email'];
	$subject = $_POST['subject'];
	$message = "From: " . $email . "\n" . "Reply-To: brassai.oroksegunk@yahoo.com" . "\n PhoneNumber: " . $phone . "\n \n" . $_POST['message'];
	$headers = "From: " . $email;
	//$headers = "lori.szoke@gmail.com";
		
	$ok = mail($to, $subject, $message, $headers);
						
	if($ok){
		echo "<script>alert('Message sent');</script>";
	}
	else echo "<script>alert('Something went wrong. Try again!');</script>";		
}
?>