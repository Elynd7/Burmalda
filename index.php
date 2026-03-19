<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form action="action.php" method="POST">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required placeholder="Введите имя">

            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" required placeholder="name@example.ru">

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required placeholder="Введите пароль">

            <label for="confirm_password">Подтвердите пароль:</label>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="Повторите пароль">

            <label for="gender">Пол:</label>
            <select id="gender" name="gender" required>
                <option value="">Выберите пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
            </select>

            <div>
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Создавая учётную запись, вы соглашаетесь с нашим <a href="#">условием и конфиденциальностью</a>.</label>
            </div>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>

