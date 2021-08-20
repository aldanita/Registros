<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registrar</h1>
    	<input type="text" name="name" placeholder="Nombre">

    	<input type="text" name="lastname" placeholder="Apellido">

    	<input type="text" name="phone" placeholder="Telefono">

    	<input type="text" name="adress" placeholder="Dirección">
    	<input type="email" name="email" placeholder="Email">

    	<input type="text" name="password" placeholder="Contraseña">

    	<input type="text" name="password" placeholder="Repita su contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>