<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - СтройПрофи</title>
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
                <li><a href="services.php" class="active">Услуги</a></li>
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

<main class="page-content">
    <section class="page-header">
        <div class="container">
            <h1>Наши услуги</h1>
            <p>Полный цикл строительных работ от проекта до сдачи объекта</p>
        </div>
    </section>

    <section id="foundation" class="services-section">
        <div class="container">
            <h2 class="service-title">🏗️ Фундаментные работы</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>Ленточный фундамент</h3>
                    <p>Монолитные и сборные ленточные фундаменты для домов и промышленных объектов.</p>
                    <ul class="service-specs">
                        <li>Глубина: до 3 м</li>
                        <li>Ширина: 200-800 мм</li>
                        <li>Марка бетона: М200-М400</li>
                    </ul>
                    <div class="service-price">от 4 500 ₽/м³</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Плитный фундамент</h3>
                    <p>Универсальное решение для сложных грунтов. Равномерное распределение нагрузки.</p>
                    <ul class="service-specs">
                        <li>Толщина: 200-400 мм</li>
                        <li>Армирование: двойное</li>
                        <li>Гидроизоляция: включена</li>
                    </ul>
                    <div class="service-price">от 5 200 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Свайный фундамент</h3>
                    <p>Винтовые и забивные сваи. Идеально для неровного рельефа и слабых грунтов.</p>
                    <ul class="service-specs">
                        <li>Диаметр сваи: 57-133 мм</li>
                        <li>Длина: до 6 м</li>
                        <li>Несущая способность: до 10 т</li>
                    </ul>
                    <div class="service-price">от 3 800 ₽/шт</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
            </div>
        </div>
    </section>

    <section id="walls" class="services-section alt-bg">
        <div class="container">
            <h2 class="service-title">🧱 Возведение стен</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>Кирпичная кладка</h3>
                    <p>Кладка из керамического, силикатного и облицовочного кирпича.</p>
                    <ul class="service-specs">
                        <li>Толщина стены: 1-2.5 кирпича</li>
                        <li>Марка кирпича: М100-М200</li>
                        <li>Раствор: цементно-песчаный</li>
                    </ul>
                    <div class="service-price">от 2 800 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Газобетонные блоки</h3>
                    <p>Быстрое возведение стен с высокими теплоизоляционными свойствами.</p>
                    <ul class="service-specs">
                        <li>Размер блока: 600×300×200 мм</li>
                        <li>Плотность: D400-D600</li>
                        <li>Клей-пена или раствор</li>
                    </ul>
                    <div class="service-price">от 2 200 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Монолитные стены</h3>
                    <p>Бетонные стены высокой прочности для промышленных объектов.</p>
                    <ul class="service-specs">
                        <li>Толщина: 200-500 мм</li>
                        <li>Бетон: М300-М500</li>
                        <li>Опалубка: металлическая</li>
                    </ul>
                    <div class="service-price">от 6 500 ₽/м³</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
            </div>
        </div>
    </section>

    <section id="roof" class="services-section">
        <div class="container">
            <h2 class="service-title">🏠 Кровельные работы</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>Металлочерепица</h3>
                    <p>Долговечное и эстетичное покрытие для скатных крыш.</p>
                    <ul class="service-specs">
                        <li>Толщина металла: 0.4-0.5 мм</li>
                        <li>Покрытие: полимерное</li>
                        <li>Гарантия: 25 лет</li>
                    </ul>
                    <div class="service-price">от 1 800 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Профнастил</h3>
                    <p>Экономичное решение для промышленных и хозяйственных построек.</p>
                    <ul class="service-specs">
                        <li>Марка: НС35-НС75</li>
                        <li>Цинкование: 140 г/м²</li>
                        <li>Монтаж: саморезами</li>
                    </ul>
                    <div class="service-price">от 1 200 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Мягкая кровля</h3>
                    <p>Битумная черепица для крыш сложной формы с отличной шумоизоляцией.</p>
                    <ul class="service-specs">
                        <li>Тип: гибкая черепица</li>
                        <li>Основа: стеклохолст</li>
                        <li>Срок службы: 50+ лет</li>
                    </ul>
                    <div class="service-price">от 2 500 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
            </div>
        </div>
    </section>

    <section id="finish" class="services-section alt-bg">
        <div class="container">
            <h2 class="service-title">🎨 Отделочные работы</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>Штукатурка стен</h3>
                    <p>Выравнивание стен машинным и ручным способом.</p>
                    <ul class="service-specs">
                        <li>Слой: до 50 мм</li>
                        <li>Состав: гипсовый/цементный</li>
                        <li>Маяки: металлические</li>
                    </ul>
                    <div class="service-price">от 450 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Стяжка пола</h3>
                    <p>Полусухая и мокрая стяжка для идеальной ровности пола.</p>
                    <ul class="service-specs">
                        <li>Толщина: 30-100 мм</li>
                        <li>Армирование: фибра/сетка</li>
                        <li>Заливка: механизированная</li>
                    </ul>
                    <div class="service-price">от 600 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
                <div class="service-card">
                    <h3>Малярные работы</h3>
                    <p>Шпаклевка, грунтовка и покраска поверхностей.</p>
                    <ul class="service-specs">
                        <li>Шпаклевка: 2-3 слоя</li>
                        <li>Краска: водоэмульсионная</li>
                        <li>Финиш: матовый/глянец</li>
                    </ul>
                    <div class="service-price">от 350 ₽/м²</div>
                    <button class="btn btn-outline btn-sm open-modal">Заказать</button>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Рассчитайте стоимость вашего проекта</h2>
            <p>Используйте наш онлайн-калькулятор или закажите бесплатный замер.</p>
            <div class="cta-buttons">
                <a href="calculator.html" class="btn btn-primary btn-lg">Открыть калькулятор</a>
                <button class="btn btn-outline btn-lg open-modal">Заказать замер</button>
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
                <li><a href="#foundation">Фундаментные работы</a></li>
                <li><a href="#walls">Возведение стен</a></li>
                <li><a href="#roof">Кровельные работы</a></li>
                <li><a href="#finish">Отделка</a></li>
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
        <h2>Заказать услугу</h2>
        <form id="callbackForm">
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" id="name" name="name" required placeholder="Иван Иванов">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" name="phone" required placeholder="+7 (___) ___-__-__">
            </div>
            <div class="form-group">
                <label for="service">Интересующая услуга</label>
                <select id="service" name="service">
                    <option value="">Выберите услугу</option>
                    <option value="foundation">Фундаментные работы</option>
                    <option value="walls">Возведение стен</option>
                    <option value="roof">Кровельные работы</option>
                    <option value="finish">Отделочные работы</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Отправить заявку</button>
        </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
