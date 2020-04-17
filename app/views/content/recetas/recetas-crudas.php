<?php 
  $raiz = '/';
  include '../../includes/head.php';
?>

<section class="hero is-medium categories-banner-img">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Recetas Crudas
      </h1>
      <h2 class="subtitle">

      </h2>
    </div>
  </div>
</section>

<main class="container">
  <p class="section">
    Gran recetario saludable para crudiveganos, donde aprenderás a cocinar platos dulces y salados para las comidas de
    tu día a día. Desde ensaladas y platos básicos hasta aperitivos, almuerzos y cenas para tu dieta raw crudivegana.
    Con instructivo sencillo te enseñamos una completa variedad de recetas crudas para veganos.
  </p>

  <div class="columns">

    <div class="column is-one-third">
      <a class="section" href="crudas/02.crudas-ensalada_berro.php">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo $raiz;?>public/img/recetas/crudas/ensalada-de-berros.jpg" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <h3 class="title">Ensalada de Berro</h3>

            <div class="content">
              Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
              cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
              ingredientes principales, que los puedes conseguir en...
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="column is-one-third">
      <a class="section" href="crudas/01.crudas-ceviche_champinion.php">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo $raiz;?>public/img/recetas/crudas/ceviche-champinones.jpg" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <h3 class="title">Ceviche de Champiñon</h3>
            <div class="content">
              Este plato no puede faltar entre tus opciones de cocina vegetariana, es rico en sabor, nutrientes y
              completamente diferente. Este sin duda es uno de los más ricos ceviches de vegetales, hace un tiempo
              publicamos una opción de ceviche con soya entre otros, los cuales se...
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="column is-one-third">
      <a class="section" href="crudas/03.crudas-hummus.php">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo $raiz;?>public/img/recetas/cocidas/hummus.jpg" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <h3 class="title">Hummus</h3>
            <div class="content">
              En esta ocasión presentamos una receta muy popular de la cocina árabe, que puedes utilizar tanto en tus
              entrantes como crema en la que puedes ‘dipear’ con crudités...
            </div>
          </div>
        </div>
    </div>
    </a>
  </div>

  <div class="column is-one-third">
    <a class="section" href="crudas/04.crudas-caviar_berenjenas.php">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo $raiz;?>public/img/recetas/crudas/caviar-berenjenas.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <h3 class="title">Caviar de Berenjenas</h3>
          <div class="content">
            Seguro no sabías que también los veganos y vegetarianos podemos a optar a opcionales tan finos como el
            caviar, y con un ingrediente principal tan fino y delicioso como las berenjenas... </div>
        </div>
      </div>
  </div>
  </a>
  </div>

  </div>

</main>

<?php include '../../includes/foot.php'; ?>