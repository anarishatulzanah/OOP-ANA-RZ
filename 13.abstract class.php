<?php 

abstract class Produk {
	private $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $diskon = 0;

	       public function ___construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
	       	$this->judul = $judul;
	       	$this->penulis = $penulis;
	       	$this->penerbit = $penerbit;
	       	$this->harga = $harga;
	       }

	       public function setJudul($judul) {
	       	$this->judul = $judul;
	       }

	       public function getJudul() {
	       	return $ths->judul;
	       }

	       public function setPenulis($penulis) {
	       	$this->penulis = $penulis;
	       }

	       public function getPenulis() {
	       	return $this->penulis;
	       }

	       public function setPenerbit($penerbit) {
	       	$this->penerbit = $penerbit;
	       }

	       public function getPenerbit() {
	       	return $this->penerbit;
	       }

	       public function setDiskon($diskon) {
	       	$this->diskon = $diskon;
	       }

	       public function getDiskon() {
	       	return $this->diskon;
	       }

	       public function setHarga($harga) {
	       	$this->harga = $harga;	      
           }

          public function getHarga() {
          	return $this->harga - ($this->harga * $this->diskon / 100);
          }

          public function getLabel() {
          	return "$this->penulis, $this->penerbit";
          }

          abstract public function getInfoProduk();
          public function getInfo() {
          	$str = "{$this->judul} | {$this->getLabel()} (Rp. {this->harga})";

          	return $str;
          }

      }

      class komik extends produk {
      	public $jumlahHalaman;

      	public function ___construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0 ) {

      		parent::___construct($judul, $penulis, $penerbit, $harga);

      		$this->jumlahHalaman = $jumlahHalaman;

      	}

      	public function getInfoProduk() {
      		$str = "komik : " . $this->getInfo() ." - {$this->jumlahHalaman} halaman.";
      		return $str;
      	}
      }

      class game extends produk {
      	public $waktuMain;

      	public function ___construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$waktuMain = 0) {
      		parent::___construct($judul, $penulis, $penerbit, $harga);

      		$this->waktuMain = $waktuMain;
      	}

      	public function getInfoProduk() {
      		$str = "game :" . $this->getInfo() . "~ {$this->waktuMain} jam.";
      		return $str;
      	}
      }



      class CetakInfoProduk {
      	public $daftarProduk = array();

      	public function tambahProduk ( produk $produk) {
      		$this->daftarProduk[] = $produk;
      	}


      	public function cetak () {
      		$str = "DAFTAR PRODUK : <br>";

          foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
          }

          return $str;
      	}
      }



      $produk1 = new komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);
      $produk2 = new game("uncharted", "neil druckman", "sony computer", 250000,50);

      $cetakProduk = new CetakInfoProduk();
      $cetakProduk->tambahProduk($produk1 );
      $cetakProduk->tambahProduk($produk2 );
      echo $cetakProduk->cetak();



 ?>