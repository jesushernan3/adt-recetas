<?php 
  $raiz="../../";
  include('../estructura/head.php');
?>
<div class="alineacion-centrado">
  <h1 class="titulo-seccion">RECETAS</h1>
</div>
  
  <div class="contenedor-links-botones-grandes">
      <a href="<?php echo $raiz?>vistas/recetas-crudas.php">crudas</a>
      <a href="<?php echo $raiz?>vistas/recetas-cocinadas.php">cocinadas</a>
  </div>
<?php include('../estructura/foot.php');?>