<?php
session_start();

// Простая авторизация для демо
if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Демо-логин (любой пароль подходит)
    if (!empty($email)) {
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'Иван Иванов';
        $_SESSION['user_email'] = $email;
        header('Location: lk.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход — СтройМастер</title>
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .login_page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .login_form {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login_form h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #FF6B00;
        }
        .login_form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login_form button {
            width: 100%;
            padding: 15px;
            background: #FF6B00;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
        .login_form button:hover {
            background: #e65c00;
        }
        .login_links {
            text-align: center;
            margin-top: 20px;
        }
        .login_links a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="main_container">
        <?php include("../blocks/header.php"); ?>

        <section class="login_page">
            <form method="POST" class="login_form">
                <h1>Вход в кабинет</h1>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit" name="login">Войти</button>
                <div class="login_links">
                    <p><a href="register.php">Нет аккаунта? Зарегистрироваться</a></p>
                    <p><a href="recover.php">Забыли пароль?</a></p>
                </div>
            </form>
        </section>

        <?php include("../blocks/footer.php"); ?>
    </div>
</body>
</html>
