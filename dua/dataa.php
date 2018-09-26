<!DOCTYPE html>
<html>
<head>
	<title>6701174009</title>
</head>
<body>
	
	<form action="hasil.php" method="post">
		<table>
	<tr>
			<td>Daftar Barang Belanjaan</td>
			<td>:</td>
	</tr>
	<tr>
			<td><input type="checkbox" name="barang[]" value="Tas">Tas<br></td>
  	</tr>
  	<tr>
  		
  		<td colspan="2"><input type="checkbox" name="barang[]" value="Sepatu">Sepatu<br></td>
    </tr>
    <tr>
  		<td><input type="checkbox" name="barang[]" value="Baju">Baju</td>
    </tr>
  
    <tr>
    	<td>Jenis Pengiriman : </td>
    </tr>
    <tr>
    	<td><input type="radio" name="kirim" value="JNE">JNE<br></td>
    </tr>
    <tr>
    	<td><input type="radio" name="kirim" value="JNT"> JNT</td>
    </tr>
    <tr>	
  		<td><input type="radio" name="kirim" value="TIKI">TIKI</td>
  	</tr>
	<tr>
		<td>ALAMAT : </td>
	</tr>
	<tr>
		<td>
			<input type="text" name="alamat" > 
			<br> <br><br>
			<input type="submit" name="submit" value="Submit"> 
		</td> 
	</tr>
			
				
		</table>
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
	header("location: login2.php");

}
 ?>