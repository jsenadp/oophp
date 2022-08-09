<?php
class Game extends Produk implements infoProduk{
    public $jamMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jamMain=0){
        
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jamMain = $jamMain;

    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. $this->harga) ";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ".$this->getInfo()." ~ {$this->jamMain} Jam";
        return $str;
    }
}