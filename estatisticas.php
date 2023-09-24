<?php
$stylesheet = 'estatisticas';
$page_title = 'Estatísticas - ' . $_GET['perfil'] . ' | Painel do Empreendedor';
$page = 'Estatísticas';
require_once('components/component-header.php');
?>

<link rel="stylesheet" href="css/vendor/select2.min.css">


<main>
  <div class="container nav-container">
    <nav id="estatisticas-nav__mobile">
      <?php require_once('components/component-dashboard-nav_mobile.php') ?>
    </nav>
  </div>

  <div class="container main-container">
    <?php
    require_once('components/component-breadcrumb.php');
    ?>

    <h1 class="dashboard-title">Veja estatísticas sobre o artesanato em <strong id="dashboard-title__estado">Linhares</strong></h1>


    <section id="section-filtro__mobile">
      <button id="toggle-filtro">Filtros</button>

      <form action="" id="listas-filtro">
        <div class="listas-label-input">
          <label for="">Munícipio</label>

          <div class="filtro-select-div">
            <select class="filtro-select" name="estado">
              <option value="AL">Alabama</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
        </div>

        <div class="listas-label-input">
          <label for="">Tipo de dado</label>

          <div class="filtro-select-div">
            <select class="filtro-select" name="tipo-dado">
              <option value="mapas">Mapas</option>
              <option value="graficos">Gráficos e indicadores</option>
              <option value="series">Séries temporais</option>
            </select>
          </div>
        </div>

        <div class="listas-label-input">
          <label for="">Período</label>

          <div class="filtro-select-div">
            <select class="filtro-select" name="periodo">
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
            </select>
          </div>
        </div>

        <button id="filtro-limpa">Limpar filtros</button>
      </form>
    </section>
  </div>
</main>

<section>
  
</section>


<script src="scripts/vendor/select2.min.js"></script>
<script src="scripts/script-filtro.js"></script>

<!-- <script>
  $(document).ready(function() {
    $('.filtro-select').select2();
  });
</script> -->

<?php require_once('components/component-footer.php') ?>