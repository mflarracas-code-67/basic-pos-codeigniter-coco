<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data = [
            'users' => $userModel
                ->orderBy('id', 'ASC')
                ->findAll()
        ];

        return view('users/index', $data);
    }


    public function add()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $fullName = $this->request->getPost('full_name');

        if (!empty($username) && !empty($fullName)) {

            $userModel->insert([
                'username'   => $username,
                'full_name'  => $fullName,
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->to('/users');
    }


    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/users');
        }

        return view('users/edit', [
            'user' => $user
        ]);
    }


    public function update($id)
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $fullName = $this->request->getPost('full_name');

        if (!empty($username) && !empty($fullName)) {

            $userModel->update($id, [
                'username'  => $username,
                'full_name' => $fullName
            ]);
        }

        return redirect()->to('/users');
    }


    public function delete($id)
    {
        $userModel = new UserModel();

        $userModel->delete($id);

        return redirect()->to('/users');
    }
}