<?php

require ROOT_DIR . 'public/search/main.php';

session_start();
//print_r($_SESSION);

$query = mysqli_query(myDB_connect(), $SQL_query);


$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}
