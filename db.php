<?php
$servername = "db";
$username = "root";
$password = "qwe";
$dbName = "first_db";

// Подключаемся к серверу MySQL
$link = mysqli_connect($servername, $username, $password);
if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Создаем базу данных, если её нет
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать БД";
}
mysqli_close($link);

// Подключаемся к базе данных
$link = mysqli_connect($servername, $username, $password, $dbName);
if (!$link) {
    die("Ошибка подключения к базе: " . mysqli_connect_error());
}

// Создаем таблицу users
$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(20) NOT NULL
)";
if(!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Users: " . mysqli_error($link);
}

// Создаем таблицу posts
$sql = "CREATE TABLE IF NOT EXISTS posts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(1000) NOT NULL
)";
if(!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Posts";
}

// Проверяем наличие колонки image_path в posts, добавляем если нет
$result = mysqli_query($link, "SHOW COLUMNS FROM posts LIKE 'image_path'");
if (mysqli_num_rows($result) == 0) {
    $sql = "ALTER TABLE posts ADD COLUMN image_path VARCHAR(255) NULL";
    if (!mysqli_query($link, $sql)) {
        echo "Ошибка при добавлении поля image_path: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
