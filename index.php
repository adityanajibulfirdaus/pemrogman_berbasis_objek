<?php

require('./pbo_metod_static.php');

use pbo\Marketplace\Produk;

//object
$produk = new produk('P001','laptop','10000000','5');

//output
echo "produk: ".$produk -> nama;
echo "<br/>";

echo "harga: ".$produk -> harga;
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.".$produk -> total();