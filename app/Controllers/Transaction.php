<?php
namespace App\Controllers;
use App\Models\TransactionModel;

class Transaction extends BaseController {
   public function index() {
    if (!session()->get('user_id')) {
        return redirect()->to('/login');
    }

    $transactionModel = new TransactionModel();
    $data['transactions'] = $transactionModel
        ->where('user_id', session()->get('user_id'))
        ->orderBy('created_at', 'DESC')
        ->findAll();

    return view('transaction/index', $data); 
}

    public function finish() {
    if (!session()->get('user_id')) return redirect()->to('/login');

    try {
        $transactionModel = new TransactionModel();

       
        $latestTransaction = $transactionModel
            ->where('user_id', session()->get('user_id'))
            ->orderBy('created_at', 'DESC')
            ->first();

        if ($latestTransaction) {
            $db = \Config\Database::connect();

          
            $builder = $db->table('transaction_items');
            $builder->where('transaction_id !=', $latestTransaction['id']);
            $builder->delete();

            $transactionModel
                ->where('user_id', session()->get('user_id'))
                ->where('id !=', $latestTransaction['id'])
                ->delete();
        }

        $allTransactions = $transactionModel
            ->where('user_id', session()->get('user_id'))
            ->orderBy('created_at', 'DESC')
            ->findAll();

        $data['transaction'] = $latestTransaction;
        $data['transactions'] = $allTransactions;

        session()->destroy(); 
        return view('transactions/finish', $data);

    } catch (\Throwable $e) {
        echo "<h3>Terjadi Kesalahan:</h3>";
        echo "<pre>" . $e->getMessage() . "</pre>";
    }
}


}


