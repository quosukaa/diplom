<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка еды</title>
    <link rel="stylesheet" href="style.css">
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
        <!-- Добавляем див для фона и затемняющего слоя -->
        <section class="background-container">
            <div class="overlay"></div>
            <div class="privet">
                <div class="privetstviye">
                    <div class="kraken">
                        <h1>Добро пожаловать в Kraken</h1>
                        <h2>нажмите на кнопку чтоб начать заказ</h2>
                        <button class="arrow-button">➔</button>
                    </div>
                </div>
                <button class="custom-button"><a href="vibor.php">Начать<br>заказ</a></button>
            </div>
        </section>

        <div class="gif-container">
            <img src="photos/25fa391f688ba0321756abb72759e3-unscreen.gif" alt="Gif" class="fixed-gif">
        </div>
    </main>

    <footer class="footer">
        © 2024 Kraken Delivery. Все права защищены.
    </footer>
    
    <script src="scriptmaskot.js"></script>

</body>

</html>
<style>
    /* Общие стили */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

header, footer {
    background-color: #333;
    color: white;
    padding: 15px 20px;
    text-align: center;
}

/* Стили для контейнера с фоном */
.background-container {
    position: relative;
    width: 100%;
    height: 100vh; /* Заполняет весь экран */
    background-image: url('photos/анимехи.jpg'); /* Укажите путь к своему фоновому изображению */
    background-size: cover;
    background-position: center;
}

/* Полупрозрачный темный слой */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный */
    z-index: 1; /* Чтобы.overlay был поверх фона */
}

/* Контент на фоне */
.privet {
    position: relative;
    z-index: 2; /* Содержимое будет поверх слоя .overlay */
    color: white;
    text-align: center;
    padding-top: 100px;
}

.custom-button a {
    color: white;
    text-decoration: none;
    font-size: 20px;
    background-color: #FF5733;
    padding: 10px 20px;
    border-radius: 5px;
    display: inline-block;
}

/* Стили для других элементов */
.gif-container {
    margin-top: 50px;
}

.fixed-gif {
    width: 100%;
    height: auto;
}

    </style>