<?php
namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Product extends BaseController
{
    // Ini untuk halaman daftar semua produk
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll(); // Ambil semua produk
        return view('products/list', $data);   // Tampilkan ke view products/list.php
    }
}
