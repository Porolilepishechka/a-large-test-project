<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style-pages.css">
    <title>Home</title>
</head>
<body>
    <?php require("blocks/header.php"); ?>
    <center> <h1> Post Form </h1> </center> 
    <div class="container">   
        <form action="blocks/post-manager.php" method="post">
            <label>theme : </label><br>
            <input type="text" placeholder="theme" name="theme"><br>
            <label>message : </label><br>
            <input type="text" placeholder="message to post" name="massage">
            <button type="submit">Post</button>  <a href="susik.php">massage page</a>
        </form>
    </div>   
<?php require("blocks/footer.php"); ?>
</body>
</html>
