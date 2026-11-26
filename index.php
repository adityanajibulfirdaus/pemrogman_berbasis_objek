<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\produk;

// object
$produk = new Produk ();

$produk -> setKode('P0001')
        -> setNama('Laptop')
        -> setHarga(10000000)
        -> setStok(5);

//hasil
echo "Produk: ".$produk->getNama();
echo "<br/>";

echo "Harga: ".$produk->getHarga();
echo "<br/>";

echo "Stok: ".$produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak()."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$produk->total();