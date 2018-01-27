<?php
$servername = "shareddb1c.hosting.stackcp.net";
$username = "javabuzz-32300795";
$password = "Jogii@911";
$dbname = "javabuzz-32300795";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 
