<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'atm-store';

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        die('Failed connect to MySQL' .mysqli_connect_error());
    }
?>