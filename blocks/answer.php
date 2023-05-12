<?php
$user = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['massage']), FILTER_SANITIZE_STRING);

if($_COOKIE['user_name'] == ""){
    echo "ви не авторизовані на сайті";
    echo '<br><a href="../index.php">register page</a>';
exit();
}// перевіряє чи авторизований користувач
else{
    $USER = $_COOKIE['user_name'];
}// запихує імя користувача в змінну

if($user == ""){
    echo "ви не ввели імя користувача";
    echo '<br><a href="../home.php">home page</a>';
    exit();
}// перевірка чи ввів користувач імя користувача
else if($message == ""){
    echo "ви не ввели повідомлення";
    echo '<br><a href="../home.php">home page</a>';
    exit();
    //та чи ввів повідомлення користувачеві
}else{
    $sql = new mysqli("localhost", "root", "", "Test db");
    $sql->query("SET NAMES 'utf8'");
    $i = $sql->query("SELECT `name` FROM `users-db` WHERE `name` = '$user'");  
    $a = $i->fetch_array();// тут шаманив з змінними та масивами щоб получити в зміну user_name імя з бд в вигляді змінної
    $user_name = $a['name'];
    if(count($user_name) == 0){
        echo "такого користувача не було найдено";
        echo '<br><a href="../home.php">home page</a>';
        exit();
    }//перевіряє на наявність такого користувача
}
$sql->query("INSERT INTO `posts` (`user_name`,`theme`, `message`, `to`) VALUES('$USER', '', '$message', '$user_name')");
// підключається до бд та зберігає відповідь в ній
$sql->close();
header('Location: ../discussion.php');
?>