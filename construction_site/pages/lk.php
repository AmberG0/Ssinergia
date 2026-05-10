<?php 
require_once '../inc/functions.php';
require_login();

$user = current_user($pdo);

// Сохранение профиля
if (isset($_POST['save_profile'])) {
    $fio = trim($_POST['fio'] ?? $user['fio']);
    $phone = trim($_POST['phone'] ?? $user['phone']);
    $address = trim($_POST['address'] ?? $user['address']);
    
    // Для демо просто обновляем сессию
    $_SESSION['user_name'] = $fio;
    $success = "Профиль обновлён!";
}

// Демо-заказы
$demo_orders = [
    ['id' => 1, 'date' => '2025-01-15', 'total' => 45600, 'status' => 'delivered'],
    ['id' => 2, 'date' => '2025-01-20', 'total' => 12800, 'status' => 'in_progress'],
    ['id' => 3, 'date' => '2025-01-22', 'total' => 8900, 'status' => 'new'],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет — СтройМастер</title>
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php include("../blocks/modal.php"); ?>

    <div id="main_container">
        <?php include("../blocks/header.php"); ?>

        <section id="lk_page">
            <div class="lk_container">
                <div class="lk_profile">
                    <div class="lk_avatar">
                        <img src="../image/person.png" alt="Аватар">
                    </div>

                    <div class="avatar_buttons">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="save_profile" value="1">
                            <label class="btn_upload">
                                Загрузить фото
                                <input type="file" name="avatar" accept="image/*" onchange="this.form.submit()" style="display:none;">
                            </label>
                        </form>
                    </div>

                    <h2><?= escape($user['fio'] ?? 'Иван Иванов') ?></h2>
                    <p><?= escape($user['phone'] ?? '+7 (999) 000-00-00') ?></p>

                    <button class="btn_logout" onclick="location.href='logout.php'">
                        Выйти из аккаунта
                    </button>
                </div>

                <div class="lk_main">
                    <h1>Личный кабинет</h1>

                    <?php if (isset($success)): ?>
                        <div style="background:#d4edda;color:#155724;padding:15px;border-radius:12px;margin:20px 0;">
                            <?= $success ?>
                        </div>
                    <?php endif; ?>

                    <div class="lk_edit_form">
                        <h3>Редактировать данные</h3>
                        <form method="POST">
                            <input type="hidden" name="save_profile" value="1">
                            <div class="form_row">
                                <input type="text" name="fio" value="<?= escape($user['fio'] ?? 'Иван Иванов') ?>" placeholder="Ваше ФИО" required>
                                <input type="email" value="<?= escape($user['email'] ?? 'ivan@example.com') ?>" placeholder="Ваше почта" disabled>
                            </div>
                            <div class="form_row">
                                <input type="tel" name="phone" value="<?= escape($user['phone'] ?? '+7 (999) 000-00-00') ?>" placeholder="Ваш телефон">
                                <input type="text" name="address" value="<?= escape($user['address'] ?? 'Москва, ул. Строителей 15') ?>" placeholder="Ваш адрес доставки">
                            </div>
                            <button type="submit" class="btn_save">Сохранить изменения</button>
                        </form>
                    </div>

                    <div class="lk_orders">
                        <h3>Мои заказы</h3>
                        <?php if (empty($demo_orders)): ?>
                            <p style="text-align:center;color:#666;padding:40px;">У вас пока нет заказов</p>
                        <?php else: ?>
                            <table class="orders_table">
                                <thead>
                                    <tr><th>№</th><th>Дата</th><th>Сумма</th><th>Статус</th><th></th></tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($demo_orders as $o): ?>
                                        <tr>
                                            <td>#<?= $o['id'] ?></td>
                                            <td><?= date('d.m.Y', strtotime($o['date'])) ?></td>
                                            <td><?= number_format($o['total'], 0, '', ' ') ?> ₽</td>
                                            <td><span class="status <?= $o['status'] ?>"><?= $o['status'] ?></span></td>
                                            <td><a href="#" class="btn_details">Подробнее</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php include("../blocks/footer.php"); ?>
    </div>
</body>
</html>
