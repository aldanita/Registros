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

    	<input type="number" name="phone" placeholder="Celular">

    	<input type="text" name="adress" placeholder="Dirección">

    	<input type="email" name="email" placeholder="Email">

    	<input type="password" name="password" placeholder="Contraseña">

    	<input type="password" name="rptpassword" placeholder="Repita su contraseña">


		
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>