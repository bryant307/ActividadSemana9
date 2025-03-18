<?php
include("../db/conexion.php");
include("../includes/header.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    
    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', edad='$edad' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Usuario actualizado</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
    Correo: <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required><br>
    Edad: <input type="number" name="edad" value="<?php echo $row['edad']; ?>" required><br>
    <button type="submit">Actualizar</button>
</form>

<a href="/ActividadSemana9/index.php">Regresar a Inicio</a>
<?php include("../includes/footer.php"); ?>
