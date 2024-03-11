<?php 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "yashpaljat778@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thankyou.html");
?>