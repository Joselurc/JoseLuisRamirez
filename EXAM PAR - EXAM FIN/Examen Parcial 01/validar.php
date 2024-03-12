<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sanitización de entradas
$nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
$usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
$contraseña = mysqli_real_escape_string($conn, $_POST["contraseña"]);

// Validación de campos
if (empty($nombre) || empty($usuario) || empty($contraseña)) {
    echo "Todos los campos son obligatorios";
    exit;
}

// Verificación de existencia de usuario
$sql = "SELECT * FROM usuarios WHERE usuario ='$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "El usuario ya existe";
    exit;
}

// Encriptación de contraseña
$contraseña_hash = password_hash($contraseña, PASSWORD_BCRYPT);

// Registro del usuario
$sql = "INSERT INTO usuarios (nombre, usuario, contraseña) VALUES ('$nombre', '$usuario', '$contraseña_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
    header("Location: login.php");
} else {
    echo "Error al registrar usuario: " . $conn->error;
}

$conn->close();
?>


 