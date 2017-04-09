<?php
date_default_timezone_set('Asia/Taipei');
$datetime = date ("Y- m - d / H : i : s");
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
  $ip=$_SERVER['REMOTE_ADDR'];
}
$dbh = new PDO('mysql:host=localhost;dbname=msg;charset=utf8', 'root', '');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $dbh->prepare("INSERT INTO msg(name,email,phone,msg,date,ip)
        VALUES(?,?,?,?,?,?)");

    $statement->execute(array($name,$email,$phone,$message,$datetime,$ip));

    header("Location: http://nthucs-camp-2017.tk/board.php");
    die;

?>
