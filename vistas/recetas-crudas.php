<?php 
$raiz="../";
include('../estructura/head.php');?>
<main>
<div class="categoria container">
  <section class="section">
    
  <h1 class="title is-1">RECETAS CRUDAS</h1>
    
    <!-- Links a Subcategorias -->
    <div class="columns">

        <div class="column is-one-fifth">
          <div class="card">
            <a href="<?php echo $raiz?>vistas/recetas/recetas-crudas-ensaladas.php">
              <div class="card-image">
                <figure class="image is-128x128">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="card-content has-text-centered">
                <h3>Ensaladas</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="column is-one-fifth">
          <div class="card">
          <a href="<?php echo $raiz?>vistas/recetas/recetas-crudas-aperitivos.php">
              <div class="card-image">
                <figure class="image is-128x128">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="card-content has-text-centered">
                <h3>Aperitivos</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="column is-one-fifth">
          <div class="card">
          <a href="<?php echo $raiz?>vistas/recetas/recetas-crudas-aderezos.php">
              <div class="card-image">
                <figure class="image is-128x128">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="card-content has-text-centered">
                <h3>Aderezos</h3>
              </div>
            </a>
          </div>
        </div>
        
        <div class="column is-one-fifth">
          <div class="card">
          <a href="<?php echo $raiz?>vistas/recetas/recetas-crudas-sopas.php">
              <div class="card-image">
                <figure class="image is-128x128">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="card-content has-text-centered">
                <h3>Sopas</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="column is-one-fifth">
          <div class="card">
          <a href="<?php echo $raiz?>vistas/recetas/recetas-crudas-bebidas.php">
              <div class="card-image">
                <figure class="image is-128x128">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="card-content has-text-centered">
                <h3>Bebidas</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="column is-one-fifth">
          <div class="card">
            <a href="<?php echo $raiz?>vistas/recetas/recetas-crudas-principales.php">
                <div class="card-image">
                  <figure class="image is-128x128">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                  </figure>
                </div>
                <div class="card-content has-text-centered">
                  <h3>Principales</h3>
                </div>
            </a>
          </div>
        </div>

    </div>
    <!-- /Links a Subcategorias -->
    
  
  </section>
</div>
</main>
<?php include('../estructura/foot.php');?>