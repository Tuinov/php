<?php

    var_dump($_SERVER['REQUEST_METHOD'], $_POST, $_FILES);
    // echo"имя: " . $_POST['name']. "<hr>";
    // echo"логин: " . $_POST['login']. "<hr>";
    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES['foto'])) {
        copy($_FILES['foto']['tmp_name'], 'img/' .$_FILES['foto']['name']);
    }
    
    
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="foto" placeholder="name">
    
    <input type="submit">
</form>
