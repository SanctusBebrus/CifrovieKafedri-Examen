<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUDRYAVTSEV</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="https://static.wikia.nocookie.net/azumanga/images/8/8a/America_Ya.jpg"
                 alt="somethingfunny">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="hello">
                        Привет, <?php echo $_COOKIE['User']; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
require_once('./db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'qwe', 'first_db');

    mysqli_close($link);

?>