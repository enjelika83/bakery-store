<?php
namespace App\Models;
use CodeIgniter\Model;

class TransactionItemModel extends Model {
    protected $table = 'transaction_items';
    protected $allowedFields = ['transaction_id', 'product_id', 'quantity', 'price'];
    public function getItemsWithProduct($transactionId)
{
    return $this->select('transaction_items.*, products.name as product_name')
                ->join('products', 'products.id = transaction_items.product_id')
                ->where('transaction_id', $transactionId)
                ->findAll();
}

}
