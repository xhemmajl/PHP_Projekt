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
  if($count==0) {
         echo '<script>alert("Ky email nuk ekziston si perdorues!")</script>';
}
}



?>
<html>
 <head>
   <style>
  .header{
width:30%;
margin:50px auto 0px;
color:white;
background-color: rgba(0, 0, 0, 0.7);
text-align:center;
border:1px solid rgba(0, 255, 0, 0.1);
border-radius:10px 10px 0px 0px;
padding:20px;
}
body{
  background-image: url(foto/wall.jpg);
  background-size: cover;
}
form{
width:30%;
margin:0px auto;
font-weight: bold;
color:white;
font-size:16px;
padding:20px;
border:1px solid rgba(0,255,0,0.1);
background-color:rgba(0,0,0,0.7);
border-radius:0px 0px 10px 10px;
}
     .input-group{
margin:10px 0px 10px 0px;
}
.input-group label{
display:block;
text-align:left;
margin:3px;
}
.input-group input{
height:30px;
width:93%;
padding:5px 10px;
font-size:16px;
border-radius:5px;
border:1px solid gray;
}
    </head>
    <body>
      <div class="header">
  <h2>Rikthe Fjalekalimin</h2>
</div>
      <form method="post">
        <div class="input-group">
        <label>Email</label>
        <input type="email" name="email">
        </div>
        <div class="input-group">
        <button type="submit" name="nderro" class="btn">Dergo</button>
        <button type="submit" name="login" class="btn2"><a href="login.php">Kyçu</a></button>
</div>
      </form>
    </body>
    </html>  
