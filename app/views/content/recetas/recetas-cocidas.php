<?php 
  $raiz = '/';
  include '../../includes/head.php';
?>

<section class="hero is-medium categories-banner-img">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Recetas Cocidas
      </h1>
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
      <a class="section" href="cocidas/01.cocidas-tofu_frito.php">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo $raiz;?>public/img/recetas/cocidas/tofu-frito.jpg" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <h3 class="title">Tofu Frito</h3>

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
      <a class="section" href="cocidas/02.cocidas-salteado_arroz.php">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo $raiz;?>public/img/recetas/cocidas/salteado-arroz.jpg" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <h3 class="title">Salteado de Arroz</h3>
            <div class="content">
              Una preparación sencilla, rápida y súper fácil de hacer, un delicioso arroz con verduras. Esta sabrosa
              receta de cocina tiene un sin fin de ideas, ya que podemos combinar el arroz con vegetales de toda
              temporada, además de las ya tradicionales que podemos encontrar durante todo...
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="column is-one-third">
      <a class="section" href="cocidas/03.cocidas-guiso_garbanzos.php">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo $raiz;?>public/img/recetas/cocidas/guiso-garbanzos.jpg" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <h3 class="title">Guiso de Garbanzos</h3>
            <div class="content">
              En esta oportunidad presentamos una receta de cocina vegetariana y vegana super sencilla y llena de
              proteínas y nutrientes esenciales para nuestro organismo. Esta receta trae una vez más como protagonista a
              los garbanzos, fuente primordial de hierro y proteínas para mantener nuestro cuerpo con energías...
            </div>
          </div>
        </div>
    </div>
    </a>
  </div>



  </div>

</main>

<?php include '../../includes/foot.php'; ?>