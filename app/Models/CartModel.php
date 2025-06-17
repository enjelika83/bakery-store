<?php
namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $allowedFields = ['user_id', 'product_id', 'quantity'];

    public function getUserCart($userId)
    {
        return $this->select('cart.*, products.name, products.price')
                    ->join('products', 'products.id = cart.product_id')
                    ->where('cart.user_id', $userId)
                    ->findAll();
    }
}
