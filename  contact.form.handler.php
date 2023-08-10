<?php
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['subject'];

$to = "lee.amber.alex@gmail.com";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt = "You have received an inquiry from ".$name.".\n\n".$message;

$headers = "From: ".$email;
			
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
};

// Redirect to
header("Location: index.php?mailsend");
?>
