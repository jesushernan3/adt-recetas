<?php 
  $raiz = '/';
  include '../includes/head.php';
?>
<section class="hero banner categories-banner-img is-medium">
    <div class="hero-body">
        <div class="container">
          
          <h1 class="title">
          Contacto
          </h1>
        </div>
    </div>
  </section>
<main class="container content">

 <section class="section">
  <h3>
    Ante cualquier duda no olvides ponerte en contacto con nosotros
  </h3>

  <form action="enviar.php">
    <div class="field">
      <label class="label">Nombre</label>
      <div class="control">
      <input class="input" type="text" placeholder="e.g Alex Smith">
      </div>
    </div>
    <div class="field">
      <label class="label">Email</label>
      <div class="control">
        <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
      </div>
    </div>
    <div class="field">
      <label class="label">Mensaje</label>
      <div class="control">
        <textarea class="textarea" placeholder="Textarea"></textarea>
      </div>
    </div>
    <div class="field">
      <div class="control">
        <button class="button is-link">Mandar Mensaje</button>
      </div>
    </div>
  </form>
 </section>

</main>

<?php include '../includes/foot.php'; ?>