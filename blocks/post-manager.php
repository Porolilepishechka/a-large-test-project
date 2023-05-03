<?php 

if($_COOKIE['user_name'] == ""){
    echo "ви не авторизовані на сайті";
    echo '<br><a href="../index.php">register page</a>';
exit();
}

if($_COOKIE['user_name'] != "")
    $user_name = $_COOKIE['user_name'];

$theme = $_POST['theme'];
$message = $_POST['massage'];

if(trim($theme) == ""){
    echo "ви не ввели тему";
    echo '<br><a href="../home.php">home page</a>';
exit();
} else if(trim($message) == ""){
    echo "ви не ввели повідомлення";
    echo '<br><a href="../home.php">home page</a>';
exit();
}

$mysql = new mysqli("localhost", "root", "", "Test db");
$mysql->query("SET NAMES 'utf8'");

$mysql->query("INSERT INTO `posts` (`user_name`, `theme`, `message`) VALUES('$user_name','$theme', '$message')");

$mysql->close();

header('Location: ../index.php');
?>