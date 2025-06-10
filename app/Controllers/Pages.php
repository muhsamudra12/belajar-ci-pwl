<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Pages extends Controller
{

    protected $product;

    function __construct()
    {
        $this->product = new ProductModel();
    }    
    // 1. Halaman "Home"
    public function home()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('home' , $data);
    }

    // 2. Halaman "Produk"
    public function produk()
    {
        return view('produk');
    }

    // 3. Halaman "Keranjang"
    public function keranjang()
    {
        return view('keranjang');
    }
        
}
