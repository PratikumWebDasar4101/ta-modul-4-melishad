<?php
session_start();
$hargapengiriman;
$totalharga;
$tgl=date('d-M-Y');

$kirim = $_POST["kirim"];
$barang 	= $_POST["barang"];
$alamat 	= $_POST["alamat"];	 
echo "Tanggal Pembeliaan : $tgl";
echo "<br> <br>";
echo " Alamat : $alamat";
echo "<br> <br>";
echo "Barang yang dipilih : ";
foreach ($barang as $nilai) {
	echo "<br> - $nilai <br>";
}

$totalBiaya = 0;
if ($kirim=="JNE") {
	$hargapengiriman = 3000;
}elseif ($kirim=="JNT") {
	$hargapengiriman = 7000;
}elseif ($kirim=="TIKI"){
	$hargapengiriman = 11000;
}


for ($i = 0; $i < count($barang); $i++) { 
	if ($barang[$i] == "Baju") {
		$harga = 200000;
	} elseif($barang[$i] == "Sepatu"){
		$harga = 400000;
	} else {
		$harga = 100000;
	}
	$totalBiaya = $totalBiaya + $harga;
}
error_reporting(0);
echo "<br>Pengiriman $kirim : Rp. ". number_format($hargapengiriman)."<br>";
$totalBiaya = $totalBiaya + $hargapengiriman;
$baris = count($_SESSION['daftarbelanja']);
$_SESSION['daftarbelanja'][$baris] = array(
	"barang" => $barang, "kirim" => $kirim, "alamat" => $alamat, "totalBiaya" => $totalBiaya
);
$daftarbarang = $_SESSION['daftarbarang'];
echo "<br>Total Pembayaran = Rp." . number_format($daftarbarang[0]['totalBiaya']);

?>
<br>
<br>
<a href="login2.php">Logout</a>