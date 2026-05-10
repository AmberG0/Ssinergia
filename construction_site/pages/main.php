<?php 
require_once '../inc/functions.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>СтройМастер — Главная</title>
</head>
<body>
    <?php include("../blocks/modal.php"); ?>

    <div id="main_container">
        <!-- Шапка -->
        <?php include("../blocks/header.php"); ?>

        <!-- Преимущества -->
        <div id="main_content">
            <div class="pluses">
                <img src="../image/truck.png" alt="Доставка">
                <h1>Доставка по РФ</h1>
                <p>Строй материалы в любой регион</p>
            </div>
            <div class="pluses">
                <img src="../image/shield.png" alt="Гарантия">
                <h1>Гарантия качества</h1>
                <p>Сертификаты на все материалы</p>
            </div>
            <div class="pluses">
                <img src="../image/tags.png" alt="Цены">
                <h1>Лучшие цены</h1>
                <p>Скидки для строителей и оптовиков</p>
            </div>
        </div>
 
        <!-- Категории -->
        <div id="main_categories">
            <h1>Каталог услуг и товаров</h1>
            <div id="set_categories">
                <a href="catalog.php?cat=materialy" class="card_categories">
                    <img src="../image/flange.png" alt="Стройматериалы">
                    <h1>СТРОЙМАТЕРИАЛЫ</h1>
                    <p>500+ товаров</p>
                </a>
                <a href="catalog.php?cat=instrumenty" class="card_categories">
                    <img src="../uploads/pipe.png" alt="Инструменты">
                    <h1>ИНСТРУМЕНТЫ</h1>
                    <p>300+ товаров</p>
                </a>
                <a href="catalog.php?cat=uslugi" class="card_categories">
                    <img src="../image/flange.png" alt="Услуги">
                    <h1>УСЛУГИ</h1>
                    <p>50+ услуг</p>
                </a>
            </div>
        </div>

        <!-- Популярные товары -->
        <div id="main_product">
    <?php
    // Демо-данные для примера
    $demo_products = [
        ['id' => 1, 'name' => 'Цемент М500, 50кг', 'price' => 450, 'image' => 'cement.png'],
        ['id' => 2, 'name' => 'Кирпич красный, шт', 'price' => 25, 'image' => 'brick.png'],
        ['id' => 3, 'name' => 'Доска обрезная 50х150', 'price' => 850, 'image' => 'wood.png'],
        ['id' => 4, 'name' => 'Штукатурка гипсовая, 30кг', 'price' => 380, 'image' => 'plaster.png'],
        ['id' => 5, 'name' => 'Перфоратор профессиональный', 'price' => 12500, 'image' => 'drill.png'],
        ['id' => 6, 'name' => 'Краска фасадная, 10л', 'price' => 2800, 'image' => 'paint.png'],
    ];
    
    foreach ($demo_products as $p): ?>
        
            <form method="POST" class="card_product">
                
                    <input type="hidden" name="product_id" value="<?= $p['id'] ?>">
                    <div class="product_first">
                        <a href="product.php?id=<?= $p['id']?>">
                        <img src="../image/flange.png" alt="<?= escape($p['name']) ?>">
                        </a> 
                    </div>
                    <div class="product_second">
                        <p><?= escape($p['name']) ?></p>
                    </div>
                    <div class="product_last">
                        <div class="rating">
                            <img src="../image/star.svg" alt="">
                            <h1>4.8</h1>
                        </div>
                        <h1><?= number_format($p['price'], 0, '', ' ') ?> ₽</h1>
                    </div>
                    <button type="submit" name="add_to_cart" class="add_to_cart_btn">
                        В корзину
                    </button>
                
            </form> 
       
    <?php endforeach; ?>
</div>

        <!-- Добавление в корзину -->
        <?php
        if (isset($_POST['add_to_cart'])) {
            $id = (int)($_POST['product_id'] ?? 0);
            if ($id > 0) {
                add_to_cart($id);
                echo '<script>openModal("Успешно", "Товар добавлен в корзину!");</script>';
            }
        }
        ?>

        <!-- Подвал -->
        <?php include("../blocks/footer.php"); ?>
    </div>

    <script src="../js/modal.js"></script>
</body>
</html>
