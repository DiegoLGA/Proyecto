<html>
<head>
<title>Creación de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#FF0000">
<body text= "#E5E5E5">
<font face = "tahoma">
<font size = "2">
<body link = "#E5E5E5" vlink="E0E0E0">

<?php  
$fecha = time();
$mensaje = $_GET['mensaje'];
$titulo = $_GET['titulo'];
$autor = $_GET['autor'];

include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$insercion = mysqli_query($conexion, "INSERT INTO libro (autor,titulo,mensaje,fecha) VALUES ('$autor','$titulo','$mensaje','$fecha')");

echo 'REGISTRO INSERTADO CORRECTAMENTE';
echo "<br>";

$consulta = mysqli_query($conexion, "SELECT '$mensaje' FROM libro WHERE mensaje='$mensaje'");

while ($registro = mysqli_fetch_row($consulta))
{
echo '<tr>';
	foreach ($registro as $clave)
	{
		echo '<td>',$clave,'</td>';
	}

}
echo "<br>";
echo "<br>";
echo "<a href=index.php> Volver a la pagina principal</a></font></center>";
?>