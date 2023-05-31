<?php 
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "garden";
    
    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Não conectado.")

?>