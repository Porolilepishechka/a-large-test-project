<?php
$login = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$remember = $_POST['remember'];

$password = md5($password);

$mysql = new mysqli("localhost", "root", "", "Test db");
$mysql->query("SET NAMES 'utf8'");

$result = $mysql->query("SELECT * FROM `users-db` WHERE `name` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();

if(count($user) == 0){
    echo "такого користувача не було найдено";
    echo '<br><a href="index.php">register page</a>';
    exit();
}

setcookie("user_name", $user['name'], time() + 946707777);

header('Location: index.php');

$mysql->close();
?>