<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data = [
            'customers' => $customerModel
                ->orderBy('id', 'ASC')
                ->findAll()
        ];

        return view('customers/index', $data);
    }


    public function add()
    {
        $customerModel = new CustomerModel();

        $fullName = $this->request->getPost('full_name');
        $email    = $this->request->getPost('email');
        $phone    = $this->request->getPost('phone');

        if (!empty($fullName) && !empty($email)) {

            $customerModel->insert([
                'full_name'  => $fullName,
                'email'      => $email,
                'phone'      => $phone,
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->to('/customers');
    }


    public function edit($id)
    {
        $customerModel = new CustomerModel();

        $customer = $customerModel->find($id);

        if (!$customer) {
            return redirect()->to('/customers');
        }

        return view('customers/edit', [
            'customer' => $customer
        ]);
    }


    public function update($id)
    {
        $customerModel = new CustomerModel();

        $fullName = $this->request->getPost('full_name');
        $email    = $this->request->getPost('email');
        $phone    = $this->request->getPost('phone');

        if (!empty($fullName) && !empty($email)) {

            $customerModel->update($id, [
                'full_name' => $fullName,
                'email'     => $email,
                'phone'     => $phone
            ]);
        }

        return redirect()->to('/customers');
    }


    public function delete($id)
    {
        $customerModel = new CustomerModel();

        $customerModel->delete($id);

        return redirect()->to('/customers');
    }
}