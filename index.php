<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СтройПрофи - Профессиональные строительные услуги</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <div class="container header-content">
        <div class="logo">
            <span class="logo-icon">🏗️</span>
            <div class="logo-text">
                <h1>СТРОЙ<span>ПРОФИ</span></h1>
                <p>Промышленное строительство</p>
            </div>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="active">Главная</a></li>
                <li><a href="services.php">Услуги</a></li>
                <li><a href="calculator.html">Калькулятор</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <a href="tel:+74950000000" class="phone-link">+7 (495) 000-00-00</a>
            <button class="btn btn-primary open-modal">Заказать звонок</button>
        </div>
        <button class="mobile-menu-btn">☰</button>
    </div>
</header>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>Комплексные строительные работы любой сложности</h1>
            <p>От фундамента до кровли. Гарантия качества по ГОСТ.</p>
            <div class="hero-buttons">
                <a href="services.php" class="btn btn-primary btn-lg">Смотреть услуги</a>
                <a href="calculator.html" class="btn btn-outline btn-lg">Рассчитать стоимость</a>
            </div>
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <h2 class="section-title">Почему выбирают нас</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>Работа по договору</h3>
                <p>Фиксируем сроки и стоимость в официальном договоре.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Гарантия 5 лет</h3>
                <p>Несем ответственность за все выполненные работы.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👷</div>
                <h3>Опытные бригады</h3>
                <p>Штат аттестованных специалистов со стажем от 7 лет.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚚</div>
                <h3>Своя техника</h3>
                <p>Парк современной спецтехники для любых задач.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Нужна консультация инженера?</h2>
        <p>Оставьте заявку на бесплатный выезд специалиста для замера и оценки.</p>
        <button class="btn btn-primary btn-lg open-modal">Вызвать замерщика</button>
    </div>
</section>

<footer class="site-footer">
    <div class="container footer-content">
        <div class="footer-col">
            <h4>СТРОЙПРОФИ</h4>
            <p>Лицензия СРО №12345 от 2020 г.</p>
            <p>© 2023 Все права защищены</p>
        </div>
        <div class="footer-col">
            <h4>Услуги</h4>
            <ul>
                <li><a href="services.php#foundation">Фундаментные работы</a></li>
                <li><a href="services.php#walls">Возведение стен</a></li>
                <li><a href="services.php#roof">Кровельные работы</a></li>
                <li><a href="services.php#finish">Отделка</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Контакты</h4>
            <p>г. Москва, ул. Строителей, д. 10</p>
            <p>Email: info@stroyprofi.ru</p>
            <p>Тел: +7 (495) 000-00-00</p>
        </div>
    </div>
</footer>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>Заказать звонок</h2>
        <form id="callbackForm">
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" id="name" name="name" required placeholder="Иван Иванов">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" name="phone" required placeholder="+7 (___) ___-__-__">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Отправить заявку</button>
        </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
