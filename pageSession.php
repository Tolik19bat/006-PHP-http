<?php
session_start();
// Включаем отображение всех ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Стартуем сессию и проверяем, удачно ли
if (session_status() == PHP_SESSION_ACTIVE) {
    echo "Сессия успешно стартовала.<br>";
} else {
    echo "Проблема с запуском сессии.<br>";
}

// Проверяем, существует ли переменная сессии 'visit_count'
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}

// Увеличиваем значение переменной сессии 'visit_count' на 1
$_SESSION['visit_count']++;

// Выводим сообщение о количестве посещений
echo "Страница была открыта " . $_SESSION['visit_count'] . " раз.";

// Проверяем, кратно ли количество посещений трём
if ($_SESSION['visit_count'] % 3 == 0) {header('Location: pageCounter.php');// Если кратно, выполняем редирект на страницу 'pageCounter.php'
    exit();
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
