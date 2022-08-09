<?php

require_once 'app/init.php';

$produk1 = new Buku("PHP", "Sandika", "Gramedia", 20000, 100);
$produk2 = new Game("Mobile Legend", "Montoon", "Playstore", 300000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();