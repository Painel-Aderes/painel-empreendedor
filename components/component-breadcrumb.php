<nav id="breadcrumb">
  <ul>
    <li><a href="index.php">Início</a></li>

    <?php
    if (isset($_GET['perfil'])) {
      $perfil = $_GET['perfil'];

      if ($page == 'publico') {
    ?>

        <!-- <li>Público</li> -->
        <li class="breadcrumb--active"><?php echo $perfil ?></li>

      <?php
      } else {
      ?>

        <!-- <li>Público</li> -->
        <li><a href="publico.php?perfil=<?php echo $perfil ?>"><?php echo $perfil ?></a></li>
        <li class="breadcrumb--active "><?php echo $page ?></li>
      <?php
      }
    } else { 
      ?>
      <li class="breadcrumb--active"><?php echo $page ?></li>

    <?php
    }
    ?>
</ul>
</nav>