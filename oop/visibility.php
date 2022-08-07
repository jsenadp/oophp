
<?php
class Produk{
    public $judul,
           $penulis,
           $penerbit;

    private $harga;
    protected $diskon = 0;
    
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0)
    {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    //Buku : PHP | Sandika, Gramedia (Rp. 20000) - 100 Halaman
    //Game : Mobile Legend | Montoon, Playstore (Rp. 300000) ~ 50 Jam
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. $this->harga) ";
        // if ($this->tipe == "Buku") {
        //     $str .="- {$this->jmlHalaman} Halaman.";
        // } else  {
        //     $str .="~ {$this->jamMain} Jam.";
        // }
        return $str;
    }

    public function setDiskon($diskon){
        $this->diskon=$diskon;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Buku extends Produk{
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
    
        $this->jmlHalaman = $jmlHalaman;

    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
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
    public function cetak($produk){
        $str = "Judul : {$produk->judul} | Penulis : {$produk->penulis}, Penerbit : {$produk->penerbit}, Harga : {$produk->harga}";
        return $str;
    }
}

$produk1 = new Buku("PHP", "Sandika", "Gramedia", 20000, 100);
$produk2 = new Game("Mobile Legend", "Montoon", "Playstore", 300000, 50);

//Buku : PHP | Sandika, Gramedia (Rp. 20000) - 100 Halaman
//Game : Mobile Legend | Montoon, Playstore (Rp. 300000) ~ 50 Jam
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(50);
echo "Diskon Buku " .$produk1->getHarga();
