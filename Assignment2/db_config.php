<?php 
$servername = "localhost";
$username = "justinfo_cst8238";
$password = "Password1414";
$dbname = "justinfo_cst8238";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>