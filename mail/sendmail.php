<?php
$rdir = str_replace("\\", "/", __DIR__);                    //Root Dir
require $rdir.'/PHPMailer/src/Exception.php';
require $rdir.'/PHPMailer/src/PHPMailer.php';
require $rdir.'/PHPMailer/src/SMTP.php';
include"PHPMailer/src/POP3.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer{
    public function dathangmail($tieude,$noidung,$maildathang){
        $mail=new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
//print_r($mail);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '20111063746@hunre.edu.vn';                 // SMTP username
    $mail->Password = 'nysxdtciczsvcjbe';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('20111063746@hunre.edu.vn', 'Mailer');
    $mail->addAddress($maildathang,"manh");  
    //$mail->addAddress('manhlexuan02@gmail.com',"manh");   // Add a recipient              // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('20111063746@hunre.edu.vn');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $tieude;
    $mail->Body    = $noidung;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Gửi mail thành công';
} catch (Exception $e) {
    echo 'Không thể gửi tin nhắn. Mail bị lỗi ', $mail->ErrorInfo;
}
}
}
?>