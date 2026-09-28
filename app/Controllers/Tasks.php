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


    public function edit($id)
    {
        $taskModel = new TaskModel();

        $task = $taskModel->find($id);

        if (!$task) {
            return redirect()->to('/tasks');
        }

        $data = [
            'task' => $task
        ];

        return view('tasks/edit', $data);
    }


    public function update($id)
    {
        $taskModel = new TaskModel();

        $title = $this->request->getPost('title');
        $status = $this->request->getPost('status');

        if (!empty($title) && !empty($status)) {

            $taskModel->update($id, [
                'title'  => $title,
                'status' => $status
            ]);
        }

        return redirect()->to('/tasks');
    }


    public function delete($id)
    {
        $taskModel = new TaskModel();

        $task = $taskModel->find($id);

        if ($task) {
            $taskModel->delete($id);
        }

        return redirect()->to('/tasks');
    }
}