<?php
setcookie("user_name", $user['name'], time() + 1);
// задаю кукі одну секунду щоб видалило користувача
header('Location: index.php');
?>
