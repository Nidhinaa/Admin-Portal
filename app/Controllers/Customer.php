<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CustomerModel;
class Customer extends BaseController
{
    public function dashboard()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        return view('customer/dashboard', $data);
    }

    public function create()
    {
        return view('customer/create');
    }

    public function store()
    {
        $model = new CustomerModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
        ];
        $model->save($data);
        return redirect()->to('customer/dashboard');
    }

    public function edit($id)
    {
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);
        return view('customer/edit', $data);
    }

    public function update($id)
    {
        $model = new CustomerModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
        ];
        $model->update($id, $data);
        return redirect()->to('customer/dashboard');
    }
}
