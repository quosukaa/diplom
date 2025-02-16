<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рестораны</title>
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
    <section class="food-menu">
        <h1>Наши рестораны</h1>
        <div class="food-grid">
            <div class="food-card">
                <h3>Пиццерия</h3>
                <button class="buton-add" onclick="location.href='menu.php?restaurant=pizza'">Посмотреть меню</button>
            </div>
            <div class="food-card">
                <h3>Суши Бар</h3>
                <button class="buton-add" onclick="location.href='menusushi.php?restaurant=sushi'">Посмотреть меню</button>
            </div>
            <div class="food-card">
                <h3>Бургерная</h3>
                <button class="buton-add" onclick="location.href='menuburer.php?restaurant=burgers'">Посмотреть меню</button>
            </div>
        </div>
    </section>
    <footer class="footer">
    © 2024 Cloud Delivery. Все права защищены.
    </footer>
</body>
</html>
