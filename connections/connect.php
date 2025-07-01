<?php 

$host = "localhost";
$username = "root";
$password = "";
$db = "";

// to follow to database for classtrack pro 

$conn=new mysqli($host, $user, $pass, $db);
if ($conn->connect_error){
    echo "Connection failed " . $conn->connect_error;
}
?>