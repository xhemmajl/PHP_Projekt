<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-image: url(bck.jpg);	
}
.header{
width:30%;
margin:50px auto 0px;
color:black;
background-color: rgba(0, 255, 0, 0.1);
text-align:center;
border:1px solid rgba(0, 255, 0, 0.1);
border-radius:10px 10px 0px 0px;
padding:20px;




}
form{
width:30%;
margin:0px auto;
padding:20px;
border:1px solid rgba(0,255,0,0.1);
background:white;
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
color:black;
background:rgba(0, 255, 0, 0.1);
border-radius:5px;

}
p{

}
p a{
color:green;
text-decoration:none;

}
.errori{
	width:92%;
	margin:0px auto;
	padding:10px;
	color:a94442;
	border:1px solid #a94442;
	
	background:#f2dede;
	border-radius:5px;
	text-align:left;
}
.error{
	
	color:red;
}
</style>

</head>
<body>
<div class="header">
	<h2> <strong>Login</strong></h2>
</div>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!-- paraqit gabimet-->
<?php include('gabimet.php')?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" value="<?php echo $emri?>"/>
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password" value="<?php echo $fjalkalimi?>"/>
</div>

<div class="input-group">
<button type="submit" name="login" class="btn"><strong>Login</strong></button>
</div>
<p>
Nuk keni një llogari?<a href="register.php">Regjistrohuni</a>
</p>
<p><a href="reset.php">Keni harruar fjalëkalimin?</a></p>
</form>
</body>
</html>