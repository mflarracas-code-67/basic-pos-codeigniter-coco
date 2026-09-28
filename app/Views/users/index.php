<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>

        .user-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .user-actions a {
            display: inline-block;
        }

        .avatar {
            width: 50px;
            height: 50px;

            object-fit: cover;

            border: 2px solid #ffd400;

            border-radius: 50%;
        }

        .add-user-container {
            text-align: center;
            margin-bottom: 30px;
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
            User Accounts
        </h1>

        <p class="page-description">
            List of system users and staff members.
        </p>


        <!-- Add New User Button -->

        <div class="add-user-container">

            <a
                href="<?= base_url('users/new') ?>"
                class="button"
            >
                Add New User
            </a>

        </div>


        <!-- User List -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>
                            #
                        </th>

                        <th>
                            Avatar
                        </th>

                        <th>
                            Username
                        </th>

                        <th>
                            Full Name
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Created At
                        </th>

                        <th>
                            Actions
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php $number = 1; ?>

                    <?php foreach ($users as $user): ?>

                        <tr>

                            <td>
                                <?= $number++ ?>
                            </td>


                            <!-- Avatar -->

                            <td>

                                <?php if (!empty($user['avatar'])): ?>

                                    <img
                                        src="<?= base_url('uploads/avatars/' . esc($user['avatar'])) ?>"
                                        alt="User Avatar"
                                        class="avatar"
                                    >

                                <?php else: ?>

                                    <img
                                        src="<?= base_url('assets/images/default-avatar.png') ?>"
                                        alt="Default Avatar"
                                        class="avatar"
                                    >

                                <?php endif; ?>

                            </td>


                            <!-- Username -->

                            <td>
                                <?= esc($user['username']) ?>
                            </td>


                            <!-- Full Name -->

                            <td>
                                <?= esc($user['full_name']) ?>
                            </td>


                            <!-- Email -->

                            <td>
                                <?= esc($user['email']) ?>
                            </td>


                            <!-- Created At -->

                            <td>
                                <?= esc($user['created_at']) ?>
                            </td>


                            <!-- Actions -->

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