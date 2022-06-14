<?php
 $host = "localhost";
 $username = "root";
 $password = "password";
 $dbname = "bank";    
 $conn = new mysqli($host, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
?>