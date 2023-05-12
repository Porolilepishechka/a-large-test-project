<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style-pages.css">
    <title>susik</title>
</head>
<body>
<?php  require('blocks/header.php'); ?>

    <div class="container">   
        <form action="blocks/answer.php" method="post">
            <label>write to: </label><br>
            <input type="text" placeholder="user name" name="user_name"><br>
            <label>message : </label><br>
            <input type="text" placeholder="message to post" name="massage">
            <button type="submit">Post</button>
        </form>
    </div>  
    
<?php  require('blocks/footer.php'); // це сторонка susik не питайте чого я її так назвав ?>
</body>
</html>