<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Home extends Controller
{

    protected $product;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }

    public function index(): string
    {
        //Menampilkan tampilan (view) bernama welcome_message.php
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('home' , $data);
    }
    // 1. Halaman "Halo"
    public function halo()
    {
        return view('halo_view');
    }

    // 2. Halaman "Halo + Nama"
    public function haloNama($nama)
    {
        $data['nama'] = $nama;
        return view('halonama', $data);
    }

    // 3. Halaman Kategori (alat tulis kantor)
    public function kategori()
    {
        $data['items'] = [
            ['nama' => 'Pensil', 'slug' => 'pensil'],
            ['nama' => 'Buku', 'slug' => 'buku'],
            ['nama' => 'Penghapus', 'slug' => 'penghapus'],
        ];
        return view('kategori_view', $data);
    }

    // 4. Halaman Produk
    public function barang($slug)
    {
        $barangData = [
            'pensil' => 'Pensil 2B berkualitas tinggi.',
            'buku' => 'Buku catatan dengan 200 halaman.',
            'penghapus' => 'Penghapus putih yang bersih dan tahan lama.'
        ];

        $data['barang'] = $barangData[$slug] ?? 'Barang tidak ditemukan';
        return view('barang_view', $data);
    }
}
