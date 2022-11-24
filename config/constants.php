<?php

//Start Session
session_start();

 //create constante to store non repeating values
define('SITEURL','http://127.0.0.1/foodapp/');
 
define('LOCALHOST','127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

$conn = mysqli_connect(LOCALHOST,'root','') or die (mysqli_error($conn));//data base connexion
$db_select = mysqli_select_db($conn,DB_NAME) or die (mysqli_error($conn));



?>