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
<?php
  $msg = '';
  $msgClass = '';
  // Check for posted data
  if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check Require Fields
    if (!empty($email) && !empty($name) && !empty($message)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Poner un email valido';
      $msgClass = 'is-danger';
      } else {
        // Passed
        echo 'email valido';
      }
    } else {
      // Failed
      $msg = 'Por favor rellenar todos los campos';
      $msgClass = 'is-danger';
    }
  }
  
?>
  <?php if($msg != ''): ?>
  <div class="notification <?php echo $msgClass; ?>">
    <?php echo $msg; ?>
  </div>
  <?php endif; ?>
  
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <!-- <input type="text" name="data">
    <button type="submit">Submit</button> -->
    <div class="field">
      <label class="label">Nombre</label>
      <div class="control">
      <input name="name" class="input" type="data" placeholder="e.g Alex Smith" value="<?php echo isset($_POST['name']) ? $name : '';  ?>">
      </div>
    </div>
    <div class="field">
      <label class="label">Email</label>
      <div class="control">
        <input name="email" class="input" type="email" placeholder="e.g. alexsmith@gmail.com" value="<?php echo isset($_POST['email']) ? $email : '';  ?>">
      </div>
    </div>
    <div class="field">
      <label class="label">Mensaje</label>
      <div class="control">
        <textarea name="message" class="textarea" placeholder="Textarea" vlaue="<?php echo isset($_POST['message']) ? $message : '';  ?>"></textarea>
      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit" name="submit" class="button is-link">Mandar Mensaje</button>
      </div>
    </div>
  </form>
 </section>

</main>

<?php include '../includes/foot.php'; ?>