<?php
session_start();
require('connection.php');

if (isset($_POST['user'], $_POST['password'])){
$name = $_POST['user'];
$pass = $_POST['password'];
echo "prebral som";
}
else echo'nedefinované';

$sql = "SELECT * FROM loginform WHERE name = '$name' AND pass = '$pass'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  $_SESSION['username'] = $name;
  header('location:okruhy.php');

} else {
  //echo "0 results";
  header('location:login.php');
}
?>
