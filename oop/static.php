<?php

// class contohStatik{
//     public static $angka = 0;

//     public static function helo(){
//         return "Helo ke ".self::$angka++."<br>";
//     }
// }


// echo contohStatik::helo();
// echo contohStatik::helo();
// echo contohStatik::helo();

class contoh{
    public static $angka=1;

    public function halo(){
        return "Halo ke ".self::$angka++."<br>";
    }
}

$obj1 = new contoh;
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();
echo "<hr>";

$obj1 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

//menggunakan static akan meneruskan angka
//tidak menggunakan static akan kembali ke angka 1 di tiap obj
