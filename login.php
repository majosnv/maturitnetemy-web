<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/css?family=Popins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="icon" href="favicon.png" sizes="16x16" type="images/png">
    <link rel="stylesheet" href="style.css">
    <title>Prihlásenie</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Cvi</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.php">Domov</a>
            </li>
            <li>
                <a href="okruhy.php">Okruhy</a>
            </li>
            <li>
                <a href="login.php" class="active">Prihlásiť sa</a>
            </li>
        </ul>
    </nav>

    <div class="text" style="padding-top: 10%;">
        <form action="validation.php" method="post">
            <div class="imgcontainer">
              <img src="images/user.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
              <label for="user"><strong>Meno uživatela</strong></label>
              <input type="text" placeholder="Zadaj meno" name="user" required>
          
              <label for="password"><strong>Heslo</strong></label>
              <input type="password" placeholder="Zadaj heslo" name="password" required>
              
              <button class="btn btn1">Prihlásiť sa</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Zapamätať si
              </label>
            </div>
        </form>
    </div>

</body>

<footer class="footer">
    <p>Mário Panenko 2021</p>
</footer>
</html>
