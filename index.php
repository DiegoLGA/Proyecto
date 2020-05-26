<html>
<head>
<title>Creación de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#FF0000">
<body text= "#E5E5E5">
<font face = "tahoma">
<font size = "2">
<body link = "#E5E5E5" vlink="E0E0E0">
<p aling = "center">
<font size = "4">	
<u>Libro de visitas</u>
</font></p>
<!-- Inicia la creacion de una tabla para organizar la informacion-->
<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
	<!-- <br><br> Dos saltos de linea y <tr> una fila en la tabla   -->
	<br><br><tr>
	<!-- Define una celda de la tabla <td> -->
	<td width='5%'>
	</td>
	<td width='30%'>
	<b>Autor</b>
	</td>
	<td width='30%'>
	<b>TITULO</b>
	</td>
	<td width='30%'>
	<b>FECHA</b>
	</td>
</tr>
</table>

<?php  
include 'conexion.php';

$enlace = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
$consulta = mysqli_query($enlace, "SELECT * FROM libro ORDER BY fecha DESC");

    /* obtener el array asociativo */
    echo "<hr size = 10 color = ffffff width = 100% aling = left>";
	while ($row = mysqli_fetch_array($consulta)) {
		$id = $row["id"];
		$autor = $row["autor"];
    	$titulo = $row["titulo"];
    	$fecha = $row["fecha"];
    echo ("<table width='100%' border='0' cellspacing='0' cellpadding='0'>\n");
	echo ("<tr>\n");
	echo ("<td width='5%'><a href=librolibro.php?id=$id>Ver</a></td>\n");
	echo("<td width='30%'>$autor</a></td>\n");
	echo("<td width='30%'>$titulo</a></td>\n");
	echo("<td width='30%'>".date("d-m-y",$fecha)."</td>\n");
	echo ("</tr>\n");
	echo ("</table>\n");
	echo '<hr size=2 color = ffffff width=100% align=left>';
    }

?>
<font face='arial' size='1'>
<a href='formulariolibro.php'>Añadir mensaje
</a></font>
