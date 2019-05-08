<?php

$errors = [];

if (empty($_POST['nombre'])) {
    $errors[] = "Falta Completar nombre <br>";
}

if (empty($_POST['email'])) {
    $errors[] = "Falta completar email <br>";
}

foreach ($errors as $error) {
    echo $error;
}

?>

<!DOCTYPE HTML>
<html>
<body>
<form action = "formulario.php" method = "post" >
<label for = "nombre" > Nombre : </label>
<input type = "text" name = "nombre" >
<br>
<label for = "email" > E - mail : </label>
<input type = "text" name = "email" >
<br>
<input type = "submit" >
</form>
</body>
</html>