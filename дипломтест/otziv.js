const fileInput = document.getElementById('file-upload');
const fileNameLabel = document.getElementById('file-name');

fileInput.addEventListener('change', function () {
    const file = fileInput.files[0];
    if (file) {
        fileNameLabel.textContent = file.name;
    } else {
        fileNameLabel.textContent = 'Нет файла';
    }
});

function submitReview() {
    const name = document.getElementById('name').value;
    const reviewText = document.getElementById('review-text').value;
    const file = fileInput.files[0];

    if (!name || !reviewText) {
        alert('Пожалуйста, заполните имя и отзыв!');
        return;
    }

    alert(`Отзыв отправлен!\nИмя: ${name}\nОтзыв: ${reviewText}\nФото: ${file ? file.name : 'Нет файла'}`);
}