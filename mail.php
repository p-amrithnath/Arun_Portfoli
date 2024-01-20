<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$sensub = $_POST['subject'];
$to = "pamrithnathedu@mail.com";
$subject = "Mail From portfolio";
$txt ="Name = ". $name .  "\r\n  Email = " . $email ."\r\n  Subject = " . $sensub . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
$message = "Successfully sent";
echo "<script type='text/javascript'>alert('$message');</script>";
header("Location:index.html");
?>