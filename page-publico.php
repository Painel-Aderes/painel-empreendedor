<?php
$stylesheet = 'publico';
$page_title = 'Perfil do ' . $perfil . ' | Painel do Empreendedor';
require_once('components/component-header.php');
?>

<!-- TODO O CONTEÚDO TEXTUAL DESSA PÁGINA MUDARÁ DE ACORDO COM OS PERFIS -->

<main class="main">
  <div class="container">
    <?php require_once('components/component-breadcrumb.php'); ?>

    <h1>Perfil para <?php echo $perfil ?></h1>

    <p class="texto-lg">Obtenha dados valiosos sobre o mercado de artesanato, eventos e preferências dos consumidores.</p>
  </div>
</main>

<section>
  <div class="container">
    <h2>Descubra como o artesanato pode se transformar em oportunidades de negócio promissoras.</h2>

    <ul>
      <li><a href="">
          <h3>Retire aqui sua licença oficial como artesão</h3>
        </a></li>

      <li><a href="index.php?page=estatisticas&perfil=Artesãos">
          <h3>Navegue pelas estatísticas do artesanato capixaba</h3>
        </a></li>

      <li><a href="">
          <h3>Confira o calendário de eventos completo</h3>
        </a></li>

      <li><a href="">
          <h3>Acesse o microcrédito personalizado para artesãos</h3>
        </a></li>

      <li><a href="">
          <h3>Informe-se sobre o comércio e pontos de venda</h3>
        </a></li>
    </ul>
  </div>
</section>

<?php require_once('components/component-footer.php') ?>