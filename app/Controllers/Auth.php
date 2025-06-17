<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController {
    public function login() {
        return view('auth/login');
    }

    public function loginProcess()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $userModel = new \App\Models\UserModel();
    $user = $userModel->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
        session()->set('isLoggedIn', true);
        session()->set('user_id', $user['id']); // WAJIB: untuk keranjang/transaksi
        session()->set('username', $user['username']);
        session()->set('name', $user['name']);

        return redirect()->to('/home');
    }

    return redirect()->back()->with('error', 'Username atau password salah.');
}



    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}


