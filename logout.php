<?php

session_start();
session_destroy();

header('location:login.php'); //Presmerovanie na login

?>
