
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
<u>Formulario para insertar un mensaje en el libro de visitas</u>
</font></p>

<form action="addlibro.php">
	AUTOR:<input type='text' name='autor' size='25'>
	<br><br>
	TITULO:<input type='text' name='titulo' size='25'>
	<br><br>
	MENSAJE:<textarea name='mensaje'>
	</textarea>
	<br><br>
	<input type=submit value='Enviar'>
</form>