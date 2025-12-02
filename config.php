<?php
$conn = mysqli_connect('localhost', 'root', '', 'AmazingPakistan');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
else{
    // Connected successfully
}
?>
