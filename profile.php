<?php
if (!isset($_COOKIE['User'])) {
    header('Location: login.php');
    exit;
}

$user = htmlspecialchars($_COOKIE['User']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>KUDRYAVTSEV</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="https://static.wikia.nocookie.net/azumanga/images/8/8a/America_Ya.jpg" alt="somethingfunny">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="hello">
                            Привет, <?php echo $user; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
