<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="with=device-with, initial-scale=1, maximum-scale=1"
    />
    <title>
      <?php echo $meta_titulo;?>
    </title>

  <link rel="stylesheet" href="<?php echo $raiz;?>assets/css/bulma.css">
  <link rel="stylesheet" href="<?php echo $raiz;?>assets/css/main.css">
  </head>
  <body>

  <header>
    
      <nav class="navbar container" role="navegation" aria-label="dropdown navigation">

        <div class="navbar-brand"><a class="navbar-item" href="<?php echo $raiz;?>index.php">ALIMENTOS DE TRANSICIÓN<br>RECETAS</a></div>

        <?php include('parciales/menu-principal.php');?>

      </nav>
    
  </header>
  