<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Task</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

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
            Edit Task
        </h1>

        <p class="page-description">
            Update the task name and status.
        </p>


        <form action="<?= base_url('tasks/update/' . $task['id']) ?>" method="post">

            <div>

                <label for="title">
                    Task Name
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="<?= esc($task['title']) ?>"
                    required
                >

            </div>


            <div>

                <label for="status">
                    Status
                </label>

                <select id="status" name="status" required>

                    <option
                        value="pending"
                        <?= $task['status'] === 'pending' ? 'selected' : '' ?>
                    >
                        Pending
                    </option>

                    <option
                        value="completed"
                        <?= $task['status'] === 'completed' ? 'selected' : '' ?>
                    >
                        Completed
                    </option>

                </select>

            </div>


            <button type="submit">
                Update Task
            </button>

            <a href="<?= base_url('tasks') ?>">
                Cancel
            </a>

        </form>

    </div>


    <footer>

        <p>
            &copy; 2026 POS System
        </p>

    </footer>

</body>

</html>