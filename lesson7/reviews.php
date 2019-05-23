<?php
$linkRev = mysqli_connect('localhost','root','','geekbrains') or die(mysqli_error($link));
$userId = 1;
if($_GET['userId']) {
    $userId = $_GET['userId'];
}


$res = mysqli_query($linkRev, "SELECT * FROM geekbrains.students WHERE id = " . $userId);
    

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
    <input type="text" name="userId">
    <input type="submit">
</form>

<?php 
$rowRev = mysqli_fetch_assoc($res);
echo '<h3>' . $rowRev['name'] . '</h3>';
?>
  

    </body>
</html>