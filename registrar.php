<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $lastname = trim($_POST['lastname']);
	    $phone = trim($_POST['phone']);
	    $adress = trim($_POST['adress']);
	    $email = trim($_POST['email']);
	    $password = trim($_POST['password']);

		if($_POST["password"]==$_POST["rptpassword"])
		{
 	    # son iguales
		}else{
	     # no son iguales
		}

	    $consulta = "INSERT INTO datos(nombre, apellido, telefono, direccion, email, contraseña) 
		VALUES ('$name','$lastname','$phone','$adress','$password','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>