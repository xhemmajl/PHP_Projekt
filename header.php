<?php
include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#p2").click(function(){
		$("#logout").toggle();
	});
});
</script>

<style>
.btn a{
    text-decoration:none;
	color:black;
	
}
.btn a:hover{
	color:black;
} 
.header{
	height:200px;
	border-bottom:1px solid #f4f4f4;
	background-color:white;
	
	
}
.c1{
	display:inline-block;
	width:200px;
	height:100px;
	margin:45px;
	;
	
}
.login{
	display:inline-block;
	float:right;
	width:150px ;
	height:100px;
	margin:15px 10px;

	
}
.btn{
	
	margin:0px 0px;
	padding:15px 5px;
	text-align:center;
	background-color:white;
	border:0px solid #cc99cc;
	transition:padding 0.4s,font-size 0.4s;
}
.box1{
	
	display:inline-block;
	width:150px ;
	height:150px;
	display:inline-block;
	text-align:center;
	font-family:Courier New;
	margin:50px 80px 0px 180px;
}
.box1 img{
	width:100px;
}
#p1{
	background-color:#f5f5f5;
	font-size:17px;
	font-family:Courier New;
	color:black;
	transition:color 0.4s,background-color 0.4s;
}
#p1:hover{
	background-color:#c1c1c1;
	color:white;
	
}
.l1{
	display:inline-block;
	float:right;
	width:50px ;
	height:50px;
	margin:20px 10px;
	
}


.corner{
	border-radius: 70px;
    background: black;
    font-size:20px;
    color:white;
   padding:13px;
    text-align:center;
}
#logout{
	width:250px;
	height:120px;
	clear:right;
	float:right;
	border:1px solid violet;
	margin:0px 10px;
	display:none;
	border-radius:10px;
	background-color:white;
}
#a3{
	font-family:Courier New;
	font-size:16px;
	color:white;
	padding:5px 10px;
	background-color:black;
}
#a3:hover{
	color:white;
}
.tabela{
	
	/*text-align:center;*/
	border-spacing:15px;
	
	
}
td{
	font-family:Courier New;
	
}

.menu{
	border-bottom:1px solid #f1f1f1;
	height:50px;
 }
.lu>li{
float:left ;
margin:20px 60px 10px 10px ;
display:inline-block;

}

.lu1{
display:none;
background-color:white;
padding:0px;
min-width:170px;
z-index:1px;
box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.1);
margin:0px 0px;
}
.lu>li:hover .lu1{
display:block;
position:fixed;
}

li{
list-style-type: none;
}
a{
text-decoration:none;
font-family:Courier New;
font-size:18px;
color:black;
}

a:active{
color:white;

}

a:hover{
color:gray;
}

.li2{
margin:0px;
padding:10px 20px;
}
.lu{
	margin:0px;
	padding:0px;
}




</style>
</head>
<body>
<!-- page header -->
	<div class="header">
	<div class="c1"> 
		<img src="foto/sport.png"/>
		</img>
	</div>
	<div class="login" id="log">
		<div class="btn"><a href="login.php"><img src="foto/login.png"></a></div> 
	</div>
	
	<div class="l1">
	<?php if(!empty($_SESSION['username'])):?>
		<p class="corner" id="p2">
		<?php 
		$user=$_SESSION['fname'];
		$fch=substr($user,0,1);
		echo  $fch;
		?>
		</p>
	</div>
	<div id="logout">
	<table  class="tabela" >
		<tr>
		<td>
		<?php
		$fname= $_SESSION['fname'];
		$lname= $_SESSION['lname'];
		
		echo  $fname." ".$lname;
		?>
		</td>
	</tr>
	<tr>
		
		<td align="left">
		
		<div id="btn1"><a id="a3" href="header.php?logout='1'">Logout</a></div>
		</td>
		</tr>
		</table>
	</div>
	<script>
		document.getElementById('log').style.display='none';
	</script>
		
	<?php endif ?>
	
	</div>
	<div class="menu">
		<ul class="lu">
		<li><a href="home.php">Kryefaqja</a></li>
		<li><a href="Football.php">Futboll</a></li>
		<li><a href="basket.php">Basketboll</a></li>
		<li><a href="sent_email1.php">Contact us</a></li>
		<li><a href="about.php">About</a></li>
		</ul>
	</div>
