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
        <!-- Форма регистрации -->
        <div class="registration-form">
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

        <!-- Калькулятор -->
        <div class="calculator">
            <h3>Калькулятор</h3>
            <input type="number" class="calc-input" id="num1" name="num1" placeholder="Первое число" required>
            <input type="number" class="calc-input" id="num2" name="num2" placeholder="Второе число" required>
            <div style="display: flex; flex-wrap: wrap;">
                <button class="calc-button" onclick="calculate('add')">+</button>
                <button class="calc-button" onclick="calculate('subtract')">-</button>
                <button class="calc-button" onclick="calculate('multiply')">×</button>
                <button class="calc-button" onclick="calculate('divide')">÷</button>
            </div>
            <div class="result-display" id="result"></div>
        </div>
    </div>

    <script>
        function calculate(operation) {
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            let result;

            if (isNaN(num1) || isNaN(num2)) {
                document.getElementById('result').innerText = 'Пожалуйста, введите два числа!';
                return;
            }

            switch(operation) {
                case 'add':
                    result = num1 + num2;
                    break;
                case 'subtract':
                    result = num1 - num2;
                    break;
                case 'multiply':
                    result = num1 * num2;
                    break;
                case 'divide':
                    if (num2 === 0) {
                        result = 'Ошибка: деление на ноль невозможно!';
                    } else {
                        result = num1 / num2;
                    }
                    break;
                default:
                    result = 'Неизвестная операция';
            }

            document.getElementById('result').innerText = result;
        }
    </script>
</body>
</html>

