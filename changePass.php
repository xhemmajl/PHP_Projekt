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