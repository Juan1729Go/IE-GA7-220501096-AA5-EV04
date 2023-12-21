<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'reguistro';

// Conexión a la base de datos
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se recibieron datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar y obtener los datos del formulario
    $name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';

    $lastName = isset($_POST['lastName']) ? $conn->real_escape_string($_POST['lastName']) : '';

    $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';

    $phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : '';
    
    $password = isset($_POST['password']) ? $conn->real_escape_string($_POST['password']) : '';

    // Insertar datos en la tabla 'usuario'
    $sql = "INSERT INTO usuario (name, lastName, email, phone, password) VALUES ('$name','$lastName', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: //cliente/true.php");
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
} else {
    echo "Acceso no permitido";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
