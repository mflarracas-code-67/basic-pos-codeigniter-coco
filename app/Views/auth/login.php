<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Login</title>

    <style>
        body {
            background: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-box {
            width: 350px;
            padding: 30px;
            border: 2px solid #ffd700;
            text-align: center;
        }

        h1 {
            color: #ffd700;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            margin-bottom: 15px;
            background: #111;
            color: #fff;
            border: 1px solid #ffd700;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #000;
            color: #ffd700;
            border: 2px solid #ffd700;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #ffd700;
            color: #000;
        }

        .error {
            color: #ff5555;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="login-box">

    <h1>POS Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="error">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('login') ?>" method="post">

        <?= csrf_field() ?>

        <input
            type="text"
            name="username"
            placeholder="Username"
            value="<?= old('username') ?>"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit">LOGIN</button>

    </form>

</div>

</body>
</html>