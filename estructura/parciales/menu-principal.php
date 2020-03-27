<div class="navbar-menu navbar-start">

  <div class="navbar-item has-dropdown is-hoverable">
      <a class="navbar-link is-arrowless">Recetas</a>
        <div class="navbar-dropdown">
          <a class="navbar-item" href="<?php echo $raiz;?>vistas/recetas-crudas.php">Crudas</a>
          <a class="navbar-item" href="<?php echo $raiz;?>vistas/recetas-cocinadas.php">Cocinadas</a>
        </div>
  </div>
  <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link is-arrowless" href="<?php echo $raiz;?>vistas/categoria-css.php">Preparaciones</a>
        <div class="navbar-dropdown">
          <a class="navbar-item">Desayunos</a>
          <a class="navbar-item">Almuerzos</a>
          <a class="navbar-item">Merienda</a>
          <a class="navbar-item">Cena</a>
        </div>
  </div>
  <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link is-arrowless" href="<?php echo $raiz;?>vistas/recursos.php">Recursos</a>
        <div class="navbar-dropdown">
          <a href="<?php echo $raiz;?>vistas/recursos/recursos-ingredientes.php" class="navbar-item">Ingredientes</a>
          <a href="#" class="navbar-item">Teorias Nutricias</a>
          <a href="#" class="navbar-item">Huerta</a>
          <a href="#" class="navbar-item">Maternidad</a>
          <a href="#" class="navbar-item">Viajes</a>
          <a href="#" class="navbar-item">Bibliografia</a>
          <a href="#" class="navbar-item">Multimedia</a>
        </div>
  </div>
</div>


  
  <div class="navbar-item search-box navbar-end">
    <form role="search" method="get" action="index.php" class="search-form">
      <input type="text" placeholder="Buscar..">
      <button class="boton-lupa">
        <svg class="icono-lupa" xml:space="preserve" enable-background="new 0 0 512 512" viewBox="0 0 512 512" height="24px" width="24px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <path d="M460.355,421.59L353.844,315.078c20.041-27.553,31.885-61.437,31.885-98.037 C385.729,124.934,310.793,50,218.686,50C126.58,50,51.645,124.934,51.645,217.041c0,92.106,74.936,167.041,167.041,167.041 c34.912,0,67.352-10.773,94.184-29.158L419.945,462L460.355,421.59z M100.631,217.041c0-65.096,52.959-118.056,118.055-118.056 c65.098,0,118.057,52.959,118.057,118.056c0,65.096-52.959,118.056-118.057,118.056C153.59,335.097,100.631,282.137,100.631,217.041 z" id="search-svg"></path>
        </svg>
      </button>
    </form>
  </div>
