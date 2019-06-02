<?php
include('header.php'); 
?>

<!DOCTYPE html>
<html manifest="demo_html.appcache">

    <head>
        <title>Sport</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
       <script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
}
</script>

        <style>
      

	body {
		font-family: Arial,Helvetica,Sans-serif;
		font-size:15px;
		line-height:1.5;
		padding:0;
		margin:0;
		background-color:white;
	}
     
	.container{
		width:80%;
		margin : auto;
		overflow: hidden;
	}

	ul{
		margin :0;
		padding : 0;

	}
	

	.button_1{
		height:38px;
		background:black;
        border:0;
		padding-left:20px;
		padding-right:20px;
		color:white;
	}

  .dark {
  	padding:15px;
  	background: #95A60A;
  	color:black;
  	margin-top:10px;
  }


#showcase{
	min-height:400px;
	background: url("kids.jpg");no-repeat 0 -400px;
	text-align:center;

}

#showcase h1{
    margin-top:100px;
    font-size:55px;
    margin-bottom:10px;
}

#showcase p{
	font-size:20px;
}
#newsletter{
	padding:15px;
	color:#ffffff;
	background:#95A60A;
}

#newsletter h1{
	float:left;

}

#newsletter form{
	float:right;
	margin-top:16px;
}

#newsletter input[type="email"]{
	padding:4px;
	height:25px;
	width:250 px;
}



#boxes{
	margin-top:20px;
}

#boxes .box{
	float:left;
	text-align:center;
	width:30%;
	padding:10px;
}

#boxes .box img{
	width:100px;
}

aside#sidebar{
	float:right;
	width:30%;
	margin-top:10px;
}

article#main-col{
	float:left;
	width:65%;
}
	
 .alert {
    padding: 15px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
    div.fotoja {
         width:220px;
         height:100px;
         float:left;
     }
     div.fotoja img{
                width: 200px;
                height:229px;
                transform-style: preserve-3d;
                transition: all 0.5s ease;
                padding-left: 20px;
               
                
                         }
            div.fotoja img:hover{
                transform: rotate(360deg);
            }

        </style>





    </head>
    <body>
     
    

        <br><br>

	
<section id="main">
	<div class="container">
		<article id=main-col>
			<h1 class="page-title">Rreth nesh</h1>
			<p>
				<?php
			echo "-Kjo eshte motoja jone qe mundohemi ti permbahemi me çdo kusht"; echo "<br>";


echo "-Jemi 2.3k puntor te cilet punojne me angazhim te madh per ti ofruar cdo lajm qe ndodh ne Kosove rreth sportit dhe ane e mbane botes";
echo "<br>";
echo "-Zyrat tona mund ti gjeni ne cdo qytet te Kosoves";
echo "<br>";
echo "-Zyrat tona gjenden edhe jashte Kosoves, ne Maqedoni, Shqiperi ,Austri, Malt,...,etj";
echo "<br>";
echo "-Per ne eshte misioni jone qe tju mbajme te informuar 24/7";
echo "<br>";
echo "-Ekzistojme qe nga viti 2020 e deri me sot, fal jush";
echo "<br>";
echo "-Çdo gje funksionon ne menyre te perkryer";
	?>
</p>
		
			<p class="dark">
	<?php
		define("GREETING", "-Orari i punes ne zyra 8:00-16:00");
		echo GREETING;
		echo "<br>";
		define("Thanks", "-Faleminderit per lexim");
		echo Thanks;
		?> 
			</p>
		</article>
		<aside id="sidebar">
			<div class="dark">
                           
			<h3>Ç'farë bëjmë ne?</h3>
			<p>
			Ju sjellim te rejat e fundit nga sporti, me saktesisht nga futbolli, basketbolli.<br>
		Rezultatet live janë një lloj shërbimi që ne ofrojmë e që janë të lidhura me sportin dhe transmetuesit.<br>
	    Ideja e pikëve të drejtpërdrejta është të ofrojë informacion në kohë reale në lidhje me rezultatet e sportit nga disiplina të ndryshme.<br>
		    </p>
			</div>
		</aside>
	</div>
 
</section><br><br>

<section id="newsletter">
	<div class="container">
		<h1>Subscribe </h1>
	<form name="myForm" action="mailto:sportinfo@gmail.com method="post"
	onsubmit="return validateForm()" method="post">

			<input type="email" placeholder="Enter Email" name="fname">
			<button   onmouseup="mUp(this)" type="submit" class="button_1">Subscribe</button>
		</form>
		<script>

function mUp(obj) {
    obj.style.backgroundColor="#8E44AD";
    obj.innerHTML="Subscribed";
}
</script>

	</div>
</section>
 </body>
<?php
 include('class1.php');
  ?>
</html>

<?php
 include ('footer.php');

?>