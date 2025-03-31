<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
 
    }

    public function loginProcess()
    {
        helper('form');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            return redirect()->to('admin/dashboard');
        } else {
            session()->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
