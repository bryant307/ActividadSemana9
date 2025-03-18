<?php
include("../db/conexion.php");
include("../includes/header.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Edad</th><th>Acciones</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['correo']}</td>
        <td>{$row['edad']}</td>
        <td>
            <a href='update.php?id={$row['id']}'>Editar</a>
            <a href='delete.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
echo "</table>";
?>

<a href="../index.php" class="btn-regresar">Regresar a Inicio</a>

<?php include("../includes/footer.php"); ?>
