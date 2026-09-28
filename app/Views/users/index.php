<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>

        .user-form {
            margin-bottom: 30px;
        }

        .user-form input {
            padding: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .user-form button {
            padding: 10px 18px;
        }

        .user-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .user-actions a {
            display: inline-block;
        }

    </style>

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

        <h1 class="page-title">
            User Accounts
        </h1>

        <p class="page-description">
            Add and manage system users and staff members.
        </p>


        <!-- Add User Form -->

        <form
            action="<?= base_url('users/add') ?>"
            method="post"
            class="user-form"
        >

            <input
                type="text"
                name="username"
                placeholder="Username"
                required
            >

            <input
                type="text"
                name="full_name"
                placeholder="Full Name"
                required
            >

            <button type="submit">
                Add User
            </button>

        </form>


        <!-- User List -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Username</th>

                        <th>Full Name</th>

                        <th>Created At</th>

                        <th>Actions</th>

                    </tr>

                </thead>


                <tbody>

                    <?php if (!empty($users)): ?>

                        <?php $number = 1; ?>

                        <?php foreach ($users as $user): ?>

                            <tr>

                                <td>
                                    <?= $number++ ?>
                                </td>

                                <td>
                                    <?= esc($user['username']) ?>
                                </td>

                                <td>
                                    <?= esc($user['full_name']) ?>
                                </td>

                                <td>
                                    <?= esc($user['created_at']) ?>
                                </td>

                                <td>

                                    <div class="user-actions">

                                        <a
                                            href="<?= base_url('users/edit/' . $user['id']) ?>"
                                        >
                                            Edit
                                        </a>

                                        <a
                                            href="<?= base_url('users/delete/' . $user['id']) ?>"
                                            onclick="return confirm('Are you sure you want to delete this user?');"
                                        >
                                            Delete
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="5" style="text-align: center;">
                                No users found.
                            </td>

                        </tr>

                    <?php endif; ?>

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