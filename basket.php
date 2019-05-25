<?php 
//include('server.php');


include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lajme Sporti - Basket</title>
	<style>
	 	
		
	</style>
	<link rel="stylesheet" href="styleBasket.css">
</head>

<body>

<section id="timeline">
		<div class="t1-item">
		<div class="t1-bg" style="background-image:url(foto/lakerslogo.jpg)"></div>
		<div class="t1-year">
			<p class="f2 heading">LAKERS</p>
		</div>
		<div class="t1-content">
			<h1>Los Angeles Lakers triumfon kundër Miami Heat </h1>
			<p>Mbrëmë janë zhvilluar 11 ndeshje në ligën më të fortë të basketbollit në botë.
			Los Angeles Lakers ka shënuar fitoren e radhës në këtë sezon në NBA pas një kampionati të dështuar vitin e kaluar.
			 </p>
		</div>
	        </div>


	        <div class="t1-item">
		<div class="t1-bg" style=" background-image:url(foto/warriorslogo.jpg)"></div>
		<div class="t1-year">
			<p class="f3 heading">WARRIORS</p>
		</div>
		<div class="t1-content">
			<h1>Golden State me rikthim spektakolar</h1>
			<p> Golden State Warriors kanë arritur që të rikthejnë rezultatin me seri 13-2 
				në tre minutat e fundit duke triumfuar në udhëtim te Sacramento Kings me rezultat 130-125.
				</p>
		</div>
		</div>

		<div class="t1-item">
		<div class="t1-bg" style="background-image:url(foto/celticslogo.jpg)"></div>
		<div class="t1-year">
			<p class="f2 heading">CELTICS</p>
		</div>
		<div class="t1-content">
			<h1> Bostoni pëson humbje </h1>
			<p>  Bostoni bie në pozitën e pestë në Lindje, kurse Lakers ngjiten në pozitën e katërt pas humbjes së
			 Clippers nga Thunder dhe Lakers gjenden vetëm një fitore larg vendit të parë
				 </p>
		</div>
	</div>
	
	<div class="t1-item">
		<div class="t1-bg" style="background-image:url(foto/spurslogo11.jpg)"></div>
		<div class="t1-year">
			<p class="f2 heading">SPURS</p>
		</div>
		<div class="t1-content">
			<h1> San Antonio vazhdon me fitore, Milwaukee befason Toronton </h1>
			<p>Pas dy humbjeve radhazi, San Antonio Spurs tani është rikthyer tek seria e fitoreve.
				</p>
		</div>
	</div>


	</section>


	<div class="divikryesor">



		<div class="divik1">
			<h2>LISTA E KUPAVE</h2>
			<h5>Kupat e fituara prej vitit 1947-2013</h5>
			<img src="foto/listakupave.jpg">
			
		</div>
		

		<div class="divik2">


			<div class="dk21">
				<h3>Toronto shokon Golden Staten pa Leonardin, edhe Bostoni shënon fitore të madhe falë Irving</h3>
	 			<p>Toronto Raptors ka shënuar fitoren e parë që nga viti 2004 në parketin e Golden State Warriors pa prezencën e Kaëhi Leonard me rezultat 113-93.
	 			Në pjesën e dytë epërsia e Torontos shkoi deri në 27 pikë.<span id="dots">...</span><span id="more">

				Më i miri ishte Kyle Loëry me 23 pikë e 12 asistime, kurse Serge Ibaka realizoi 20 pikë e 12 kërcime.

				Ndërkaq, Kevin Durant shënoi 30 pikë, i vetmuar, me Stephen Curryn që dështoi totalisht në këtë takim me vetëm 10 pikë të shënuara.
				Bostoni shënoi fitore të madhe me rezutlat 130-125 në tokën e Washington Wizards pas një drame të madhe pas vazhdimeve

				Ndërkaq, automatikisht pas humbjes së Golden State është Denver Nuggets që ka kaluar në vendni e parë, me të gjitha skuadrat drei në vendni e parafundit në Perëndim që janë afër njëra-tjetrës për pak ndeshje duke bërë që të gjitha skuadrat pos Phoenixit të kenë gjasa për playoff.<span>
				</p>


				<button type="button" id="read" onclick="read()">Lexo me shume</button>
				<script type="text/javascript">
					var i=0;
					function read(){
						if(!i){
							document.getElementById("more").style.display="inline";
							document.getElementById("dots").style.display="none";
							document.getElementById("read").innerHTML="Lexo me pake";
							i=1;
						}
						else{
							document.getElementById("more").style.display="none";
							document.getElementById("dots").style.display="inline";
							document.getElementById("read").innerHTML="Lexo me shume";
							i=0;

						}


						}
					


				</script>
	 			<img src="foto/basket1.jpg">





			</div>



			<div class="dk22">
				<h3>Fitore të mëdha të LA Lakers dhe Dallasit, Bostoni thyen rekord historik ndaj Chicagos</h3>
	 			<p>Los Angeles Lakers ka triumfuar në udhëtim te Memphis Grizzlies me rezultat 111-99 duke treguar fuqinë e vet.
	 			LeBron James ishte më i miri me 20 pikë, tetë kërcime dhe 9 asistime, i ndjekur nga Kyle Kuzma me 20 pikë e nëntë kërcime.

				</p>
	 			<img src="foto/basket2.jpg">
	 			

			</div>

			<div class="dk23">
				<h3>San Antonio vazhdon me fitore, Milwaukee befason Toronton</h3>
	 			<p>Pas dy humbjeve radhazi, San Antonio Spurs tani është rikthyer tek seria e fitoreve.</p>
	 			<img src="foto/basket3.jpg">
			</div>

			<div class="dk24">
				<h3>Los Angeles Lakers triumfon kundër Miami Heat</h3>
	 			<p>Mbrëmë janë zhvilluar 11 ndeshje në ligën më të fortë të basketbollit në botë.</p>
	 			<img src="foto/basket4.jpg">
			</div>

			
		</div>


		<div class="divik3">
	 		<div class="dk31">
	 			<form action="basket.html" method="POST">
	 			<h4>Votoni per ekipin e juaj te preferuar.</h4>
	 			<table border="1" bgcolor="" cellpadding="10" style="color:white; margin-left: 20px;">
	 				<tr>
	 					<td><center>Golden State Warriors</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>San Antonio Spurs</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Boston Celtics</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Los Angelos Lakers</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Philadelphia 76ers</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Cleveland Cavaliers</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Chicago Bulls</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Denver Nuggets</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>
	 				<tr>
	 					<td><center>Miami Heat</center></td>
	 					<td><input type="radio" name="radio"/></td>
	 				</tr>


	 			</table>
	 			<button>VOTO!</button>
	 		</div>
	
	 	</div>
	 	
	
		
		</div>
		

		
	</div>

	<div class="RreshtiLajmev">
	<div class="Lajmi1">
		<h3>James Harden 47 pikë në fitoren kundër Jazz</h3>
		<p>Mbrëmë janë zhvilluar tetë ndeshje në ligën më të fortë të basketbollit në botë.

		   Houston Rockets kanë triumfuar para<br>shikuesve të vetë kundër Utah Jazz me rezultat 102:97.
		   <br>  <br>
		</p>
		<div class="imazhi">
			<img src="foto/lajmi1foto.jpg">
		</div>		
	</div>

	<div class="Lajmi2">
		<h3>Golden State arrin edhe një fitore</h3>
		<p>Golden State Warriors kanë triumfuar edhe në një ndeshje në rrugëtimin për të mbrojtur titullin e kampionit të NBA-s.
			<br>  <br>
			<br>
		</p>
		<div class="imazhi">
			<img src="foto/lajmi2foto.jpg">
		</div>
	</div>

	<div class="Lajmi3">
		<h3 class="gjel">Nuk ndalet Z Mobile Prishtina</h3>
		<p>Z Mobile Prishtina ka regjistruar fitoren e radhës në Superligën e Kosovës në basketboll, kësaj radhe si mysafir i Rahovecit me rezultat (93-79).
			 <br>  <br>
		</p>
		<div class="imazhi">
			<img src="foto/lajmi3foto.jpg">
		</div>
	</div>

 	</div>


 	




































<?php
include('footer.php');
?>