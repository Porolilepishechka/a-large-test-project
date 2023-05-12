<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style-Pages.css">
    <title>discussion</title>
</head>
<?php require("blocks/header.php"); ?>
<body>
    <?php
    $i = 0;
    $mysql = new mysqli("localhost", "root", "", "Test db");
    $mysql->query("SET NAMES 'utf8'");
    $mysql->query("SELECT * FROM `posts` ORDER BY `posts`.`id` DESC");
    // підключення до бази данних
    $leght_id = 2;
        do{
            $result_id = $mysql->query("SELECT `id` FROM `posts` WHERE `id` = '$i'");
            $id = $result_id->fetch_array();
            $posts_id = $id['id']; // створюю просту зміну томущо масиви запит не приймає
            $result = $mysql->query("SELECT * FROM `posts` WHERE `id` = '$posts_id'");
            $posts = $result->fetch_array(); // отримує рядок результату у вигляді асоціативного масиву, числового масиву або обох

            if(!empty($posts['theme']) && !empty($posts['message'])){
                echo "<div class='card'>";
                echo "<h2> from: ".$posts['user_name']."</h2><h4>".$posts['theme']."</h4>".$posts['message']."<br>".$posts['time']."<br>";
                echo '</div>';
                $leght_id++;
                //створює пости
            }

            if(trim($posts['to'] != "")){
                echo "<div class='card'>";
                echo "<h2> from: ".$posts['user_name']." to: ".$posts['to']."</h2>".$posts['message']."<br>".$posts['time']."<br>";
                echo '</div>';
                $leght_id++;
            }
            $i++;
        }while($i < $leght_id);
    $mysql->close();
    ?>
<?php require("blocks/footer.php"); ?>
</body>
</html>
