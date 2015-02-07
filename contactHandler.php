<?php

// Contact Form Handler

$name = $_POST["yourName"];
$email = $_POST["yourEmail"];
$message = $_POST["yourMessage"];

$to = "webmaster@outlook.com";
$subject = "Website contact - " . $name;
$headers = "From: " . $email;

mail($to, $subject, $message, $headers);

header("Location: http://www.itguyjosh.com/thankyou.html");

//if(isset($_POST["youName"])){
//    $name = $_POST["yourName"];
//    $email = $_POST["yourEmail"];
//    $message = $_POST["yourMessage"];
//    
//    $to = "itguyjosh@outlook.com";
//    $subject = "Contact from website";
//    $headers = "From: webmaster@itguyjosh.com" . "\r\n";
//    
//    mail($to, $subject, $message, $headers);
//    header("Location: http://www.itguyjosh.com/thankyou.html");
//} else {
//    echo "There has been an error on the server, please try again later";
//    
//    $to = "itguyjosh@outlook.com";
//    $subject = "ITSSS BROKEEEE";
//    $headers = "From: webmaster@itguyjosh.com" . "\r\n";
//    
//    mail($to, $subject, $message, $headers);
//    header("Location: http://www.itguyjosh.com/");
//}
?>