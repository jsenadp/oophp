<?php
class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $jamMain;
    
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $jamMain=0,)
    {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlHalaman=$jmlHalaman;
        $this->jamMain=$jamMain;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    //Buku : PHP | Sandika, Gramedia (Rp. 20000) - 100 Halaman
    //Game : Mobile Legend | Montoon, Playstore (Rp. 300000) ~ 50 Jam
    public function getInfoProduk(){
        // $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. $this->harga) ";
        // if ($this->tipe == "Buku") {
        //     $str .="- {$this->jmlHalaman} Halaman.";
        // } else  {
        //     $str .="~ {$this->jamMain} Jam.";
        // }
        // return $str;
    }
}

class Buku extends Produk{
    public function getInfoProduk(){
        $str = "Buku : {$this->judul} | {$this->getLabel()} (Rp. $this->harga) - {$this->jmlHalaman}";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. $this->harga) ~ {$this->jamMain}";
        return $str;
    }
}

class cetakInfoProduk{
    public function cetak($produk){
        $str = "Judul : {$produk->judul} | Penulis : {$produk->penulis}, Penerbit : {$produk->penerbit}, Harga : {$produk->harga}";
        return $str;
    }
}

$produk1 = new Buku("PHP", "Sandika", "Gramedia", 20000, 100, 0);
$produk2 = new Game("Mobile Legend", "Montoon", "Playstore", 300000,0, 50);

//Buku : PHP | Sandika, Gramedia (Rp. 20000) - 100 Halaman
//Game : Mobile Legend | Montoon, Playstore (Rp. 300000) ~ 50 Jam
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
