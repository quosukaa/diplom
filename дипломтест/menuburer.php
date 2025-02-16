<?php
$menu = [
    'БигБекон' => ['price' => 500, 'image' => 'photos/burger1.jpg'],
    'Чизбургер' => ['price' => 600, 'image' => 'photos/burger2.jpg'],
    'Гамбургер' => ['price' => 700, 'image' => 'photos/burger3.jpg'],
    'Крабсбургер' => ['price' => 550, 'image' => 'photos/burger4.jpg'],
    'Мексиканский Бургер' => ['price' => 650, 'image' => 'photos/burger5.jpg'],
    'Вегетарианский Бургер' => ['price' => 480, 'image' => 'photos/burger6.jpg'],
    'Филе о фиш' => ['price' => 720, 'image' => 'photos/burger7.jpg'],
    'Двойной Бургер' => ['price' => 670, 'image' => 'photos/burger8.jpg'],
    'Острый Бургер' => ['price' => 500, 'image' => 'photos/burger9.jpg'],
    'Королевский бургер' => ['price' => 750, 'image' => 'photos/burger10.jpg'],
];
$drinks = [
    'Кока-Кола' => ['price' => 50, 'image' => 'photos/cola.png'],
    'Спрайт' => ['price' => 50, 'image' => 'photos/sprite.png'],
    'Фанта' => ['price' => 50, 'image' => 'photos/fanta.png'],
    'Минеральная вода' => ['price' => 30, 'image' => 'photos/water.png'],
    'Чай' => ['price' => 40, 'image' => 'photos/tea.jpg'],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню Бургерная</title>
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
            <a href="register.php">Регистрация</a>
            <div class="cart-button" id="cartButton">
                <img src="photos/cart-icon.png" alt="Корзина" class="cart-korzina">
                <div class="cart-container" id="cartContainer">
                    <div class="cart-header">Моя корзина</div>
                    <div id="cartItems"></div>
                    <div class="cart-total" id="cartTotal">Итого: 0 Грн.</div>
                    <button class="confirm-order-button" id="confirmOrderButton">Подтвердить заказ</button>

                </div>
            </div>
        </nav>
    </header>
    <div class="order-confirmation" id="orderConfirmation">
    <h2>Подтверждение заказа</h2>
    <p>Ваш заказ будет обработан. Спасибо!</p>
    <button id="closeConfirmation">Закрыть</button>
    </div>
    <main>
        <section class="food-menu">
            <h1>Меню Бургерной</h1>
            <div class="food-grid">
                <?php foreach ($menu as $item => $details): ?>
                    <div class="food-card">
                        <img src="<?= $details['image'] ?>" alt="<?= $item ?>">
                        <h3><?= $item ?></h3>
                        <p><?= $details['price'] ?> Грн.</p>
                        <button class="button-add" data-name="<?= $item ?>" data-price="<?= $details['price'] ?>">Добавить в корзину</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="drinks-menu">
            <h1>Напитки</h1>
            <div class="drinks-grid">
                <?php foreach ($drinks as $drink => $details): ?>
                    <div class="drink-card">
                        <img src="<?= $details['image'] ?>" alt="<?= $drink ?>">
                        <h3><?= $drink ?></h3>
                        <p><?= $details['price'] ?> Грн.</p>
                        <button class="button-add" data-name="<?= $drink ?>" data-price="<?= $details['price'] ?>">Добавить в корзину</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <div class="review-box">
        <h2>Оставьте свой отзыв</h2>
        
        <input type="text" placeholder="Ваше имя" id="name">
        
        <textarea placeholder="Напишите ваш отзыв..." id="review-text"></textarea>

        <label class="file-label" for="file-upload">
            Прикрепить фото
            <input type="file" id="file-upload" accept="image/*">
            <span class="file-name" id="file-name">Нет файла</span>
        </label>

        <button onclick="submitReview()">Отправить</button>
    </div>
    </main>

    <footer class="footer">
    © 2024 Cloud Delivery. Все права защищены.
    </footer>

    <script>
        const cartButton = document.getElementById('cartButton');
        const cartContainer = document.getElementById('cartContainer');
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');

        let cart = [];

        cartButton.addEventListener('click', () => {
            cartContainer.style.display = cartContainer.style.display === 'none' ? 'block' : 'none';
        });

        document.querySelectorAll('.button-add').forEach(button => {
            button.addEventListener('click', () => {
                const name = button.dataset.name;
                const price = parseInt(button.dataset.price);

                const item = cart.find(i => i.name === name);
                if (item) {
                    item.quantity++;
                } else {
                    cart.push({ name, price, quantity: 1 });
                }
                updateCart();
            });
        });

        function updateCart() {
            cartItems.innerHTML = '';
            let total = 0;

            cart.forEach((item, index) => {
                const itemTotal = item.price * item.quantity;
                total += itemTotal;

                cartItems.innerHTML += `
                    <div class="cart-item">
                        <span>${item.name}</span>
                        <div class="cart-controls">
                            <span>${itemTotal} Грн.</span>
                            <div class="button-group">
                                <button onclick="changeQuantity(${index}, 1)">+</button>
                                <span>${item.quantity}</span>
                                <button onclick="changeQuantity(${index}, -1)">-</button>
                            </div>
                        </div>
                    </div>
                `;
            });

            cartTotal.textContent = `Итого: ${total} Грн.`;
        }

        function changeQuantity(index, delta) {
            cart[index].quantity += delta;
            if (cart[index].quantity <= 0) {
                cart.splice(index, 1);
            }
            updateCart();
        }
        document.getElementById('confirmOrderButton').addEventListener('click', () => {
    document.getElementById('orderConfirmation').style.display = 'block';
});

document.getElementById('closeConfirmation').addEventListener('click', () => {
    document.getElementById('orderConfirmation').style.display = 'none';
});

    </script>
</body>
</html>
