<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $terms = isset($_POST['terms']) ? true : false;

    if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($gender)) {
        die("Все поля обязательны для заполнения!");
    }

    if ($password !== $confirm_password) {
        die("Пароли не совпадают!");
    }

    if (!$terms) {
        die("Необходимо согласиться с условиями!");
    }

    echo "Данные получены:<br>";
    echo "Имя: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Пароль: " . $password . "<br>";
    echo "Пол: " . $gender . "<br>";
    echo "Согласие с условиями: " . ($terms ? "Да" : "Нет") . "<br>";

    echo "Регистрация прошла успешно!";
} else {
    echo "Форма не отправлена методом POST.";
}
?>

