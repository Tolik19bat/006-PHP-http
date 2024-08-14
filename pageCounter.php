<?php
// Стартуем сессию
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Счётчик открытий</title>
</head>
<body>
    <h1>Счётчик открытий</h1>
    <?php
    // Проверяем, существует ли переменная сессии visit_count
    if (isset($_SESSION['visit_count'])) {
        echo "<p>Страница сессии была открыта " . $_SESSION['visit_count'] . " раз(а).</p>";
    } else {
        echo "<p>Информация о посещениях страницы не найдена.</p>";
    }
    ?>
</body>
</html>
