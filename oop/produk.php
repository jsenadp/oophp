<?php
  class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
      return "$this->judul, $this->harga";
    }
  }

  $produk1 = new Produk();
  $produk1->judul = "OOP PHP";
  $produk1->penulis = "JDP";
  $produk1->penerbit = "Gramedia";
  $produk1->harga = 250000;

  // echo "Buku : $produk1->judul, $produk1->penulis";
  // echo "<br>";
  // echo $produk1->getLabel();

  $produk2 = new Produk();
  $produk2->judul = "Mobile Legend";
  $produk2->penulis = "Khaleed";
  $produk2->penerbit = "Moonton";
  $produk2->harga = 100000;

  echo "Buku : ".$produk1->getLabel();
  echo "<br>";
  echo "Game : ".$produk2->getLabel();
?>