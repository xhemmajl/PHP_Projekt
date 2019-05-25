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



			


































<?php
include('footer.php');
?>