<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
	
	       	$this->judul = $judul;
	       	$this->penulis = $penulis;
	       	$this->penerbit = $penerbit;
	       	$this->harga = $harga;
	       }


	       public function getLabel() {
	       	return "$this->penulis, $this->penerbit";
	       }

}


// $produk1 = new Produk();
// $Produk1->judul = "One Piece";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "ana junivers";
// var_dump($produk2);

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen jump", 20000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony computer", 25000);

$produk3 = new Produk("Gintama");


echo "komik : " .$produk1->getLabel();
echo "<br>";
echo "game :" . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
 