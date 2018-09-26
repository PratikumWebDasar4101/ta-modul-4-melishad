<center>
<?php 


	$film = $_POST['film'];
	echo "<h1>Genre film yang anda pilih :  </h1>";
	foreach ($film as $movie) {
		echo "- $movie <br> <br>";
	}
	$wisata = $_POST['wisata'];
	echo"<h1> Tempat wisata yang anda pilih : </h1>";
	foreach ($wisata as $wst ) {
		echo "- $wst <br> <br>";
	}

 ?>
 <br>
 <br>
<a href="login.php">LOGOUT</a>