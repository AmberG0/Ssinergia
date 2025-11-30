<?php 
require_once '../inc/functions.php';

$items = get_cart_items($pdo);
$total = get_cart_total($pdo);

if (empty($items)) {
    header("Location: basket.php");
    exit;
}

// Обработка заказа
if (isset($_POST['checkout'])) {
    $fio = trim($_POST['fio']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $comment = trim($_POST['comment'] ?? '');

    if (empty($fio) || empty($email) || empty($phone) || empty($address)) {
        $error = "Заполните все обязательные поля!";
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO orders (user_id, total, status, delivery_method, delivery_address, comment, created_at) 
                                   VALUES (?, ?, 'new', 'courier', ?, ?, NOW())");
            $stmt->execute([is_logged_in() ? $_SESSION['user_id'] : null, $total, $address, $comment]);
            $order_id = $pdo->lastInsertId();

            $stmt = $pdo->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
            foreach ($items as $item) {
                $stmt->execute([$order_id, $item['id'], $item['quantity'], $item['price']]);
            }

            clear_cart();
            header("Location: lk.php?success=Заказ+$order_id+оформлен!");
            exit;
        } catch (Exception $e) {
            $error = "Ошибка оформления заказа";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа — ТД Синергия</title>
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .checkout_big_card {
            max-width: 1100px;
            margin: 40px auto;
            background: white;
            border-radius: var(--radius-big);
            padding: 50px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
        }
        .checkout_left, .checkout_right {
            flex: 1;
            min-width: 350px;
        }
        .checkout_block {
            margin-bottom: 40px;
        }
        .checkout_block h2 {
            font-size: 26px;
            margin-bottom: 25px;
        }
        .checkout_input, .checkout_select {
            width: 100%;
            padding: 18px 24px;
            margin-bottom: 20px;
            border: none;
            background: #f5f5f5;
            border-radius: var(--radius-big);
            font-size: 18px;
        }
        .delivery_options {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        .delivery_option {
            padding: 14px 30px;
            background: #f0f0f0;
            border-radius: var(--radius-big);
            cursor: pointer;
        }
        .delivery_option.active {
            background: var(--color-main);
            color: white;
        }
        .delivery_option input { display: none; }
        .checkout_map {
            width: 100%;
            border-radius: var(--radius-big);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }
        .payment_option {
            padding: 14px 30px;
            background: #f0f0f0;
            border-radius: var(--radius-big);
            margin-bottom: 30px;
            cursor: pointer;
        }
        .payment_option.active {
            background: var(--color-main);
            color: white;
        }
        .payment_option input { display: none; }
        .payment_form {
            background: #f0f8ff;
            padding: 30px;
            border-radius: var(--radius-big);
        }
        .card_number, .card_date, .card_cvv, .card_name {
            width: 100%;
            padding: 18px;
            border-radius: 12px;
            border: 1px solid #ddd;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .card_row {
            display: flex;
            gap: 20px;
        }
        .card_date, .card_cvv {
            flex: 1;
        }
        .checkout_agreement {
            margin: 30px 0;
        }
        .checkout_agreement label {
            display: block;
            margin: 15px 0;
            font-size: 16px;
        }
        .delivery_illustration {
            width: 200px;
            margin: 0 auto 30px;
            display: block;
        }
        .btn_checkout_final {
            width: 100%;
            padding: 22px;
            background: var(--color-main);
            color: white;
            border: none;
            border-radius: var(--radius-big);
            font-size: 22px;
            font-weight: bold;
            cursor: pointer;
        }
        @media (max-width: 992px) {
            .checkout_big_card {
                padding: 30px;
            }
            .checkout_map {
                order: -1;
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>
    <?php include("../blocks/header.php"); ?>

    <div id="main_container">
        <h1 class="page_title">Оформление</h1>

        <?php if (isset($error)): ?>
            <div style="background:#ffebee;padding:20px;border-radius:20px;margin:20px 0;color:#c62828;">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <!-- ВСЯ ФОРМА ВНУТРИ <form> -->
        <form method="POST">
            <div class="checkout_big_card">
                <!-- Левый блок -->
                <div class="checkout_left">
                    <div class="checkout_block">
                        <h2>Данные пользователя</h2>
                        <input type="text" class="checkout_input" name="fio" value="<?= is_logged_in() ? escape($_SESSION['user_name']) : '' ?>" placeholder="ФИО авторизованного пользователя" required>
                        <input type="email" class="checkout_input" name="email" value="" placeholder="Почта пользователя" required>
                        <input type="tel" class="checkout_input" name="phone" placeholder="Телефон" required>
                    </div>

                    <div class="checkout_block">
                        <h2>Выберите способ получения</h2>
                        <div class="delivery_options">
                            <label class="delivery_option active"><input type="radio" name="delivery" value="pickup" checked> Пункт выдачи</label>
                            <label class="delivery_option"><input type="radio" name="delivery" value="courier"> Курьером</label>
                        </div>
                        <select class="checkout_select" name="address">
                            <option value="">Адрес получения</option>
                            <option>Москва, Тверская 7 (ПВЗ СДЭК)</option>
                            <option>Москва, Арбат 12 (ПВЗ Boxberry)</option>
                        </select>
                    </div>

                    <div class="checkout_block">
                        <h2>Выберите способ оплаты</h2>
                        <label class="payment_option active"><input type="radio" name="payment" value="online" checked> Онлайн</label>

                        <div class="payment_form">
                            <input type="text" class="card_number" placeholder="0000 0000 0000 0000">
                            <div class="card_row">
                                <input type="text" class="card_date" placeholder="01 / 22">
                                <input type="text" class="card_cvv" placeholder="CVV">
                            </div>
                            <input type="text" class="card_name" placeholder="OLEG FOMIN">
                        </div>
                    </div>
                </div>

                <!-- Правый блок -->
                <div class="checkout_right">
                    <img src="../image/map_mock.png" alt="Карта" class="checkout_map">

                    <div class="checkout_summary">
                        <img src="../image/delivery_man.png" alt="Доставка" class="delivery_illustration">

                        <div class="checkout_agreement">
                            <label><input type="checkbox" required> Согласие на обработку персональных данных</label>
                            <label><input type="checkbox" required> Пользовательское соглашение</label>
                        </div>

                        <button type="submit" name="checkout" class="btn_checkout_final">
                            Оформить заказ
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php include("../blocks/footer.php"); ?>
</body>
</html>