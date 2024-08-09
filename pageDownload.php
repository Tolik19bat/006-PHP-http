<?php
// Проверяем, передан ли параметр 'text' в URL
if (isset($_GET['text']) && !empty($_GET['text'])) {
    // Получаем текст из параметра
    $text = $_GET['text'];
} else {
    // Если параметр не передан, устанавливаем текст по умолчанию
    $text = "Текст не передан!";
}

// Определяем имя файла
$filename = "downloaded_text.txt";

// Создаём временный файл в памяти
$tempFile = tmpfile();
fwrite($tempFile, $text);
fseek($tempFile, 0);

// Получаем метаданные временного файла
$metaDatas = stream_get_meta_data($tempFile);
$tempFilename = $metaDatas['uri'];

// Устанавливаем заголовки для загрузки файла
header('Content-Description: File Transfer');//Описывает, что это передача файла.
header('Content-Type: application/octet-stream');// Это заставляет браузер воспринимать содержимое как файл для загрузки.
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');//Указывает, что содержимое должно быть загружено как вложение с заданным именем файла.
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');//Устанавливают параметры кэширования, чтобы обеспечить правильную загрузку файла.
header('Content-Length: ' . filesize($tempFilename));//Указывает размер файла в байтах для некоторых браузеров

// Читаем содержимое временного файла и отправляем его в ответ
readfile($tempFilename);

// Закрываем и удаляем временный файл
fclose($tempFile);

// Завершаем выполнение скрипта
exit();