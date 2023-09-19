<?php
$stylesheet = 'calendario';
$page_title = 'Calendário de Eventos para ' . $_GET['perfil'] . ' | Painel do Empreendedor';
require_once('components/component-header.php');
?>

<link rel="stylesheet" href="css/vendor/select2.min.css">


<main>
  <div class="container nav-container">
    <nav id="estatisticas-nav__mobile">
      <?php require_once('components/component-dashboard-nav_mobile.php') ?>
    </nav>
  </div>

  <div class="container">
    <?php
    $page = 'Calendário';
    require_once('components/component-breadcrumb.php');
    ?>

  </div>
</main>

<select class="js-example-basic-single" name="state">
  <option value="AL">Alabama</option>
  <option value="WY">Wyoming</option>
</select>

<script src="scripts/vendor/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

<?php require_once('components/component-footer.php') ?>
