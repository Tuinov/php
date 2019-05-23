<?php
require('db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Project_PHP</title>
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

  <div class="products">

    <?php foreach ($result as $img): ?>
    <div class="product1">
    <a href="<?=$img['href']?>"><img src="<?=$img['href']?>" id="<?=$img['id']?>"   alt=""></a>
                <p>MANGO PEOPLE T-SHIRT</p> <br>
                <span>$52.00</span>
                <button>купить</button>
     </div>

   
    <?php endforeach ?>
  </div>

 
  </body>
</html>
