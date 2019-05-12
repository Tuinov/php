<?php
$mysqli = mysqli_connect('localhost','root','','geekbrains');

$query = mysqli_query($mysqli, "SELECT * FROM geekbrains.galery");



$result = [];

while($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
    // var_dump($row);
    // echo '<br>';
}

mysqli_close($mysqli);