<?php
    $con = mysqli_connect('localhost','root','','databaza_temy', 3306); //Localhost
    //$con = mysqli_connect('Host','mariopanenko6fsk','Pass','Databaza', 3309); 

    if(!$con)
    {
        die(' Nemáš pripojenú databázu '.mysqli_error($con));
    }
?>
