<?php
$stylesheet = 'calendario';
$page_title = 'Calendário de Eventos para ' . $_GET['perfil'] . ' | Painel do Empreendedor';
$page = 'Calendário';
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
          <label for="">Pesquise por um evento:</label>

          <div class="filtro-search-div">
              <input type="text" class="filtro-input" placeholder="Digite o nome do evento">
          </div>
        </div>

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
          <label for="">Tipo de evento</label>

          <div class="filtro-select-div">
            <select class="filtro-select" name="tipo-evento">
              <option value="Feira">Feira</option>
              <option value="Congresso">Congresso</option>
              <option value="Capacitação">Capacitação</option>
            </select>
          </div>
        </div>

        <div class="listas-label-input">
          <label for="">Período</label>

          <div class="filtro-select-div">
            <select class="filtro-select" name="periodo">
              <option value="2023">2023</option>
              <option value="2024">2024</option>
            </select>
          </div>
        </div>

        <button id="filtro-limpa">Limpar filtros</button>
      </form>
    </section>
  </div>
</main>

<section id="section-eventos">
  <div class="container">
    <span class="eventos-resultados">Foram encontrados <strong>3 eventos</strong>.</span>

    <ul class="evento-lista">
      <li class="evento-item">
        <span class="evento-categoria">Feira</span>
        <p class="evento-titulo">CASACOR SÃO PAULO (36ª EDIÇÃO)</p>
        <span class="evento-data">30 de Maio a 06 de Agosto de 2023</span>
        <span class="evento-local">Conjunto Nacional, Vila Velha</span>

        <a href="" class="evento-detalhes">Ver detalhes</a>
      </li>

      <li class="evento-item">
        <span class="evento-categoria">Congresso</span>
        <p class="evento-titulo">FEIRA E CONGRESSO CIENTÍFICO INTERNACIONAL DA ESTÉTICA</p>
        <span class="evento-data">30 de Maio a 06 de Agosto de 2023</span>
        <span class="evento-local">Conjunto Nacional, Vila Velha</span>

        <a href="" class="evento-detalhes">Ver detalhes</a>
      </li>

      <li class="evento-item">
        <span class="evento-categoria">Capacitação</span>
        <p class="evento-titulo">FEIRA MEGA ARTESANAL</p>
        <span class="evento-data">30 de Maio a 06 de Agosto de 2023</span>
        <span class="evento-local">Conjunto Nacional, Vila Velha</span>

        <a href="" class="evento-detalhes">Ver detalhes</a>
      </li>
    </ul>
  </div>  
</section>


<script src="scripts/vendor/select2.min.js"></script>
<script src="scripts/script-filtro.js"></script>

<!-- <script>
  $(document).ready(function() {
    $('.filtro-select').select2();
  });
</script> -->

<?php require_once('components/component-footer.php') ?>