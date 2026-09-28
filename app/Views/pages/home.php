<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tasks for Today</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

    <nav>

        <div class="logo">
            TASKS FOR TODAY
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

        <div class="hero">

            <h1>
                Tasks for Today
            </h1>

            <p>
                Here are your tasks scheduled for today.
            </p>

        </div>


        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>
                            #
                        </th>

                        <th>
                            Task
                        </th>

                        <th>
                            Status
                        </th>

                        <th>
                            Date
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php if (!empty($tasks)): ?>

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

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="4" style="text-align: center;">
                                No tasks scheduled for today.
                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>


        <div style="text-align: center; margin-top: 30px;">

            <a
                href="<?= base_url('customers') ?>"
                class="button"
            >
                View Customers
            </a>

            <a
                href="<?= base_url('tasks') ?>"
                class="button"
                style="margin-left: 15px;"
            >
                Manage Tasks
            </a>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>