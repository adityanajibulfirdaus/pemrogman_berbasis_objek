
<?php

class Produk
{
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function __construct(
        string $kode,
        string $nama,
        float $harga,
        int $stok
    ) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanInfo(): void
    {
        echo "Produk: {$this->nama}" . PHP_EOL;
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . PHP_EOL;
        echo "Stok: {$this->stok}" . PHP_EOL;
        echo "Pajak: " . (self::PAJAK * 100) . "%" . PHP_EOL . PHP_EOL;

        $totalHarga = $this->harga + ($this->harga * self::PAJAK);

        echo "Total harga setelah pajak: Rp"
            . number_format($totalHarga, 0, ',', '.') . PHP_EOL;
    }
}

$produk = new Produk("P001", "Laptop", 10000000, 5);
$produk->tampilkanInfo();
