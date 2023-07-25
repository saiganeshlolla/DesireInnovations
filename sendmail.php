<?php
echo "email";
if(isset($_POST['Email']))
{?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Success</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
        width:100%;
      text-align: center;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .message {
      font-size: 24px;
      font-weight: bold;
      color: #4CAF50;
      margin-bottom: 20px;
    }

    .ok-link {
      display: inline-block;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .ok-link:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="message">Your query is submitted successfully!</div>
    <a class="ok-link" href="index.php">OK</a>
  </div>
</body>
</html>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
include('smtp/PHPMailerAutoload.php');
//require "PHPMailerAutoload.php";
require 'credential.php';
//Create an instance; passing `true` enables exceptions
$mail=new PHPMailer;

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'saiganeshlolla2000@gmail.com';                     //SMTP username
    $mail->Password   = 'vntqhsfaiscntvka'; 
    $mail->SMTPSecure="tls";                              //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('saiganeshlolla2000@gmail.com', 'ganesh');
    $mail->addAddress($_POST['Email']);     //Add a recipient
    /*$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    */
    //Content
    //$mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'we have recieved a query that was submmitted by you';
    $mail->Body    = 'Thank you for contacting us about the query'.$_POST['text'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
      $mail->addAddress('saiganeshlolla2000@gmail.com');
      $mail->Subject = 'query has been recieved';
    $mail->Body    = 'query is'.$_POST['text'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();

    echo 'Message has been sent';
    ?>
    

<?php    
}
    else{
        echo $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
?>
