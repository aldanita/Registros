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
	    $password = trim($_POST['password']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, apellido, telefono, direccion, email, contraseña, rptcontraseña, fecha_reg) 
		VALUES ('$name','$lastname','$phone','$adress','password','password','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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