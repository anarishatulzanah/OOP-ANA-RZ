<?php 

class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlhalaman,
	       $waktuMain,
	       $tipe;

	 public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktuMain = 0, $tipe ) {
	   $this->judul = $judul;
	   $this->penulis = $penulis;
	   $this->penerbit = $penerbit;
	   $this->harga = $harga;
	   $this->jmlhalaman = $jmlhalaman;
	   $this->waktuMain = $waktuMain;
	   $this->tipe = $tipe;     
}

public function getLabel() {
	return "$this->penulis, $this->penerbit";
}

public function getInfoLengkap() {
	// komik : naruto | mashashikishimoto, shone jump (Rp. 30000) - 100 halaman.
	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	if( $this->tipe == "komik" ) {
		$str .= " - {$this->jmlhalaman} Halaman.";
	} else if( $this->tipe == "Game" ) {
		$str .= " ~ {$this->waktuMain} jam.";
	}

	return $str;
}
}


class CetakInfoProduk {
	public function cetak( produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$pruduk1 = new produk("naruto", "masashi kishimoto", "shonen jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony computer", 250000, 0, 50, "Game");



echo $pruduk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();




 ?>