<?php

$connection = new mysqli("localhost","root","malimali","projektiphp");

if($_POST){
  $email = $_POST['email'];
  $selectquery = mysqli_query($connection,"select * from user where email='{$email}'") or die(mysqli_error($connection));
  $count = mysqli_num_rows($selectquery);
  $row = mysqli_fetch_array($selectquery);
  if($count>0){
    //echo $row['password'];



  
$mailto= $_POST['email'];
if (isset($_POST["email"])){
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
   $mail ->Subject = 'Kerkese per fjalekalimin.';
   $mail ->Body = "<h4>Pershendetje {$row['firstname']} {$row['lastname']}</h4><br><h4>Fjalekalimi yt është: {$row['password']}</h4><br><br><h4>Shpresojmë të ju kemi ndihmuar!</h4>";
   $mail ->AddAddress($mailto);
   if(!$mail->Send())
   {

       echo '<script>alert("Emaili juaj nuk është dërguar!")</script>';
       sleep(3);
      

   }
   
   else
   {
    echo '<script>alert("Emaili juaj është dërguar, ju faleminderit!")</script>';   }
}

header('location:login.php');



  }
}



?>
<html>