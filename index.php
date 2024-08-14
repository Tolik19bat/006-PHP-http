<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <ul>
        <li><a href="pageErrorNotFound.php">Страница 404</a></li>
        <li><a href="pageDownload.php?text=Привет, мир!">Скачать файл</a></li>
        <li><a href="pageSession.php">Страница сессии</a></li>
        <li><a href="pageCounter.php">Счётчик открытий</a></li>
    </ul>
</body>
</html>