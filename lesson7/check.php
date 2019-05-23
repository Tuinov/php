<?php
$linkCh = mysqli_connect('localhost','root','','geekbrains') or die(mysqli_error($linkCh));

$resCh = mysqli_query($linkCh, "SELECT * FROM geekbrains.students");

// if(!empty($_GET)) {
//     $name = $_GET['name'];
//     $login = $_GET['login'];
//     $pass = $_GET['pass'];

//     mysqli_query($linkCh, "INSERT INTO students (name, lang, login, pass) 
//     VALUES ('$name', 'html', '$login', '$pass')");

//     header('location: check.php');
//     exit;
// };

// if(!empty($_GET['del'])) {
//     $del = $_GET['del'];

//     mysqli_query($linkCh, "DELETE FROM students WHERE id=$del");
// }
    $name = '';
    $login = '';
    $pass = '';

if(!empty($_GET['edit'])) {
    $edit = $_GET['edit'];

    $res = mysqli_query($linkCh, "SELECT * FROM students WHERE id=$edit");
    $row1 = mysqli_fetch_assoc($res);

    $name = $row1['name'];
    $login = $row1['login'];
    $pass = $row1['pass'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Product</title>
  </head>
  <body>
  <header class="header">
        <div class="container headerInside">
            <div class="logo"> BRAN<span>D</span> </div>
            <form class="searchWrap">
                <div class="searchBrowse"> Browse <i class="fas fa-caret-down"></i> </div>
                <input placeholder="Search for Item..." type="text">
                <button> <i class="fas fa-search"></i> </button>
            </form> <img class="headerCart" src="img/cart.png" alt="">
            <button class="accountBtn"> My Account <i class="fas fa-caret-down"></i> </button>
        </div>
    </header>
    <nav class="topNav"> <a href="#">HOME</a> <a href="#">MAN</a> 
    <a href="interactive.php">INTERACTIVE</a> <a href="test.php">TEST</a> <a href="reviews.php">Отзывы</a> 
    <a href="check.php">РЕГИСТРАЦИЯ</a> <a href="cart.php">CART</a> 
    </nav>

    

    
<form action=""> 
    <h3>Регистрация</h3><br>
    <input type="text" name="name" placeholder="name" value=<?=$name?>> введите имя <br>
    <input type="text" name="login" placeholder="login" value=<?=$login?>> введите логин <br>
    <input type="text" name="pass" placeholder="password" value=<?=$pass?>> придумайте пароль <br>
    <input type="submit">
</form>

<?php

        while($student = mysqli_fetch_assoc($resCh)) {
            echo '<h3>' .  $student['name'] .'  '. $student['login'] .'  '. $student['pass'] . '</h3>';
            echo '<a href="?del='.$student['id'].'">удалить</a>';
            echo '<a href="?edit='.$student['id'].'">редактровать</a>';
            
        }
    ?>

    </body>
</html>