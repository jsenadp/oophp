<?php
  class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul",
                                $penulis = "penulis",
                                $penerbit = "penerbit",
                                $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
  }

  class CetakInfoProduk{
    public function cetak($produk){
        $str = "Judul : {$produk->judul} | Penulis : {$produk->penulis}, Produk : {$produk->penerbit}, Harga (Rp.{$produk->harga})";
        return $str;
    }
  }

  $produk1 = new Produk("PHP", "Sandika", "Gramedia", 25000);
  $produk2 = new Produk("Mobile", "Leomord", "Moonton", 100000);

  echo "Buku : ".$produk1->getLabel();
  echo "<br>";
  echo "Game : ".$produk2->getLabel();
  echo "<br>";

  $infoProduk1 = new CetakInfoProduk();
  echo $infoProduk1->cetak($produk1);
?>