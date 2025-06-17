<?php
namespace App\Controllers;

use App\Models\CartModel;
use App\Models\TransactionModel;
use App\Models\TransactionItemModel;

class Cart extends BaseController
{
    public function index()
    {
        if (!session()->get('user_id')) return redirect()->to('/login');

        $cartModel = new CartModel();
        $items = $cartModel->getUserCart(session()->get('user_id'));

        return view('cart/index', ['cartItems' => $items]);
    }

    public function add()
    {
        if (!session()->get('user_id')) return redirect()->to('/login');

        $cartModel = new CartModel();
        $cartModel->save([
            'user_id'    => session()->get('user_id'),
            'product_id' => $this->request->getPost('product_id'),
            'quantity'   => $this->request->getPost('quantity') ?? 1
        ]);

        return redirect()->to('/cart');
    }

    public function showCheckoutForm()
    {
        if (!session()->get('user_id')) return redirect()->to('/login');

        $cartModel = new CartModel();
        $items = $cartModel->getUserCart(session()->get('user_id'));

        if (empty($items)) {
            return redirect()->to('/product')->with('error', 'Keranjang kosong.');
        }

        return view('cart/checkout', ['items' => $items]);
    }

    public function processCheckout()
{
    try {
        if (!session()->get('user_id')) return redirect()->to('/login');

        $cartModel = new \App\Models\CartModel();
        $items = $cartModel->getUserCart(session()->get('user_id'));

        if (empty($items)) {
            return redirect()->to('/product')->with('error', 'Keranjang kosong.');
        }

        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $trxModel = new \App\Models\TransactionModel();
        $trxModel->save([
            'user_id' => session()->get('user_id'),
            'total'   => $total
        ]);

        $trxId = $trxModel->getInsertID();

        $trxItemModel = new \App\Models\TransactionItemModel();
        foreach ($items as $item) {
            $trxItemModel->save([
                'transaction_id' => $trxId,
                'product_id'     => $item['product_id'],
                'quantity'       => $item['quantity'],
                'price'          => $item['price']
            ]);
        }

        $cartModel->where('user_id', session()->get('user_id'))->delete();

        return redirect()->to('/transactions/finish');
    } catch (\Throwable $e) {
        echo "<h3>Error Occurred:</h3>";
        echo "<pre>" . $e->getMessage() . "</pre>";
    }
}
}
