<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Sarah Lopez',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Daniel Santos',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Angela Reyes',
                'role' => 'Staff'
            ]
        ];

        $data = [
            'users' => $users
        ];

        return view('users/index', $data);
    }
}