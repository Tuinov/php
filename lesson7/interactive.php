<?php
$link = mysqli_connect('localhost', 'root', '', 'geekbrains');
$content = "<h1>Добро пожаловать</h1>";
    if(isset($_GET['form'])) {
        if($_GET['form'] == 'category') {
            $sql = "SELECT name FROM category";
        }
        if($_GET['form'] == 'goods') {
            $sql = "SELECT name FROM goods";
        }
        $res = mysqli_query($link, $sql);
        $content = '';

        while($row = mysqli_fetch_assoc($res)){
            $content .= $row['name'] . '<br>';
        }
         
    } 
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interactive</title>
</head>
<body>

    <ul>
        <li><a href="interactive.php">Главная</a></li>
        <li><a href="?form=category">КАТЕГОРИЯ</a></li>
        <li><a href="?form=goods">ТОВАРЫ</a></li>
    </ul>
    <?php echo $content ?>
</body>
</html>