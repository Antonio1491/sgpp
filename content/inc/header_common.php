<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Donativos</title>
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <header>
      <div class="row expanded">
        <div class="column">
          <small>Donadotivos Gran Parque La Plancha</small>
        </div>
        <div class="column">
          <ul class="menu">
            <li><a href="desplegar.php">Visualizar</a></li>
          </ul>
        </div>
        <div class="column">
          <?php echo "<p>Hola ".$_SESSION['user']. "</p>"; ?>
        </div>
      </div>
    </header>
