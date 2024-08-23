<?php 
session_start();
var_dump($_SESSION["email"]);
unset($_SESSION['name']);
echo $_SESSION['name'];
 ?>