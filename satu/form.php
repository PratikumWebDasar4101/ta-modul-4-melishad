<html>
<head>
<title>TA 6701174009</title>
</head>
<body>
	
<form action="isi.php" method="post">


<!-- <h3>Upload Foto Anda : </h3> <input type="file" name="gambar" value="gambar">  -->
<h2>Pilih Genre Film Kesukaan Anda : </h2>
<input type="checkbox" name="film[]" value="Horror">Horror <br/>
<input type="checkbox" name="film[]" value="Action">Action <br/>
<input type="checkbox" name="film[]" value="Anime">Anime <br/>
<input type="checkbox" name="film[]" value="Thriller">Thriller <br/>
<input type="checkbox" name="film[]" value="Animasi">Animasi <br/>

<br><br>

<h2>Pilih Tempat Wisata Tujuan Travelling</h2>
<input type="checkbox" name="wisata[]" value="Bali"> Bali <br>
<input type="checkbox" name="wisata[]" value="Raja Ampat"> Raja Ampat <br>
<input type="checkbox" name="wisata[]" value="Pulau Derawan"> Pulau Derawan <br>
<input type="checkbox" name="wisata[]" value="Bangka Belitung"> Bangka Belitung<br>
<input type="checkbox" name="wisata[]" value="Labuan Bajo"> Labuan Bajo <br> <br>
<input type="submit" value="Submit">


</form>
</body>
</html>
<?php 
session_start();


$username = $_POST['username'] ;
$password = $_POST['password'];

$_SESSION['username'] 	= isset($_POST['username']) ? $_POST["username"]:$_SESSION["username"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];

$data = array(
			array( 
				"username" =>"debby" ,
				"password" =>"999"),
			array(  
				"username" =>"Ali",
				"password"=>"777"
				),
			array( 
				"username" =>"titut",
				"password"=>"000"),
		);
if ($username == $data[1]["username"] && $password == $data[1]['password']||
	$username == $data[2]["username"] && $password == $data[2]['password']||
	$username == $data[0]["username"] && $password == $data[0]['password']) {
	echo "";
	
}else{
	header("location: login.php");

}
 ?>