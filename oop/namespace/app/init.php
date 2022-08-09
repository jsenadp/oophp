<?php

// require_once 'produk/infoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/buku.php';
// require_once 'produk/game.php';
// require_once 'produk/cetakinfoProduk.php';
// require_once 'produk/user.php';

// require_once 'service/user.php';

spl_autoload_register(function($class){
	// app\produk\user.php = ["app", "produk", "user"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__.'/produk/'.$class.'.php';
}); 

spl_autoload_register(function($class){
	// app\service\user.php = ["app", "produk", "user"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__.'/service/'.$class.'.php';
}); 