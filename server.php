<?php

session_start();
$errors=array();
$perdoruesi="";
$emri="";
$mbiemri="";
$imella="";
$fjalkalimi="";
$fjalkalimi1="";
include("connectDb.php");
if(isset($_POST['register'])){
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$perdoruesi=mysqli_real_escape_string($connect,$_POST['username']);
	$emri=mysqli_real_escape_string($connect,$_POST['firstname']);
	$mbiemri=mysqli_real_escape_string($connect,$_POST['lastname']);
	$imella=mysqli_real_escape_string($connect,$_POST['email']);
	$fjalkalimi=mysqli_real_escape_string($connect,$_POST['password']);
	$fjalkalimi1=mysqli_real_escape_string($connect,$_POST['confirmP']);
	$secretKey = "6LcAsaYUAAAAAEObdRq4P_xFlsaeAcpip9wNONl_";
	$responseKey = $_POST['g-recaptcha-response'];
	$userIP = $_SERVER['REMOTE_ADDR'];
	$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
	$response=file_get_contents($url);
	$response=json_decode($response);
	if($response->success)
		echo "Verifikimi perfundoi me sukses!";
	
	else
		array_push($errors,"Ju nuk jeni verifikuar!");
	
	
	if(empty($perdoruesi))
	{
		array_push($errors,"Ju nuk keni shënuar emrin e përdoruesit!");
	}
	else 
	{
		$perdoruesi=test($perdoruesi);
	
		if(!preg_match("/^[a-zA-Z0-9_\-\.]*$/",$perdoruesi))
		{
			array_push($errors,"Nuk janë të lejuara simbolet!");
		}
	}
	if(empty($emri))
	{
		array_push($errors,"Ju nuk keni shënuar emrin!");
	}
	else 
	{
		$emri=test($emri);
	
		if(!preg_match("/^[a-zA-Z]*$/",$emri))
		{
			array_push($errors,"Nuk janë të lejuara simbolet!");
		}
	}
	if(empty($mbiemri))
	{
		array_push($errors,"Ju nuk keni shënuar mbiemrin!");
	}
	else 
	{
		$mbiemri=test($mbiemri);
	
		if(!preg_match("/^[a-zA-Z]*$/",$mbiemri))
		{
			array_push($errors,"Nuk janë të lejuara simbolet!");
		}
	}
	if(empty($imella))
	{
		array_push($errors,"Ju nuk keni shënuar email!");
	}
	else 
	{
		$imella=test($imella);
	
		if(!preg_match("/[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$imella))
		{
			array_push($errors,"Formati i email addresses nuk është në rregull!");
		}
	}
	if(empty($fjalkalimi))
	{
		array_push($errors,"Ju nuk keni shënuar fjalëkalimin!");
	}
	else
	{
		$fjalkalimi=test($fjalkalimi);
	}
	if(!empty($fjalkalimi1))
	{
		$fjalkalimi1=test($fjalkalimi1);
	}
	
	if($fjalkalimi!=$fjalkalimi1)
	{
		array_push($errors,"Dy fjalëkalimet nuk përputhen");
	}
	$query="select * from user where username='$perdoruesi'";

	if($result=mysqli_query($connect,$query)){

	if(mysqli_num_rows($result)>0){

	array_push($errors,"Ky emër i përdoruesit ekziston, ju lutem zgjedheni një tjeter!");

	}
}
$query2="select * from user where email='$imella'";

	if($result2=mysqli_query($connect,$query2)){

	if(mysqli_num_rows($result2)>0){

	array_push($errors,"Ky email ekziston, ju lutem zgjedheni një tjeter!");

	}
}

	
	if(count($errors)==0)
	{
		$insert="Insert into user  
		values('$perdoruesi','$emri','$mbiemri','$imella','$fjalkalimi')";

		
		mysqli_query($connect,$insert);

		
		$_SESSION["username"]=$perdoruesi;
		$_SESSION["fname"]=$emri;
		$_SESSION["lname"]=$mbiemri;
		$_SESSION["e-mail"]=$imella;
		header("location:home.php");//referencon ne faqen kryesore;
		/*$perdoruesi="";
		$emri="";
		$mbiemri="";
		$imella="";
		$fjalkalimi="";
		$fjalkalimi1="";
		*/
		
		
	}
}
}
if(isset($_POST['login'])){
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$perdoruesi=mysqli_real_escape_string($connect,$_POST['username']);
	$fjalkalimi=mysqli_real_escape_string($connect,$_POST['password']);
	
	
	
	
	if(empty($perdoruesi))
	{
		array_push($errors,"Ju nuk keni shënuar emrin e përdoruesit!");
	}else 
	{
		$perdoruesi=test($perdoruesi);
	
		if(!preg_match("/^[a-zA-Z]*$/",$perdoruesi))
		{
			array_push($errors,"Nuk janë të lejuara simbolet!");
		}
	}
	
	
	if(empty($fjalkalimi))
	{
		array_push($errors,"Ju nuk keni shënuar fjalëkalimin!");
	}
	else
	{
		$fjalkalimi=test($fjalkalimi);
	}
	
	
	if(count($errors)==0)
	{
		$login="select * from user where username = '".$perdoruesi."' and password = '".$fjalkalimi."'";
		
		$result=mysqli_query($connect,$login);
		
		
		if(mysqli_num_rows($result)==1)
		{
			
		$_SESSION["username"]=$perdoruesi;
		while($rreshti = mysqli_fetch_assoc($result))
    {
        $_SESSION["fname"]=$rreshti["firstname"];
		$_SESSION["lname"]=$rreshti["lastname"];
		$_SESSION["e-mail"]=$rreshti["email"];

		
    }	
		sleep(3);
		header('location:home.php');//referencon ne faqen kryesore;
		

		}
		else{
			array_push($errors,"Emri i Përdoruesit ose fjalëkalimi është gabim!");
			
			
			
		}
		$perdoruesi="";
		$fjalkalimi="";
		
	}
}
}
if(!empty($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header('location:home.php');
}

function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>