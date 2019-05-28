<?php
session_start ();

if (isset ($_GET['action'])) {
    
    if ($_GET['action']=='restart') {
        
        $_SESSION['contador'] = 0 ;
    } elseif ($_GET['action'] == 'inc') {
        $_SESSION['contador']++;
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
  <?= $_SESSION['contador']?>

  <br>

  <a href="?action=restart">REINICIAR</a>
  
  <br>
  
  <a href="?action=inc">INCREMENTAR</a>
  
  <br>
    
</body>
</html>