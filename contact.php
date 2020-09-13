<?php

if (isset($_POST['send'])) {
  if (!empty($_POST['name']) && !empty($_POST['email']) 
      && !empty($_POST['subject']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $header = "From: christiancand@gmail.com" . "\r\n";
        $header = "Reply-To: $email" ."\r\n";
        $header = "X-Mailer: PHP" . phpversion();
        $mail = @mail($email,$subject,$message);
        if($mail){
          echo "<h4> enviado </h4>";
        }else{
          echo "<h4> fallo </h4>";
        }
  }
}
