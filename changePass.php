<?php
$connection = new mysqli("localhost","root","malimali","projektiphp");
if($_POST){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $newPassword = $_POST['newPassword'];
  $cPassword = $_POST['cPassword'];
  $selectquery = mysqli_query($connection,"select * from user where username='{$username}'") or die(mysqli_error($connection));
  $count = mysqli_num_rows($selectquery);
  $row = mysqli_fetch_array($selectquery);

  if($count>0){
  if($password==$row['password']) {
  	if($newPassword == $cPassword) {
  		 $query = "update user set password='$newPassword' where username='$username'";
  		if($connection->query($query)){
  			echo '<script>alert("Fjalekalimi juaj është ndërruar me sukses!")</script>';

  		}
  		else{
  			  	echo '<script>alert("Fjalekalimi juaj nuk është ndërruar!")</script>';

  		}
  	
  		
  	
  	
  	}
  	else if($newPassword != $cPassword){
  			  			  	echo '<script>alert("Dy fjalekalimet e reja nuk perputhen!")</script>';

  		}
  	
  	
  }
else if($password !== $row['password']){
  		  	echo '<script>alert("Keni shenuar gabim fjalekalimin aktual!")</script>';
	}
  
}
else if(!$count) {
	echo '<script>alert("Ky perdorues nuk ekziston!")</script>';
}
}
session_start();
$errors=array();
if($_POST){
	if(empty($username))
	{
		array_push($errors,"Ju nuk keni shënuar emrin e përdoruesit!");
	}
	
	
		if(!preg_match("/^[a-zA-Z0-9_\-\.]*$/",$username))
		{
			array_push($errors,"Nuk janë të lejuara simbolet!");
		}
	
	if(empty($password))
	{
		array_push($errors,"Ju nuk keni shënuar fjalekalimin aktual!");
	}
	
	
	
	
	if(empty($newPassword))
	{
		array_push($errors,"Ju nuk keni shënuar fjalekalimin e ri!");
	}
	
	
		
	
	if(empty($cPassword))
	{
		array_push($errors,"Ju nuk keni ri shënuar fjalekalimin e ri!");
	}
	
	
		
	
	if(count($errors)==0)
	{
		
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
		$_SESSION["newPassword"]=$newPassword;
		$_SESSION["cPassword"]=$cPassword;
}
}
