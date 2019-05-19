<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Calculator</title>
</head>
<body>
<?php

    $x = $_GET['x'];
    $y = $_GET['y'];
    $sign = $_GET['sign'];

    switch ($sign) {
        case '+' :
            $z = $x + $y;
            break;
        case '-' :
        $z = $x - $y;
            break;
        case '*' :
        $z = $x * $y;
            break;
        case '/' :
        $z = $x / $y;
            break;            
    }
    
   ?> 


    <form method="GET">
        <input name="x" type="number" style="width: 50px" value="<?=$x?>">

        <select name="sign">
            <option <?php if ($sign == '+') echo "selected"?>>+</option>
            <option <?php if ($sign == '-') echo "selected"?>>-</option>
            <option <?php if ($sign == '*') echo "selected"?>>*</option>
            <option <?php if ($sign == '/') echo "selected"?>>/</option>
        </select>

        <input name="y" type="number" style="width: 50px" value="<?=$y?>">

        <input type="submit" value="=" style="width: 50px">
        <b><?php echo "$z" ?></b>

    </form>
 
</body>
</html>