<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeteria";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn){
    #echo "connected........................";
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>