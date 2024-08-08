<?php
session_start();

if (isset($_SESSION['visit_count'])) {
    echo "Третья страница была открыта " . $_SESSION['visit_count'] . " раз.";
} else {
    echo "Данные о посещениях третьей страницы отсутствуют.";
}