<?php
class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $jamMain,
           $tipe;
    
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $jamMain=0, $tipe="tipe")
    {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlHalaman=$jmlHalaman;
        $this->jamMain=$jamMain;
        $this->tipe=$tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    //Buku : PHP | Sandika, Gramedia (Rp. 20000) - 100 Halaman
    //Game : Mobile Legend | Montoon, Playstore (Rp. 300000) ~ 50 Jam
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. $this->harga) ";
        if ($this->tipe == "Buku") {
            $str .="- {$this->jmlHalaman} Halaman.";
        } else {
            $str .="~ {$this->jamMain} Jam.";
        }
        return $str;
    }
}

class cetakInfoProduk{
    public function cetak($produk){
        $str = "Judul : {$produk->judul} | Penulis : {$produk->penulis}, Penerbit : {$produk->penerbit}, Harga : {$produk->harga}";
        return $str;
    }
}

$produk1 = new Produk("PHP", "Sandika", "Gramedia", 20000, 100, 0, "Buku");
$produk2 = new Produk("Mobile Legend", "Montoon", "Playstore", 300000,0, 50, "Game");

//Buku : PHP | Sandika, Gramedia (Rp. 20000) - 100 Halaman
//Game : Mobile Legend | Montoon, Playstore (Rp. 300000) ~ 50 Jam
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
