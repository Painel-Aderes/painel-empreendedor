<?php
$stylesheet = 'sobre';
$page_title = 'Sobre o Painel do Empreendedor';
require_once('components/component-header.php');
?>

<main class="page-main-section">
  <div class="container">
    <?php 
    $page = 'Sobre';
    require_once('components/component-breadcrumb.php'); 
    ?>

    <h1>Sobre o Painel do Empreendedor</h1>

    <p class="texto-lg">Saiba mais sobre a plataforma de microempreendedorismo e Desenvolvimento no Espírito Santo.</p>
  </div>
</main>

<article>
  <div class="container">
    <h2>Como surgiu o Painel do Empreendedor</h2>

    <p>O Painel do Empreendedor é uma iniciativa inovadora, criada com o intuito de oferecer informações essenciais e serviços estratégicos para os empreendedores capixabas. Nossa missão é capacitar os pequenos e microempresários, artesãos e catadores de lixo, conectando-os com oportunidades de desenvolvimento e acesso ao microcrédito para alavancar seus negócios. Somos um aliado confiável e uma fonte valiosa de conhecimento para impulsionar o empreendedorismo no Espírito Santo.</p>

    <p>Desenvolvido pelo Laboratório Forma em colaboração com a ADERES (Agência de Desenvolvimento das Micro e Pequenas Empresas e do Empreendedorismo) e com o financiamento da FAPES (Fundação de Amparo à Pesquisa e Inovação do Espírito Santo), nosso objetivo é fortalecer os negócios locais e promover o crescimento econômico sustentável.</p>
  </div>
</article>

<?php require_once('components/component-footer.php') ?>
