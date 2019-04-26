<?php
  $persona=[
    "nombre" => "Jon",
    "apellido" => "Snow",
    "edad" => 27,
    "hobbies" => ["Netflix", "Futbol", "Programar",],
  ];

  $persona["edad"] = 25;
  $persona["direccion"] = "winterfell";
  $persona["hobbies"][] = "Pintar";

?>

<?php echo $persona["hobbies"] ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
  </head>
  <body>
    <h1>Hola</h1>
  </body>
</html>
