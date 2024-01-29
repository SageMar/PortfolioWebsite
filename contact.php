<?php

 echo 'Welcome'.$_GET["name"];
 echo '<p>Your email address is: '.$_GET["email"].'</p>';
 echo '<p>The message you wrote and sent is:</p>'.$_GET['message'];


 $message = $_GET['message'];
 $name = $_GET['name'];
 $email = $_GET['email'];
 // this will get the value for the "reasons" contact
 foreach ($_GET as $reason => $value) {
  if ('submit' != $reason) {
   if (is_array ($value)){
    $value = implode(', ', $value);

   }
  }
 }



 $to = "Sage Markwardt<sagemarkwardt@gmail.com>";
 $subject = "testing";
 $headers = "From: $name" . "\r\n Reply-to: $email";

 if (mail($to, $message, $subject, $headers)){
   echo '<p>This information has been sent to the site moderator.</p>';
 }



?>

