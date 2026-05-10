<?php 
require_once '../inc/functions.php'; 

if (isset($_POST['add_to_cart'])) {
    $id = (int)($_POST['product_id'] ?? 0);
    if ($id > 0) {
        add_to_cart($id);
        echo '<script>alert("Товар добавлен в корзину!");</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог — СтройМастер</title>
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php include("../blocks/modal.php"); ?>
    <div id="main_container">
        <?php include("../blocks/header.php"); ?>

        <section id="catalog_page">
            <h1 class="catalog_title">Строительные товары и услуги</h1>

            <div class="catalog_wrapper">
                <!-- Левая панель фильтров -->
                <div class="filters_sidebar">
                    <h3>Фильтры</h3>
                    <div class="filter_group">
                        <h4>Категория</h4>
                        <label><input type="checkbox"> Стройматериалы</label>
                        <label><input type="checkbox"> Инструменты</label>
                        <label><input type="checkbox"> Услуги</label>
                    </div>
                    <div class="filter_group">
                        <h4>Производитель</h4>
                        <label><input type="checkbox"> Knauf</label>
                        <label><input type="checkbox"> Makita</label>
                        <label><input type="checkbox"> Bosch</label>
                    </div>
                    <div class="filter_group">
                        <h4>Цена</h4>
                        <input type="range" min="0" max="100000" value="50000">
                        <p>от 0 ₽ до 100 000 ₽</p>
                    </div>
                    <button class="btn_apply_filters">Применить</button>
                </div>

                <!-- Основная сетка товаров -->
                <div class="catalog_products">
                    <?php 
                    $demo_products = [
                        ['id' => 1, 'name' => 'Цемент М500, 50кг', 'price' => 450],
                        ['id' => 2, 'name' => 'Кирпич красный, шт', 'price' => 25],
                        ['id' => 3, 'name' => 'Доска обрезная 50х150', 'price' => 850],
                        ['id' => 4, 'name' => 'Штукатурка гипсовая, 30кг', 'price' => 380],
                        ['id' => 5, 'name' => 'Перфоратор Makita', 'price' => 12500],
                        ['id' => 6, 'name' => 'Краска фасадная, 10л', 'price' => 2800],
                        ['id' => 7, 'name' => 'Укладка плитки, м²', 'price' => 1200],
                        ['id' => 8, 'name' => 'Монтаж гипсокартона, м²', 'price' => 450],
                    ];
                    
                    foreach ($demo_products as $p): ?>
                        <form method="POST" class="card_product">
                            <input type="hidden" name="product_id" value="<?= $p['id'] ?>">
                            <div class="product_first">
                                <img src="../image/flange.png" alt="<?= escape($p['name']) ?>">
                            </div>
                            <div class="product_second">
                                <p><?= escape($p['name']) ?></p>
                            </div>
                            <div class="product_last">
                                <div class="rating">
                                    <img src="../image/star.svg" alt="">
                                    <h1>4.7</h1>
                                </div>
                                <h1><?= number_format($p['price'], 0, '', ' ') ?> ₽</h1>
                            </div>
                            <button type="submit" name="add_to_cart" class="add_to_cart_btn">
                                В корзину
                            </button>
                        </form>
                    <?php endforeach; ?>
                   

                    <!-- Пагинация -->
                    <div class="pagination">
                        <button>«</button>
                        <button class="active">1</button>
                        <button>2</button>
                        <button>3</button>
                        <button>...</button>
                        <button>10</button>
                        <button>»</button>
                    </div>
                </div>
            </div>
        </section>

        <?php include("../blocks/footer.php"); ?>
    </div>
</body>
</html>
