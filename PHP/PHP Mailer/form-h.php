<?php
  require_once("vendor/autoload.php");

  //form
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    //form data submitted by user
    $name = $_POST["name"];
    $number = $_POST["number"];
    $query = $_POST["query"];

    // Check that data was sent to the mailer.
    if (empty($name) OR empty($query) OR empty($number)) {
      // Set a 400 (bad request) response code and exit.
      http_response_code(400);
      echo "Oops! Please complete all fields and try again.";
      exit;
    }


    $message = "Hello!
       Your contact form has been submitted by:<br>\r\n
       <b>Name:</b> $name<br>\r\n
       <b>Phone:</b> $number<br>\r\n
       <b>Message:</b> $query";

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com";
    $mail->Username = 'mail@yourdomain.com';
    $mail->Password = '*********';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('mail@yourdomain.com', 'Name');
    $mail->addAddress('mail@yourdomain.com', 'Name');
    $mail->addReplyTo('mail@yourdomain.com', 'Reply Address');

    $mail->Subject = "Otto's Auto Home Page Form";
    $mail->Body    = $message;
    $mail->AltBody = $message;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    } else {
        echo 'Your Message has been sent!';
        exit;
    }
  } else {
        if(isset($_POST['submit'])) {
          // Not a POST request, set a 403 (forbidden) response code.
          http_response_code(403);
          echo "There was a problem with your submission, please try again.";
        }
    }
?>
