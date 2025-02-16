<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
    <header class="header">
    <div class="logo-container">
        <img src="photos/kraken.jpg" alt="Logo" class="logo">
    </div>
        <nav class="nav">
        <a href="vibor.php">Главная</a>
            <a href="register.php">Регистрация</a>
        </nav>
    </header>

    <main>

    <div class="search-hero-container">

    
    <section class="search">
        <div class="naydite">
        <h2>Найдите ваш ресторан</h2>
        </div>
        <input 
            type="text" 
            id="searchInput" 
            placeholder="Введите название ресторана..." 
            oninput="filterRestaurants()">
        <div id="restaurantButtons"></div>
    </section>
    <div class="wave-vertical wave-left"></div>
    <div class="wave-vertical2 wave-left"></div>
    <div class="wave-vertical wave-right"></div>
    <div class="wave-vertical2 wave-right"></div>
    <section class="hero">
        <h2>Желаете что-то ещё?</h2>
        <div class="topic-container">
            <a href="restaurants.php" class="topic">
                <img src="photos/eda.jpg" alt="Изображение 2">
            </a>
            <a href="page2.html" class="topic">
                <img src="photos/liki.jpg" alt="Изображение 2">
            </a>
            <a href="page3.html" class="topic">
                <img src="photos/pomada.jpg" alt="Изображение 3">
            </a>
        </div>
    </section>
</div>  

<div class="unique-custom-block">
    <div class="unique-custom-background">
        <div class="wave"></div>
        <div class="wave2"></div>
        <div class="wave3"></div>
        <div class="wave4"></div>
        <div class="unique-overlay"></div>
        <div class="unique-content">
            <h2>Желаете стать нашим партнёром?</h2>
            <div class="unique-buttons">
                <div class="unique-button-container">
                    <button class="unique-button"><a href="form-deliver" class="nazva-doljnosti">Курьер</a></button>
                    <div class="unique-image">
                        <img src="photos/deliver.jpg" alt="Изображение 1">
                    </div>
                </div>
                <div class="unique-button-container">
                    <button class="unique-button"><a href="form-deliver" class="nazva-doljnosti">Ресторан</a></button>
                    <div class="unique-image">
                        <img src="photos/povar.jpg" alt="Изображение 2">
                    </div>
                </div>
                <div class="unique-button-container">
                    <button class="unique-button"><a href="form-deliver" class="nazva-doljnosti">Оператор</a></button>
                    <div class="unique-image">
                        <img src="photos/operator.jpg" alt="Изображение 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </section>
        <section class="content-section">
        <img src="photos/cloud.png" class="background-image" style="top: 150%; left: 12%; width: 120px;">
    <img src="photos/cloud.png" class="background-image" style="top: 170%; left: 80%; width: 140px;">
    <img src="photos/cloud.png" class="background-image" style="top: 220%; left: 85%; width: 110px;">
    <img src="photos/cloud.png" class="background-image" style="top: 230%; left: 10%; width: 130px;">
    <img src="photos/cloud.png" class="background-image" style="top: 190%; left: 12%; width: 80px;">

        <!-- Блок с описанием услуг -->
        <div class="info-block">
            <h3>Наши услуги</h3>
            <p>Мы предлагаем быструю и качественную доставку еды прямо к вашему порогу. Заказывайте из любимых ресторанов и наслаждайтесь вкусной едой без лишних хлопот.</p>
        </div>

        <!-- Блок с контактной информацией -->
        <div class="info-block">
            <h3>Контакты</h3>
            <p>Наши менеджеры всегда готовы ответить на ваши вопросы:</p>
            <ul>
                <li><strong>Телефон:</strong> +38 (098) 495 75 76</li>
                <li><strong>Email:</strong> support@qusouka.com</li>
            </ul>
        </div>
        <div class="white-stripe"></div>
        <section class="our">
    <div class="mascot-container">
        <!-- Слайдер с отзывами -->
        <div class="reviews-slider">
            <h2>Что говорят наши клиенты</h2>
            <div class="slider">
                <div class="slide">
                    <p>"Отличная доставка! Все всегда горячее и вовремя!"</p>
                    <p>- Иван П.</p>
                </div>
                <div class="slide">
                    <p>"Очень вкусно! Пицца - просто объедение!"</p>
                    <p>- Ольга М.</p>
                </div>
                <div class="slide">
                    <p>"Быстро, удобно и очень вкусно! Спасибо!"</p>
                    <p>- Дмитрий К.</p>
                </div>
            </div>
            <button class="prev">❮</button>
            <button class="next">❯</button>
        </div>
        </section>
        <div class="white-stripe"></div>
        <br>
        <!-- Блок с описанием компании -->
        <div class="info-block">
            <h3>О нас</h3>
            <p>Kraken Delivery — это сервис, который делает ваш выбор еды простым и удобным. Мы доставляем только свежие и качественные продукты прямо к вам домой или в офис. Проводите меньше времени в поисках еды и больше наслаждайтесь!</p>
        </div>

        <!-- Блок с частыми вопросами -->
        <div class="info-block">
            <h3>Часто задаваемые вопросы</h3>
            <ul>
                <li><strong>Как заказать еду?</strong> Просто выберите ресторан и блюда, добавьте их в корзину и оформите заказ!</li>
                <li><strong>Какие способы оплаты доступны?</strong> Мы принимаем наличные, карты и оплату через мобильные приложения.</li>
                <li><strong>Можно ли заказать еду с доставкой на завтра?</strong> Да, вы можете выбрать удобное время для доставки.</li>
            </ul>
        </div>



    </section>
</div>

    </main>

    <footer class="footer">
    © 2024 Cloud Delivery. Все права защищены.
    </footer>
    <script src="vibor.js"></script>
    <script src="reviews.js"></script>
</body>
</html>
