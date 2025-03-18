<?php
$conn = mysqli_connect('localhost', 'root', '', 'empleados');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
