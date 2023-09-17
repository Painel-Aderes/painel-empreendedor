  <?php

  if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];

    if ($currentPage == 'estatisticas') {
      $perfil = $_GET['perfil'];
      require_once('page-dashboard.php');
    } elseif ($currentPage == 'publico') {
      $perfil = $_GET['perfil'];
      require_once('page-publico.php');
    }

  } else {
    require_once('page-home.php');
  }
  ?>

