<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты - СтройПрофи</title>
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
                <li><a href="index.php">Главная</a></li>
                <li><a href="services.php">Услуги</a></li>
                <li><a href="calculator.html">Калькулятор</a></li>
                <li><a href="contacts.php" class="active">Контакты</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <a href="tel:+74950000000" class="phone-link">+7 (495) 000-00-00</a>
            <button class="btn btn-primary open-modal">Заказать звонок</button>
        </div>
        <button class="mobile-menu-btn">☰</button>
    </div>
</header>

<main class="page-content">
    <section class="page-header">
        <div class="container">
            <h1>Контакты</h1>
            <p>Свяжитесь с нами любым удобным способом</p>
        </div>
    </section>

    <section class="contacts-section">
        <div class="container">
            <div class="contacts-grid">
                <div class="contact-info">
                    <h2>Наши контакты</h2>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h3>Адрес офиса</h3>
                            <p>г. Москва, ул. Строителей, д. 10, офис 205</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h3>Телефоны</h3>
                            <p><a href="tel:+74950000000">+7 (495) 000-00-00</a> — отдел продаж</p>
                            <p><a href="tel:+74950000001">+7 (495) 000-00-01</a> — технический отдел</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p><a href="mailto:info@stroyprofi.ru">info@stroyprofi.ru</a></p>
                            <p><a href="mailto:zakaz@stroyprofi.ru">zakaz@stroyprofi.ru</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">⏰</div>
                        <div class="contact-details">
                            <h3>Режим работы</h3>
                            <p>Пн-Пт: 9:00 - 18:00</p>
                            <p>Сб: 10:00 - 15:00</p>
                            <p>Вс: выходной</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <h3>Мы в соцсетях</h3>
                        <div class="social-buttons">
                            <a href="#" class="social-btn">Telegram</a>
                            <a href="#" class="social-btn">WhatsApp</a>
                            <a href="#" class="social-btn">VKontakte</a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <h2>Напишите нам</h2>
                    <form id="contactForm" class="contact-form">
                        <div class="form-group">
                            <label for="name">Ваше имя *</label>
                            <input type="text" id="name" name="name" required placeholder="Иван Иванов">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required placeholder="example@mail.ru">
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" name="phone" placeholder="+7 (___) ___-__-__">
                        </div>
                        <div class="form-group">
                            <label for="subject">Тема обращения</label>
                            <select id="subject" name="subject">
                                <option value="">Выберите тему</option>
                                <option value="consultation">Консультация</option>
                                <option value="estimate">Расчет стоимости</option>
                                <option value="cooperation">Сотрудничество</option>
                                <option value="complaint">Жалоба</option>
                                <option value="other">Другое</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Опишите ваш вопрос..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить сообщение</button>
                        <p class="form-note">Нажимаю кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <h2>Как нас найти</h2>
            <div class="map-placeholder">
                <div class="map-content">
                    <p>📍 г. Москва, ул. Строителей, д. 10</p>
                    <p>Здесь будет интерактивная карта (Яндекс.Карты или Google Maps)</p>
                    <button class="btn btn-outline">Открыть карту</button>
                </div>
            </div>
        </div>
    </section>
</main>

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
