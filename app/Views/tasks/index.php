<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task List</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>

        .task-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .task-actions a {
            display: inline-block;
        }

        .task-form {
            margin-bottom: 30px;
        }

        .task-form input {
            padding: 10px;
            margin-right: 10px;
        }

        .task-form button {
            padding: 10px 18px;
        }

    </style>

</head>

<body>

    <nav>

        <div class="logo">
            POS SYSTEM
        </div>

        <div class="nav-links">

            <a href="<?= base_url('/') ?>">
                Home
            </a>

            <a href="<?= base_url('about') ?>">
                About
            </a>

            <a href="<?= base_url('customers') ?>">
                Customers
            </a>

            <a href="<?= base_url('users') ?>">
                Users
            </a>

            <a href="<?= base_url('tasks') ?>">
                Tasks
            </a>

        </div>

    </nav>


    <div class="container">

        <h1 class="page-title">
            Task Management
        </h1>

        <p class="page-description">
            Add, view, and manage tasks in the system.
        </p>


        <!-- Add Task Form -->

        <form action="<?= base_url('tasks/add') ?>" method="post" class="task-form">

            <input
                type="text"
                name="title"
                placeholder="Enter a task"
                required
            >

            <button type="submit">
                Add Task
            </button>

        </form>


        <!-- Task List -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Task</th>

                        <th>Status</th>

                        <th>Task Date</th>

                        <th>Created At</th>

                        <th>Actions</th>

                    </tr>

                </thead>


                <tbody>

                    <?php $number = 1; ?>

                    <?php foreach ($tasks as $task): ?>

                        <tr>

                            <td>
                                <?= $number++ ?>
                            </td>

                            <td>
                                <?= esc($task['title']) ?>
                            </td>

                            <td>
                                <?= esc($task['status']) ?>
                            </td>

                            <td>
                                <?= esc($task['task_date']) ?>
                            </td>

                            <td>
                                <?= esc($task['created_at']) ?>
                            </td>

                            <td>

                                <div class="task-actions">

                                    <a href="<?= base_url('tasks/edit/' . $task['id']) ?>">
                                        Edit
                                    </a>

                                    <a
                                        href="<?= base_url('tasks/delete/' . $task['id']) ?>"
                                        onclick="return confirm('Are you sure you want to delete this task?');"
                                    >
                                        Delete
                                    </a>

                                </div>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 POS System
        </p>

    </footer>

</body>

</html>