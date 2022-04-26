<?php
    define('DB_NAME','Family');
    define('DB_USER','root');
    define('DB_PASSWORD','.sweetpwd.');
    define('DB_HOST','mysql:3306');
    $conn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if (!$conn){
        die('La Pucha: Could not Connect: '.mysqli_connect_error());
    }
?>