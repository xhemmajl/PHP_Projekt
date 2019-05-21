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
	
	if(empty($perdoruesi))
	{
		array_push($errors,"Username is required!");
	}
	else 
	{
		$perdoruesi=test($perdoruesi);
	
		if(!preg_match("/^[a-zA-Z0-9_\-\.]*$/",$perdoruesi))
		{
			array_push($errors,"Only letters are allowed!");
		}
	}
	if(empty($emri))
	{
		array_push($errors,"Firstname is required!");
	}
	else 
	{
		$emri=test($emri);
	
		if(!preg_match("/^[a-zA-Z]*$/",$emri))
		{
			array_push($errors,"Only letters are allowed!");
		}
	}
	if(empty($mbiemri))
	{
		array_push($errors,"Lastname is required!");
	}
	else 
	{
		$mbiemri=test($mbiemri);
	
		if(!preg_match("/^[a-zA-Z]*$/",$mbiemri))
		{
			array_push($errors,"Only letters are allowed!");
		}
	}
	if(empty($imella))
	{
		array_push($errors,"Email is required!");
	}
	else 
	{
		$imella=test($imella);
	
		if(!preg_match("/[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$imella))
		{
			array_push($errors,"Invalid email format!");
		}
	}
	if(empty($fjalkalimi))
	{
		array_push($errors,"Password is required!");
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
		array_push($errors,"The two passwords do not match");
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
		array_push($errors,"Username is required!");
	}else 
	{
		$perdoruesi=test($perdoruesi);
	
		if(!preg_match("/^[a-zA-Z]*$/",$perdoruesi))
		{
			array_push($errors,"Only letters are allowed!");
		}
	}
	
	
	if(empty($fjalkalimi))
	{
		array_push($errors,"Password is required!");
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
			array_push($errors,"Username or Password is wrong!");
			
			
			
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