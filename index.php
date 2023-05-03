<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="Style-Pages.css">
<title> Register Page </title>    
</head>    
<body>    

<?php require("blocks/header.php"); ?>

<form action="register-page.php" method="post">  
    <center> <h1> Register Form </h1> 
        <div class="container">  
            <label>Username : </label><br>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <br><label>Password : </label><br> 
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Register</button>
        </div>   
    </center> 
    </form>   
<br>
    <form action="auth.php" method="post">  
        <center> <h1> Login Form </h1> 
        <div class="container">   
            <label>Username : </label><br>    
            <input type="text" placeholder="Enter Username" name="username" required>  
            <br><label>Password : </label><br>    
            <input type="password" placeholder="Enter Password" name="password" required><br>   
            <button type="submit">Login</button>  
        </center> 
        </div>   
    </form>     
    <?php require("blocks/footer.php"); ?>
</body>     
</html>  