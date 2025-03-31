<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\InvoiceModel;
use App\Models\CustomerModel;
class Invoice extends BaseController
{
    public function dashboard()
    {
        $invoiceModel = new InvoiceModel();
        $data['invoices'] = $invoiceModel->getInvoicesWithCustomers();
        return view('invoice/dashboard', $data);
    }

    public function create()
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();
        return view('invoice/create', $data);
    }

    public function store()
    {
        $invoiceModel = new InvoiceModel();
        $data = [
            'customer_id' => $this->request->getPost('customer_id'),
            'date'        => $this->request->getPost('date'),
            'amount'      => $this->request->getPost('amount'),
            'status'      => $this->request->getPost('status'),
        ];

        $invoiceModel->insert($data);
        return redirect()->to('invoice/dashboard');
    }

    public function edit($id)
    {
        $invoiceModel = new InvoiceModel();
        $customerModel = new CustomerModel();

        $data['invoice'] = $invoiceModel->find($id);
        $data['customers'] = $customerModel->findAll();
        return view('invoice/edit', $data);
    }

    public function update($id)
    {
        $invoiceModel = new InvoiceModel();

        $data = [
            'customer_id' => $this->request->getPost('customer_id'),
            'date'        => $this->request->getPost('date'),
            'amount'      => $this->request->getPost('amount'),
            'status'      => $this->request->getPost('status'),
        ];

        $invoiceModel->update($id, $data);
        return redirect()->to('invoice/dashboard');
    }
}
