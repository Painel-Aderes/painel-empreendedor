<?php
$stylesheet = 'estatisticas';
$page_title = 'Estatísticas - ' . $perfil . ' | Painel do Empreendedor';
require_once('components/component-header.php');
?>

<main>
  <div class="container nav-container">
    <nav id="estatisticas-nav">
      <?php require_once('components/component-estatisticas_nav.php') ?>
    </nav>
  </div>

  <div class="container">
  <?php require_once('components/component-breadcrumb.php'); ?>

  </div>
</main>

<?php require_once('components/component-footer.php') ?>