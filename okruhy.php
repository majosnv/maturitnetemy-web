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
    <title>Okruhy</title>
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
    <script>
        mybutton = document.getElementById("myBtn");

        
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                mybutton.style.display = "block";
            } else {
            mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
        }    
    </script>

    <div class="text">
        <h2>Uživateľ <?php echo $_SESSION['username']; ?></h2><br>
            <div class="card">
                <p><i style="color: rgb(76, 67, 201);" class="fas fa-angle-right"></i> <a href="tema1.php">Informácie okolo nás</a></p>
            </div>

            <div class="card">
                <p><i style="color: rgb(76, 67, 201);" class="fas fa-angle-right"></i> <a href="tema2.php">Internet a informačná spoločnosť</a></p>
            </div>

            <div class="card">
                <p><i style="color: rgb(76, 67, 201);" class="fas fa-angle-right"></i> <a href="tema3.php">Počítačové systémy a operačný systém</a></p>
            </div>

            <div class="card">
                <p><i style="color: rgb(76, 67, 201);" class="fas fa-angle-right"></i> <a href="tema4.php">Textový procesor – MS Word</a></p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Tabulkový procesor – MS EXCEL</p>
            </div>

            <div class="card">
                <p><i style="color: rgb(76, 67, 201);" class="fas fa-angle-right"></i> <a href="tema6.php">Prezentacný softvér – MS Powerpoint</a></p>
            </div>

            <div class="card">
                <p><i style="color: rgb(76, 67, 201);" class="fas fa-angle-right"></i> <a href="tema7.php">Algoritmizácia, Programovanie - jazyk C</a></p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Algoritmizácia, Programovanie - Python</p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Algoritmizácia, Programovanie - PHP</p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Hardvér (Hardware)</p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Pocítacové siete a Internet</p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Informacné a Databázové Systémy</p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Rastrový a Vektorový grafický editor</p>
            </div>

            <div class="card">
                <p><i class="fas fa-angle-right"></i> Tvorba webu</p>
            </div>

            <br>
            <div>
                <button class="btn btn1", onclick="window.location.href='logout.php';">Odhlásiť sa</button>
            </div>
    </div>



</body>

<footer class="footer">
    <p>Mário Panenko 2021 &copy</p>
</footer>

</html>
