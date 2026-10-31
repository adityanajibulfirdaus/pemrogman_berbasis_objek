<?php

class Produk{

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
   

    //constant
    public const PAJAK= 0.11;
      public function pajak() {
        return self::PAJAK * 100; //11%
    }

    public function total (){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}


//object 
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak() ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.". $produk->total();