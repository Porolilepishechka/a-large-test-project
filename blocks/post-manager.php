<?php 
if($_COOKIE['user_name'] == ""){
    echo "ви не авторизовані на сайті";
    echo '<br><a href="../index.php">register page</a>';
exit();
} // перевіряє чи авторизований користувач
else if($_COOKIE['user_name'] != "")
    $user_name = $_COOKIE['user_name'];
// запихує імя користувача в змінну

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
// куча перевірок поста

$mysql = new mysqli("localhost", "root", "", "Test db");
$mysql->query("SET NAMES 'utf8'");
$mysql->query("INSERT INTO `posts` (`user_name`, `theme`, `message`) VALUES('$user_name','$theme', '$message')");
// підключається до бд та зберігає пост в ній
$mysql->close();

header('Location: ../discussion.php');
?>
