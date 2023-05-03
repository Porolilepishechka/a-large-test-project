<?php

setcookie("user_name", $user['name'], time() + 1);
session_start();
$_SESSION['user_name'] = "";
session_write_close();

header('Location: index.php');

?>