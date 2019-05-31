<?php
include('server.php');
?>
<!DOCTYPE html>
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
font-weight:bold;
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
p{

}
p a{
color:green;
text-decoration:none;

}
.error{
	
color:red;
}	
</style>
</head>
<body>

<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<!-- paraqit gabimet-->
<?php include('gabimet.php')?>
<div class="input-group">
<label>Perdoruesi</label>
<input type="text" name="username" value="<?php echo $perdoruesi?>"/>
</div>
<div class="input-group">
<label>Emri</label>
<input type="text" name="firstname" value="<?php echo $emri?>"/>
</div>
<div class="input-group">
<label>Mbiemri</label>
<input type="text" name="lastname" value="<?php echo $mbiemri?>"/>
</div>
<div class="input-group">
<label>Email</label>
<input type="text" name="email" value="<?php echo $imella?>"/>
</div>
<div class="input-group">
<label>Fjalekalimi</label>
<input type="password" name="password" value="<?php echo $fjalkalimi?>"/>
</div>
<div class="input-group"> 
<label>Konfirmo Fjalekalimin</label>
<input type="password" name="confirmP" value="<?php echo $fjalkalimi1?>"/>
</div>
<div class="input-group">
<button type="submit" name="register" class="btn">Regjistrohu</button>
</div>
<p>
Keni nje llogari?<a href="login.php">Kyçu</a>
</p>
</form>

</body>
</html>
