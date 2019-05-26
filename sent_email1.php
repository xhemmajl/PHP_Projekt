<?php

include('header.php');
if(!isset($_SESSION['username'])){
   echo '<script language="javascript">';
   
}
$name=$_SESSION['fname'];
$lastname=$_SESSION['lname'];
$mailto= $_SESSION['e-mail'];
if (isset($_POST["mesazhi"])){
$mesazhi =$_POST['mesazhi'];
$_SESSION['mesazhi'] = $mesazhi;
$mailMsg='<html><body><h3>Përshëndetje'.' '.$name.'  '. $lastname.'</h3><br><hr><h4>Përmbajtja e mesazhit tuaj:</h4><p>'.$mesazhi.'</p><hr><br><p>Faleminderit qe na kontaktuat , ne do mundohemi sa më shpejt të ju kthejm përgjigjje.</p></body></html>';
require('PHPMailer\PHPMailerAutoload.php');
$mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = 'smtp.gmail.com';
   $mail ->Port = '465'; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = 'sportpage00@gmail.com';
   $mail ->Password = 'Kosova123';
   $mail ->Subject = 'Pershendetje'.' '.$name.' '.$lastname.' '.'.'.'Pranimi i mesazhit tuaj!';
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
   f(!$mail->Send())
   {
       echo '<script>alert("Emaili juaj nuk është dërguar!")</script>';
   }
   else
   {
		echo '<script>alert("Emaili juaj është dërguar, ju faleminderit!")</script>';   }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Na Kontaktoni</title>

        <style>