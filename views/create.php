<?php
include("../db/conexion.php");
include("../includes/header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    
    $sql = "INSERT INTO usuarios (nombre, correo, edad) VALUES ('$nombre', '$correo', '$edad')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Usuario agregado correctamente</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Correo: <input type="email" name="correo" required><br>
    Edad: <input type="number" name="edad" required><br>
    <button type="submit">Guardar</button>
</form>

<a href="/ActividadSemana9/index.php">Regresar a Inicio</a>

<?php include("../includes/footer.php"); ?>
