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
.btn{
padding:10px;
font-size:15px;
color:white;
background:rgba(0, 0, 0, 0.1);
border-radius:5px;

}
.btn2{
padding:10px;
margin-left:320px;
font-size:15px;
color:white;
background:rgba(0, 0, 0, 0.1);
border-radius:5px;

}
a{
	text-decoration: none;
	color:white;
}

.error{
	
	color:red;
}	
</style>
</head>
	<body>

<div class="header">
	<h2>Nderro Fjalekalimin</h2>
</div>


<form method="post"> 
<!-- paraqit gabimet-->
<?php include('gabimet.php')?>
<div class="input-group">
<label>Perdoruesi</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label>Fjalekalimi Aktual</label>
<input type="password" name="password">
</div>
<div class="input-group">
<label>Fjalekalimi i ri</label>
<input type="password" name="newPassword">
</div>
<div class="input-group">
<label>Konfirmo fjalekalimin e ri</label>
<input type="password" name="cPassword">
</div>
<div class="input-group">
<button type="submit" name="register" class="btn">Nderro Fjalekalimin</button>
<button class="btn2"><a href="login.php">Kyçu</a></button>
</div>
</form>
		
	</body>
	</html>
