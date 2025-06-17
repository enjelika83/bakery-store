<?php
namespace App\Models;
use CodeIgniter\Model;

class TransactionModel extends Model {
    protected $table = 'transactions';
    protected $allowedFields = ['user_id', 'total'];

    protected $useTimestamps = true; 
    protected $createdField  = 'created_at';
}
