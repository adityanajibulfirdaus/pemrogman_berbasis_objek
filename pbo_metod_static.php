<?php

class Produk {
    
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Method constructor untuk inisialisasi awal (opsional tapi disarankan)
    public function __construct(string $kode, string $nama, int $harga, int $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method untuk menghitung nilai pajak dari harga
    public function hitungJumlahPajak(): float {
        return $this->harga * self::PAJAK;
    }

    // Method untuk menghitung total harga (harga asli + pajak)
    public function hitungTotalHarga(): float {
        return $this->harga + $this->hitungJumlahPajak();
    }

    // Method untuk menampilkan semua informasi produk
    public function cetakInfo(): void {
        $persentasePajak = self::PAJAK * 100;
        
        echo "Produk: " . $this->nama . "<br>";
        echo "Kode: " . $this->kode . "<br>";
        // Menggunakan number_format agar harga lebih rapi (opsional)
        echo "Harga: Rp." . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak: " . $persentasePajak . "%" . "<br>";
        echo "Total harga setelah pajak: Rp." . number_format($this->hitungTotalHarga(), 0, ',', '.') . "<br>";
    }
}

// Object
// Menginput ke property sekarang lebih ringkas menggunakan constructor
$produk = new Produk('P001', 'Laptop', 10000000, 5);

// Menampilkan hasil cukup dengan memanggil satu method
$produk->cetakInfo();

?>