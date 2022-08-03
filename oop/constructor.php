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

  $produk1 = new Produk("PHP", "Sandika", "Gramedia", 25000);
  $produk2 = new Produk("Mobile", "Leomord", "Moonton", 100000);

  echo "Buku : ".$produk1->getLabel();
  echo "<br>";
  echo "Game : ".$produk2->getLabel();
?>