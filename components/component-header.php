<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/<?php echo $stylesheet ?>.min.css">
  <title><?php echo $page_title ?></title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!-- jQuery base library needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> 

</head>

<body>

  <header>
    <div class="container">
      <div class="logo-container">
        <a href="index.php" id="header-logo">Painel do Empreendedor</a>
      </div>

      <button id="menu">
        <div></div>
        <span class="hide">menu</span>
      </button>

      <nav id="header-nav">
        <ul id="internal-nav">
          <li><a href="index.php">Início</a></li>
          <li><a href="">Público</a></li>
          <li><a href="">Microcrédito</a></li>
          <li><a href="sobre.php">Sobre o Painel</a></li>
        </ul>

        <!-- <ul id="user-nav">
          <li><button><span class="hide">Notificações</span></button></li>
          <li><button><span class="hide">dúvidas frequentes</span></button></li>
          <li></li>
        </ul> -->
      </nav>
    </div>
  </header>