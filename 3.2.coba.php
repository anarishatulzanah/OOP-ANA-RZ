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
// $produk->judul = "zombiee";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahproperty = "ckckckck";
// var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = "zombiee";
$produk3->penulis = "Junivers";
$produk3->penerbit = "Shonen jump";
$produk3->harga = "30000";


$produk3 = new Produk();
$produk3->judul = "Horor";
$produk3->penulis = "Junivers";
$produk3->penerbit = "Shonen jump";
$produk3->harga = "35000";

echo "buku novel :" . $produk3->getLabel();
echo "<br>";
echo "buku novel :" . $produk3->getLabel();


 ?>