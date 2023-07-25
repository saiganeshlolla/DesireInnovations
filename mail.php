<?php
include('smtp/PHPMailerAutoload.php');
     $mail=new PHPMailer;
     $mail->isSMTP();
     $mail->Host="smtp.gmail.com";
     $mail->SMTPAuth =true;
     $mail->Port=587;
     $mail->SMTPSecure="tls";
     $mail->Username="rushikitla300@gmail.com";
     $mail->Password='Rushik@123';
     $mail->setFrom("rushikitla300@gmail.com");
     $mail->addAddress('jyothsnagorle2806@gmail.com');
     $mail->isHTML(true);
     $mail->Subject='Welcome to the team!';
     $mail->Body="<h1>Hello jyothsna</h1>";
     if( $mail->send())
     {
         echo "mail is sent";
     }
     else{
        echo "NO Internet Connection";}


?>