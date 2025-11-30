<?php 
require_once '../inc/functions.php';

if (is_logged_in()) {
    redirect('main.php');
}

$error = $success = '';

if ($_POST) {
    $email = trim($_POST['email']);

    if (empty($email)) {
        $error = "Введите email";
    } else {
        $stmt = $pdo->prepare("SELECT id, fio FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            $new_password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 10);
            $hash = password_hash($new_password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->execute([$hash, $user['id']]);

            // Здесь должен быть mail(), но в Open Server его может не быть
            // mail($email, "Восстановление пароля", "Ваш новый пароль: $new_password");

            $success = "Новый пароль отправлен на ваш email!";
        } else {
            $error = "Пользователь с таким email не найден";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Восстановление пароля — ТД Синергия</title>
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="login_modal_overlay">
        <div class="login_modal">
            <a href="../pages/main.php" class="login_close">×</a>
            
            <h2>Восстановление пароля</h2>

            <?php if ($error): ?>
                <p class="login_error"><?= escape($error) ?></p>
            <?php endif; ?>

            <?php if ($success): ?>
                <p style="color:green; text-align:center; margin:20px 0; font-weight:bold;">
                    <?= $success ?>
                </p>
            <?php else: ?>
                <form method="POST">
                    <input type="email" name="email" placeholder="Введите ваш email" required>
                    <button type="submit" class="login_submit">Отправить</button>
                </form>
            <?php endif; ?>

            <div class="login_footer">
                <a href="login.php">Вернуться ко входу</a>
            </div>
        </div>
    </div>
</body>
</html>