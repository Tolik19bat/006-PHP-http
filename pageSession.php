<?php
session_start();

if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}

$_SESSION['visit_count']++;

if ($_SESSION['visit_count'] % 3 == 0) {
    header('Location: counter.php');
    exit();
}

echo "Страница была открыта " . $_SESSION['visit_count'] . " раз.";