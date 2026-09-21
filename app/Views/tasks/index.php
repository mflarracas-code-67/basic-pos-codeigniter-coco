<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task List</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <nav>

        <div class="logo">
            TASKS FOR TODAY
        </div>

        <div class="nav-links">

            <a href="<?= base_url('/') ?>">
                Today
            </a>

            <a href="<?= base_url('tasks') ?>">
                Task List
            </a>

            <a href="<?= base_url('profile') ?>">
                Profile
            </a>

            <a href="<?= base_url('about') ?>">
                About
            </a>

        </div>

    </nav>


    <div class="container">

        <h1 class="page-title">
            Full Task List
        </h1>

        <p class="page-description">
            List of all tasks in the system.
        </p>


        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>#</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Task Date</th>
                        <th>Created At</th>

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

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>