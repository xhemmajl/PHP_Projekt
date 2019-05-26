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
        .kyqja {
                position: relative;
                bottom: -10px;
                background: #fff;
                border-radius: 5px; 
                width: 500px;
                padding: 20px;
                border-top: 5px solid #00ffcc;
                margin: 0 auto;
                color: black;
            }
            .kyqja h1 {

                font-size: 18px;
                text-transform: uppercase;
                margin-top: 0;
                margin-bottom: 20px;
                text-align: center;
                color: black;

            }
            .kyqja button:hover {
                background: #1771ff;
            }
            .kyqja input:active, .kyqja input:focus {
                border: 1px solid #0770ff;
            }
            .button{

                width: 40%;
                height: 40px;
                background: #33ffcc;
                cursor: pointer;
            }
            .reset{

                width: 40%;
                height: 40px;
                background: #33ffcc;
                cursor: pointer;
            }
            .kyqja input {

                width: 100%;
				clear:both;
            }
			.kyqja .container input{
			 width:45%;
			 clear:none;
			 padding-left:20px;
			}
			.kyqja .container{
			padding-left:40px;
			}


            .button:hover {
                background: #33ffbb;
            }
            .reset:hover {
                background: #33ffbb;
            }
            .kyqja textarea{
                padding:0 20px 0 10px; }

          


        </style>
</head>

 <body>
       
       <div class="kyqja">
            <form  name="formkontakti" action="sent_email1.php" method="post">
                <h1>Na Kontaktoni</h1>
				<h3>I/E Nderuar,<?= $_SESSION['fname'] ?> <?= $_SESSION['lname'] ?></h2>
                <fieldset>
					<legend>Në rast të ndonjë pakënaqësie apo këshille, na shkruani!</legend>
                    <p>Emaili juaj :<?= $_SESSION['e-mail'] ?></p>
                    Mesazhi:<br>
                    <textarea name="mesazhi" style="resize: none; margin-bottom: 10px; width:94%" rows="4" placeholder="Mesazhi juaj..." cols="40"></textarea><br>
                    <div class="container">
                    <input type="submit" class="button" value="Dergo">
                    <input type="reset" class="reset" value="Pastro">
					</div>
                    <script src="sent_email.js"></script>
                </fieldset>
            </form>
        </div>

		
    

<?php
include('footer.php');
?>
    </body>
	
</html>