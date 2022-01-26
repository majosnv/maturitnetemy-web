<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

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
    <title>Informácie okolo nás</title>
</head>

<style>
    .footer{
       width: 100%;
       position: relative;
       bottom: 0px;
   }
</style>

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
                <a href="okruhy.php" class="active">Okruhy</a>
            </li>
            <li>
                <a href="logout.php">Odhlásiť sa</a>
            </li>
        </ul>
    </nav>

    <button onclick="topFunction()" id="myBtn" title="Hore" class="fas fa-arrow-up"></button>
    
    <!--Scroll up button-->
    <script>
        mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
            mybutton.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Edge, Firefox, IE and Opera
        }    
    </script>

    <div class="text">
        <h2>Uživateľ <?php echo $_SESSION['username']; ?></h2>
        <a onclick="goBack()" style="font-size: 22px;">Späť</a>

        <script>
            function goBack() {
            window.history.back();
            }
        </script>

            <div class="card">
              <h1>Napíš mi ak chceš témy</h1>
              <p>Témy sú na maturitu z Informatiky odbor Elektrotechnika</p>
            </div>
    </div>
</body>

<footer class="footer">
    <p>Mário Panenko 2021</p>
</footer>
</html>
