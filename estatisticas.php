<?php
$stylesheet = 'estatisticas';
$page_title = 'Estatísticas - ' . $_GET['perfil'] . ' | Painel do Empreendedor';
$page = 'Estatísticas';
require_once('components/component-header.php');
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


<!-- <link rel="stylesheet" href="css/vendor/select2.min.css"> -->


<section id="dashboard-nav">
  <?php
  $versao = 'desktop';
  include('components/component-dashboard-nav.php')
  ?>

  <section id="dashboard-content">
    <main>
      <?php
      $versao = 'mobile';
      include('components/component-dashboard-nav.php')
      ?>

      <div class="container main-container">
        <?php
        require_once('components/component-breadcrumb.php');
        ?>

        <h1 class="dashboard-title">Veja estatísticas sobre o artesanato em <strong id="dashboard-title__estado">Afonso Cláudio</strong></h1>

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

    <section id="estatisticas">
      <div class="container">
        <div class="estatisticas-mapa-resultado">
          <article class="estatisticas-mapa resultado-box-mapa">
            <div class="fallback-mapa" id="map"></div>
          </article>

          <article class="estatisticas-resultado resultado-label-box">
            <div class="resultado-label">
              <p>Informações do estado</p>
            </div>

            <div class="resultado-box">
              <ul>
                <li>Nome: <strong> Afonso Cláudio</strong></li>
                <li>Código IBGE: <strong>3200102</strong></li>
                <li>População: <strong>31.000</strong></li>
                <li>Densidade de CNPJs: <strong>12345</strong></li>
              </ul>
            </div>
          </article>
        </div>

        <ul class="estatisticas-dados">
          <li>
            <article class="resultado-label-box">
              <div class="resultado-label">
                <p>Trabalho e rendimento</p>
              </div>

              <div class="resultado-box text-block">
                <p>Em 2020, o salário médio mensal era de 2.2 salários mínimos. A proporção de pessoas ocupadas em relação à população total era de 27.7%. Na comparação com os outros municípios do estado, ocupava as posições 7 de 78 e 7 de 78, respectivamente. Já na comparação com cidades do país todo, ficava na posição 1177 de 5570 e 660 de 5570, respectivamente. Considerando domicílios com rendimentos mensais de até meio salário mínimo por pessoa, tinha 31.8% da população nessas condições, o que o colocava na posição 71 de 78 dentre as cidades do estado e na posição 4330 de 5570 dentre as cidades do Brasil.</p>
              </div>
            </article>
          </li>

          <li>
            <article class="resultado-label-box">
              <div class="resultado-label">
                <p>Trabalho e rendimento</p>
              </div>

              <div class="resultado-box text-block">
                <p>Em 2020, o salário médio mensal era de 2.2 salários mínimos. A proporção de pessoas ocupadas em relação à população total era de 27.7%. Na comparação com os outros municípios do estado, ocupava as posições 7 de 78 e 7 de 78, respectivamente. Já na comparação com cidades do país todo, ficava na posição 1177 de 5570 e 660 de 5570, respectivamente. Considerando domicílios com rendimentos mensais de até meio salário mínimo por pessoa, tinha 31.8% da população nessas condições, o que o colocava na posição 71 de 78 dentre as cidades do estado e na posição 4330 de 5570 dentre as cidades do Brasil.</p>
              </div>
            </article>
          </li>

          <li>
            <article class="resultado-label-box">
              <div class="resultado-label">
                <p>Trabalho e rendimento</p>
              </div>

              <div class="resultado-box text-block">
                <p>Em 2020, o salário médio mensal era de 2.2 salários mínimos. A proporção de pessoas ocupadas em relação à população total era de 27.7%. Na comparação com os outros municípios do estado, ocupava as posições 7 de 78 e 7 de 78, respectivamente. Já na comparação com cidades do país todo, ficava na posição 1177 de 5570 e 660 de 5570, respectivamente. Considerando domicílios com rendimentos mensais de até meio salário mínimo por pessoa, tinha 31.8% da população nessas condições, o que o colocava na posição 71 de 78 dentre as cidades do estado e na posição 4330 de 5570 dentre as cidades do Brasil.</p>
              </div>
            </article>
          </li>

          <li>
            <article class="resultado-label-box">
              <div class="resultado-label">
                <p>Trabalho e rendimento</p>
              </div>

              <div class="resultado-box text-block">
                <p>Em 2020, o salário médio mensal era de 2.2 salários mínimos. A proporção de pessoas ocupadas em relação à população total era de 27.7%. Na comparação com os outros municípios do estado, ocupava as posições 7 de 78 e 7 de 78, respectivamente. Já na comparação com cidades do país todo, ficava na posição 1177 de 5570 e 660 de 5570, respectivamente. Considerando domicílios com rendimentos mensais de até meio salário mínimo por pessoa, tinha 31.8% da população nessas condições, o que o colocava na posição 71 de 78 dentre as cidades do estado e na posição 4330 de 5570 dentre as cidades do Brasil.</p>
              </div>
            </article>
          </li>
        </ul>
      </div>
    </section>
  </section>
</section>


<script src="scripts/script-filtro.js"></script>
<script type="module" src="scripts/script-map.js"></script>

<?php require_once('components/component-footer.php') ?>