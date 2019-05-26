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