<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
            <a href="restaurants.php">Рестораны</a>
        </nav>
    </header>
    <section class="food-menu">
        <h1>Регистрация</h1>
        <form action="register_action.php" method="post" style="max-width: 400px; margin: auto;">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            
            <button class="btn-order" type="submit">Зарегистрироваться</button>
        </form>
    </section>
    <footer class="footer">
    © 2024 Cloud Delivery. Все права защищены.
    </footer>
</body>
</html>
