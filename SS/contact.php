<?php
/*
include("class.phpmailer.php"); //匯入PHPMailer類別

$mail= new PHPMailer(); //建立新物件
$mail->IsSMTP(); //設定使用SMTP方式寄信
$mail->SMTPAuth = true; //設定SMTP需要驗證
$mail->Host = "XXX.XXX.XXX.XXX"; //設定SMTP主機
$mail->Port = 25; //設定SMTP埠位，預設為25埠。
$mail->CharSet = "big5"; //設定郵件編碼

$mail->Username = "youmaker12345"; //設定驗證帳號
$mail->Password = "george6050829515"; //設定驗證密碼

$mail->From = "youmaker12345@gmail.com"; //設定寄件者信箱
$mail->FromName = "測試人員"; //設定寄件者姓名

$mail->Subject = "PHPMailer 測試信件"; //設定郵件標題
$mail->Body = "大家好, 這是一封測試信件! "; //設定郵件內容
$mail->IsHTML(true); //設定郵件內容為HTML
$mail->AddAddress("youmaker12345@gmail.com", "test"); //設定收件者郵件及名稱

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
header("Location: http://nthucs-camp-2017.tk");
die;
*/

if($_POST["message"]) {
	$name = $_POST['MyName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body = '姓名: ' . $name . "\n\n" . '信箱: ' . $email . "\n\n"  . '訊息: ' . $message;
    $sMailFrom = $_POST['email'];
    $to = 'youmaker12345@gmail.com';
    mail($to, "2016清大資工營諮詢", $body, 'From: <'.$sMailFrom.'>');
    if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	echo "Message sent!";
	}

    header("Location: http://nthucs-camp-2017.tk");
    die;
}?>
