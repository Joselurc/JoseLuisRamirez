<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// **Agregar registros**
$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES 
('Pedro15', 'Peru2020'),
('Juan12', 'Sise2024'),
('Julio15', 'Ig2022');";

if ($conn->query($sql) === TRUE) {
    echo "Registros agregados correctamente";
} else {
    echo "Error al agregar registros: " . $conn->error;
}

// Obtener listado de usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <p>Bienvenido <?php echo $_SESSION["usuario"]; ?></p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Usuario</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["nombre"]; ?></td>
            <td><?php echo $row["usuario"]; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="logout.php">Cerrar Sesión</a>

<?php
$conn->close();
?>
</body>
</html>


