<?php 
//include('server.php');

include('header.php');
?>

<!DOCTYPE html>
<html manifest="offline.chaching">
<head>
<?php 
    $page_title = "Lajme Sporti";
            
    echo("<title>$page_title</title>");
?>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="Divigjelbert"> 
	<div class="anamajt"> 
		<h2 style="color:white;">  Betisi fiton në Camp Nou spektaklin<br>e golave ndaj Barcelonës dhe Messit </h2>
		<?php
		$arr=array ('Barcelona','është','mposhtur','në','shtëpi','nga','Real','Betisi','<br>','Ata','humben','me','rezultat','3-4','ne','Camp Nou','<br>','në','ndeshjen','e','vlefshme','për','javën','e','12-të','të','La Ligas');
		echo implode(" ",$arr);
		?>
		<div class="imazhii">
			<?php
			$img='foto/barcelona2.jpg';
			?>
			<img src="<?php echo $img;?>">

		</div>
		</div>

		<div class="anadjatht">
		<div class="anadjathtnalt">
			<div class="anadjathtnalt1">
				<div>
				<?php
			$img='foto/barcelona1.jpg';
			?>
			<img src="<?php echo $img;?>">

				</div>
				<div>
				<?php
			$img='foto/barcelonahumb.jpg';
			?>
			<img src="<?php echo $img;?>">

				</div>

				<div>
					<?php
			$img='foto/barcelona3.jpg';
			?>
			<img src="<?php echo $img;?>">
				</div>
				<div>
					<?php
			$img='foto/barcelona4.jpg';
			?>
			<img src="<?php echo $img;?>">
				</div>
			</div>
		</div>

			<div class="anadjathtposht">
			<div class="drejtekendeshi">
				<div class="drM">
				<h4>Pas kohës shtesë , Clippersat <br>të fortë për Warriors</h4>
			<p>
				<?php
				echo "Mbrëmë janë zhvilluar nëntë ndeshje <br> në ligën më të fortë <br> të basketbollit në botë.
				Kampioni në fuqi i NBA-s,<br> Golden State Warriors kanë pësuar humbje <br> të papritur si 
				mysafirë në Staples Center.<br>
				Los Angeles Clippers   para shikuesve të vetë<br> u treguan më të mirë se ‘luftëtarët’<br>
				duke triumfuar me rezultat 121-116."
				?>
				</p>
				<button><a href="njupage.html" target="_blank" style="text-decoration:none;color:#95A60A;">Lexo më shumë >></button></a>
				</div>

				<div class="drD">
					<?php
					$img='foto/nba1.jpg';
			?>
			<img src="<?php echo $img;?>">

				</div>
			</div>
		</div>

	</div>
</div>


<div class="RreshtiLajmev">
	<div class="Lajmi1">
		<h3>Roma - Real Madrid: Formacionet e mundshme</h3>
		<p>
			<?php echo "Një ndeshje e veçantë, një sfidë vendimtare, 
			një përballje që e <br> ofron vetëm Liga e Kampionëve.
				Po flasim për ndeshjen Roma<br>-Real Madrid 
			në Olimpico e vlefshme <br> për pozitën e parë në Grupin G."; ?>
		</p>
		<div class="imazhi">
			<?php
			$img='foto/roma.jpg';
			?>
			<img src="<?php echo $img;?>">
		</div>		
	</div>
	<div class="Lajmi2">
		<h3>Karen Khachanov fitoi turneun Paris Masters</h3>
		<p>
			<?php echo "Karen Khachanov e ka nënshtruar Novak Djokovicin  për ta <br> 
			fituar titullin e parë ‘Masters 1000’.
            Tenisti rus fitoi me  rezultat <br> 2-0  në sete (7-5, 6-4)
            duke i dhënë fund serisë prej 22 ndeshjes <br>pa humbje të serbit.";
            ?>
		</p>
		<div class="imazhi">
			<?php
		$img='foto/tenis1.jpg';
			?>
			<img src="<?php echo $img;?>">
		</div>
	</div>
	<div class="Lajmi3">
		<h3 class="gjel">LA Lakers mposhtet në shtëpi nga Orlando</h3>
		<p>
			<?php
			echo "Los Angelea Lakers ka pësuar humbjen e tetë në këtë edicion"; 
			echo "<br>"; 
			echo "në NBA.";
echo "Skuadra nga Kalifornia është mposhtur si vendas nga  Orlando Magic"; 
echo"me katër pikë diferencë 108:104.";
echo "<br>";
echo "Fitorja e Orlandos nga Lakers ishte e 10 këtë edicion.";
			?>
		</p>
		<div class="imazhi">
			<?php
			$img='foto/lakers.jpg';
			?>
			<img src="<?php echo $img;?>">

		</div>
	</div>

</div>
<?php
include('footer.php');
?>