<?php
class Produk{
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0)
    {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    } 

    public function setJudul($judul){
        if (!is_string($judul)){
            throw new Exception("Judul harus String", 1);
            
        }
        $this->judul=$judul;
    }

    public function getJudul(){
        return "$this->judul";
    }

    public function setPenulis($penulis){
        $this->penulis=$penulis;
    }

    public function getPenulis(){
        return "$this->penulis";
    }   

    public function setPenerbit($penerbit){
        $this->judul=$penerbit;
    }

    public function getPenerbit(){
        return "$this->penerbit";
    } 

    public function setDiskon($diskon){
        $this->diskon=$diskon;
    }

    public function getDiskon(){
        return "$this->diskon";
    } 

    public function setHarga($harga){
        $this->harga=$harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. $this->harga) ";
        return $str;
    }
}

class Buku extends Produk{
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
    
        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk(){
        $str = "Buku : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $jamMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jamMain=0){
        
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jamMain = $jamMain;

    }

    public function getInfoProduk(){
        $str = "Game : ".parent::getInfoProduk()." ~ {$this->jamMain} Jam";
        return $str;
    }
}

class cetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk (Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Buku("PHP", "Sandika", "Gramedia", 20000, 100);
$produk2 = new Game("Mobile Legend", "Montoon", "Playstore", 300000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

