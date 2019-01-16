<?php 

class produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	       public function getLabel(){
	       	return "$this->penulis, $this->penerbit";
	       }

}

// $produk1 = new produk();
// $produk->judul = "One Piece";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahproperty = "wkwkwkw";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eichiro Oda";
$produk3->penerbit = "Shonen jump";
$produk3->harga = 20000;


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony computer";
$produk4->harga = 25000;


echo "komik :" . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();




 ?>