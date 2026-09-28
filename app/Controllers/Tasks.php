<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];

        return view('tasks/index', $data);
    }


    public function add()
    {
        $taskModel = new TaskModel();

        $title = $this->request->getPost('title');

        if (!empty($title)) {

            $taskModel->insert([
                'title'      => $title,
                'status'     => 'pending',
                'task_date'  => date('Y-m-d'),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->to('/tasks');
    }
}