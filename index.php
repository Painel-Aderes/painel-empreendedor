<?php
$stylesheet = 'index';
$page_title = 'Painel do Empreendedor';
require_once('components/component-header.php')
?>

<main class="main">
  <div class="container">
    <h1 class="display">Impulsionando o desenvolvimento no Espírito Santo</h1>
    <p>Explore recursos sobre o empreendedorismo e progresso capixaba.</p>

    <div class="main-ctas">
      <a href="#microcredito" class="btn-primario --cor-primaria">Acessar microcrédito</a>
      <a href="#servicos" class="btn-primario --borda-primaria">Explorar serviços</a>
    </div>
  </div>
</main>

<section class="index-section" id="microcredito">
  <div class="container">
    <img class="index-section-image" src="https://picsum.photos/592/368?grayscale" alt="">

    <div class="index-section-info">
      <h2>Microcrédito personalizado para você</h2>

      <p class="texto-lg">O suporte financeiro ideal para impulsionar seu negócio com o microcrédito personalizado do Painel do Empreendedor.</p>

      <a href="" class="btn-primario btn-index-after --cor-primaria">Acessar microcrédito</a>
    </div>
  </div>
</section>

<section class="section-perfil" id="servicos">
  <div class="container">
    <h2>Acesse dados estatísticos personalizados para o seu perfil</h2>

    <ul class="perfil-lista">
      <li class="perfil-item">
        <img class="perfil-item-image" src="https://picsum.photos/344/280?grayscale" alt="">

        <div class="perfil-item-info">
          <h3>Perfil do Empreendedor</h3>
          <p class="texto-sm">Descubra informações detalhadas e relevantes sobre o cenário empreendedor do Espírito Santo.</p>

          <a href="publico.php?perfil=Empreendedores" class="btn-primario btn-index-after --cor-primaria">Acessar perfil</a>
        </div>
      </li>

      <li class="perfil-item">
        <img class="perfil-item-image" src="https://picsum.photos/344/280?grayscale" alt="">

        <div class="perfil-item-info">
          <h3>Perfil do Artesão</h3>
          <p class="texto-sm">Obtenha dados valiosos sobre o mercado de artesanato capixaba.</p>

          <a href="publico.php?perfil=Artesãos" class="btn-primario btn-index-after --cor-primaria">Acessar perfil</a>
        </div>
      </li>

      <li class="perfil-item">
        <img class="perfil-item-image" src="https://picsum.photos/344/280?grayscale" alt="">

        <div class="perfil-item-info">
          <h3>Perfil do Catador</h3>
          <p class="texto-sm">Descubra como o trabalho sustentável dos catadores contribui para o crescimento econômico.</p>

          <a href="publico.php?perfil=Catadores" class="btn-primario btn-index-after --cor-primaria">Acessar perfil</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="index-section">
  <div class="container">
    <img class="index-section-image sobre" src="https://picsum.photos/592/368?grayscale" alt="">

    <div class="index-section-info">
      <h2>Conheça o Painel do Empreendedor</h2>

      <p class="texto-lg">O Painel do Empreendedor é uma plataforma abrangente sobre o empreendedorismo e desenvolvimento do estado do Espírito Santo. O Painel disponibiliza estatísticas para diversos perfis de empreendedor, além de também oferecer oportunidades de microcrédito.</p>

      <a href="" class="btn-primario btn-index-after --cor-primaria">Saiba mais</a>
    </div>
  </div>
</section>

<?php require_once('components/component-footer.php') ?>
