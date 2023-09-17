<nav id="breadcrumb">
  <ul>
    <li><a href="index.php">Início</a></li>

    <?php
    if (isset($_GET['perfil'])) {
      $perfil = $_GET['perfil'];
      $page = $_GET['page'];

      if ($page == 'publico') {
    ?>

        <li>Público</li>
        <li><a href="index.php?page=publico&perfil=<?php echo $perfil ?>" class="breadcrumb--active"><?php echo $perfil ?></a></li>

      <?php
      } else {
      ?>

        <li>Público</li>
        <li><a href="index.php?page=publico&perfil=<?php echo $perfil ?>"><?php echo $perfil ?></a></li>
        <li class="breadcrumb--active "><?php echo $page ?></li>

    <?php
      }
    }
    ?>
    

  </ul>
</nav>