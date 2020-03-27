<?php 
  $raiz="../../";
  include('../estructura/head.php');
?>

<main>
  <!-- Nivel de Categoria -->
  <section class="container">
    <h1 class="title">RECETAS</h1>
    
    <div class="contenedor-links-botones-grandes">
        <a href="<?php echo $raiz?>vistas/recetas-crudas.php">crudas</a>
        <a href="<?php echo $raiz?>vistas/recetas-cocinadas.php">cocinadas</a>
    </div>
  </section>
</main>
<?php include('../estructura/foot.php');?>