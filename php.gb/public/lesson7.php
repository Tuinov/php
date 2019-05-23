<?php
session_start();

/*setcookie('name', 'Dima' , time()+3600);
*/
$_SESSION['name'] = 'Foma';
$_SESSION['age'] = '33';


print_r($_COOKIE);

print_r($_SESSION);

session_destroy();


echo '<br/>'.password_hash("12345", PASSWORD_DEFAULT);


if (password_verify('12345', '$2y$12$kx3lkGNvdKHJAtdAS7BxyelbIFL5J/k9/2SBFTdX1XUwziAQkPZ3C'))
    echo 'Пароль верный';
else
    echo 'Пароль неверный';

