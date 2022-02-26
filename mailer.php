// this code made by <a href="https://github.com/404notsurrender">silent_c0der</a>
<?php

require_once("public_html"); // File home/public_html

require_once("public_html/PHPMailer/smtp.php"); // File SMTP

 

$mail = new PHPMailer\PHPMailer\PHPMailer();

 

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                   

$mail->Host = "flashpay.my.id";

$mail->SMTPAuth = true;                            

$mail->Username = "admin@flashpay.my.id";                 

$mail->Password = "testmailerphp123";                           

$mail->SMTPSecure = "ssl";                           

$mail->Port = 465;                                   

 

$mail->From = "admin@flashpay.my.id";

$mail->FromName = "SMTP MAILER PHP";

 

$mail->addAddress("email-penerima@gmail.com", "Nama Penerima");

 

$mail->isHTML(true);

 

$mail->Subject = "PHP Mailer Test";

$mail->Body = "<i>This a testing mail using PHPMailer SMTP</i>";

$mail->AltBody = "This is the plain text version of the email content";

 

if(!$mail->send()) 

{

    echo "Mailer : Error" . $mail->ErrorInfo;

} 

else 

{

    echo "Pesan berhasil terkirim!";

}
