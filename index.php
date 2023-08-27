<?php
$stylesheet = 'index';
$page_title = 'Painel do Empreendedor';
require_once('components/component-header.php')
?>

  <?php
  if (isset($_GET['page'])) {
    // include('public/pages/page_estatistica.php');
  } else {
    require_once('page-home.php');
  }
  ?>

<?php require_once('components/component-footer.php') ?>

