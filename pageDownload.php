<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $filename = 'download.txt';

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $text;
    exit();
} else {
    echo "Текст не передан!";
}