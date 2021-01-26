<?php
$files = $_FILES;
$file_name = $files['picture']['name'];
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
$file_name = md5($file_name . microtime());
$file_name .= ".$ext";

$file_type = $files['picture']['type'];
$tmp_name = $files['picture']['tmp_name'];

if (move_uploaded_file($tmp_name, "imgs/$file_name")) {
  echo 'Файл успешно загружен';
} else {
  echo 'Файл загрузить не удалось';
}

$filename = 'file.txt';
if (file_put_contents($filename, $file_name . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
  echo 'Данные записаны успешно';
}
$data_arr = file($filename, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
