<?php
$servername = "localhost:3306";
$username = "steshano_20stesha18";
$password = "portfolio18";
$dbname = "steshano_portfolio";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully! </p>";
?>