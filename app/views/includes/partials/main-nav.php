    <div class="brand">
      <a href="/">RECETAS</a>
    </div>

    <nav class="nav-bar" role="navigation">
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <li><a href="/">Home</a></li>
        <li><a href="#">Recetas</a>
          <ul class="nav-dropdown">
            <li><a href="<?php echo $raiz ?>app/views/content/recetas/recetas-crudas">Recetas Crudas</a></li>
            <li><a href="<?php echo $raiz ?>app/views/content/recetas/recetas-cocidas">Recetas Cocidas</a></li>
          </ul>
        </li>
        <li><a href="#">Preparaciones</a>
          <ul class="nav-dropdown">
            <li><a href="<?php echo $raiz ?>app/views/content/preparaciones/preparaciones-desayunos">Desayuno</a></li>
            <li><a href="<?php echo $raiz ?>app/views/content/preparaciones/preparaciones-almuerzos">Almuerzos</a></li>
            <li><a href="<?php echo $raiz ?>app/views/content/preparaciones/preparaciones-merienda">Merienda</a></li>
            <li><a href="<?php echo $raiz ?>app/views/content/preparaciones/preparaciones-cena">Cena</a></li>
          </ul>
        </li>
      <li><a href="<?php echo $raiz;?>app/views/content/recursos.php">Recursos</a></li>
      <li><a href="<?php echo $raiz;?>app/views/content/acerca">Acerca</a></li>
      </ul>
    </nav>