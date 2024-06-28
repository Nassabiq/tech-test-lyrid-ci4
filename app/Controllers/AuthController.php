<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            return redirect()->to('/users');
        }
        return redirect()->back()->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
