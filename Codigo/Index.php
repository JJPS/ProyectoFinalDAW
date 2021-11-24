<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto IESLQ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  

<div class="contenedor">

<header>
    <h1>Listado de usuarios</h1>
</header>

<?php
$conexion = new mysqli("127.0.0.1", "debianDB", "debianDB", "ProyectoIESLQ",3306);

if ($conexion->connect_errno) {

    echo "Lo sentimos, este sitio web está experimentando problemas.<br>";
    echo "Error: Fallo al conectarse a MySQL debido a: <br>";
    echo "Error Nro: " . $conexion->connect_errno . "<br>";
    echo "Error: " . $conexion->connect_error . "<br>";

    exit;
}

echo $mysqli->host_info . "\n";

$consulta = "SELECT * FROM usuarios";

if (!$resultado = $conexion->query($consulta)) {
    echo "Lo sentimos, no se pudo realizar la consulta.";
    exit;
}

echo "<table><tr><th>Usuario</th><th>Clave</th></tr>";
while ($array_registro = $resultado->fetch_assoc()) {
    echo "<tr><td>".$array_registro['usunombre']."</td><td>".$array_registro['usuclave']."</td></tr>";
}
echo "</table>";

$resultado->free(); 
$conexion->close();

?>
</div>
</body>
</html>