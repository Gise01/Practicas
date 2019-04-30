<?php
$nombre = 'Gisela';

$numero = rand(0,1);

$sitios = [
  0 => [
    'pagina' => 'Google'
    'url' => 'https://google.com']
  1 => [
    'pagina' => 'Facebook'
    'url' => 'https://facebook.com']
  2 => [
    'pagina' => 'Twitter'
    'url' => 'https://twitter.com']
  ];

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombre ?> </h2>
    <h3>¿Es usted un ganador?</h3>
      <?php if ($numero==1) :?>
      SI
      <?php else : ?>
      NO
      <?php  endif ;?>
    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <li>
        <a href="https://google.com">xx </a>
      </li>
    </ul>
  </body>
</html>
