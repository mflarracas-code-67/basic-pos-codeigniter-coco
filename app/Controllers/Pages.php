<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function home()
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        return view('pages/about');
    }
}