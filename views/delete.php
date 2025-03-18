<?php
include("../db/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado";
    } else {
        echo "Error: " . $conn->error;
    }
}
header("Location: read.php");
?>