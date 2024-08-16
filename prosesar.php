<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Conectar a la base de datos Access
$conn = new COM("ADODB.Connection");
$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:usuarios.accdb");

// Insertar los datos en la tabla
$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";
$conn->Execute($sql);

// Cerrar la conexión
$conn->Close();

// Redirigir a home.html
header("Location: home.html");
exit();
?>
