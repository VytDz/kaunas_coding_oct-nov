<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Derp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>body{display: none;}</style>
</head>
<body>

<?php


$name = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

$name    = htmlspecialchars($name,   ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$message= htmlspecialchars($message,   ENT_QUOTES, 'UTF-8');

//Load Composer's autoloader
require '../../libs/php/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    //===============================
    // PhpMailer settings
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    //=============================

    //Recipients
    $mail->setFrom('', 'Mailer');
    $mail->addAddress('', 'zinute is portfolio');     // Add a recipient
    $mail->addReplyTo( $email, $name);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'message';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    // !!!! laisko siuntimas
    $mail->send();



} catch (Exception $e) {
    echo 'Sorry your mail have not been sent. Mailer Error: ', $mail->ErrorInfo;
}
finally {
    echo "Have a nice day!!!";
}

?>

<script>window.onload = function () {window.location.href = "./success.php";} </script>


</body>
</html>
