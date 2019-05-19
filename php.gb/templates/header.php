<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style/login.css" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>


<nav class="navbar navbar-dark bg-dark">


    <?if (!$_SESSION['auth']): ?>
    <div>
    <span class="navbar-brand">Здравствуй, гость</span>
        <a href="/templates/login.php" class="btn btn-success" role="button"
                                                           aria-pressed="true">Авторизация</a>
    </div>

    <?else: ?>
    <div>
    <span class="navbar-brand">Вы авторизированы как <strong><?=$_SESSION['user_name']?></strong></span>

        <a href="/public/auth_destroy.php" class="btn btn-danger" role="button"
           aria-pressed="true">Выйти из профиля</a>
    </div>

    <? require ROOT_DIR.'templates/search/main.php'?>


    <?endif?>




</nav>