<?php 
require_once 'App/init.php';
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50);

$CetakProduk = new CetakInfoProduk();
$CetakProduk->tambahProduk( $produk1 );
$CetakProduk->tambahProduk( $produk2 );
echo $CetakProduk->cetak();

echo "<hr>";

new Coba();
 ?>