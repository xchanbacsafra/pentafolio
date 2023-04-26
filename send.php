<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'C:xampp\htdocs\PentaFolio\vendor\autoload.php';

if (isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username =  'airenebacsafra26@gmail.com';
    $mail->Password ='ucucelttcgkiadbk';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('airenebacsafra26@gmail.com');

    $mail->addAddress($_POST["contactEmail"]);

    $mail->isHTML(true);

    $mail->Name = $_POST["contactName"];
    $mail->Subject = $_POST["contactSubject"];
    $mail->Body = $_POST["contactMessage"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully!');
    document.location.href = 'index.php';
    </script>
    ";
}
?>
