<?php
$link = mysqli_connect('localhost','root','','geekbrains') or die(mysqli_error($link));

$res = mysqli_query($link, "SELECT * FROM geekbrains.galery");


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
    <a href="#">WOMEN</a> <a href="#">KIDS</a> <a href="reviews.php">Отзывы</a> <a href="#">FEATURED</a> <a href="#">CART</a> 
    </nav>

<?php
while($roww = mysqli_fetch_assoc($res)) {
    
    echo '<img src="'.$roww['href'].'" width="160">';
    echo '<a href="?del='.$roww['id'].'">удалить</a>';
     
}

?>

  </body>
</html>
