// Создаем массив объектов, каждый из которых описывает ресторан
const restaurants = [
    { name: 'Пиццерия', link: 'menu.php' },
    { name: 'Бургерная', link: 'menuburer.php' },
    { name: 'Суши', link: 'menusushi.php' }, 
    { name: 'Косметика', link: 'pomada.php' }, 
    { name: 'Лекарства', link: 'liki.php' } 
];

// Получаем элемент ввода поиска (input) из DOM по его id
const searchInput = document.getElementById('searchInput');

// Получаем контейнер, где будут отображаться кнопки ресторанов, из DOM по его id
const restaurantButtons = document.getElementById('restaurantButtons');

// Функция для фильтрации списка ресторанов и отображения результатов
function filterRestaurants() {
    // Получаем текст, введенный в поле поиска, и преобразуем его в нижний регистр для удобного сравнения
    const query = searchInput.value.toLowerCase();

    // Очищаем содержимое контейнера для кнопок ресторанов
    restaurantButtons.innerHTML = '';

    // Фильтруем рестораны, проверяя, содержит ли их название текст из поискового запроса
    restaurants
        .filter(restaurant => restaurant.name.toLowerCase().includes(query)) // Возвращаем только те рестораны, чьи названия соответствуют запросу
        .forEach(restaurant => {
            // Для каждого отфильтрованного ресторана создаем новую ссылку-кнопку
            const button = document.createElement('a'); // Создаем элемент <a> (ссылка)
            button.href = restaurant.link; // Устанавливаем ссылку на меню ресторана
            button.textContent = restaurant.name; // Устанавливаем текст кнопки равным названию ресторана
            button.className = 'restaurant-button'; // Добавляем класс для стилизации кнопки

            // Добавляем созданную ссылку-кнопку в контейнер для кнопок
            restaurantButtons.appendChild(button);
        });
}
