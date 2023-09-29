<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/<?php echo $stylesheet ?>.min.css">
  <title><?php echo $page_title ?></title>

</head>

<body>

  <header>
    <div class="header-container">
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
          <li id="publico-nav">
            <a href="" id="publico-nav-button">Público</a>
            <ul id="publico-nav-lista">
              <li><a href="publico.php?perfil=Empreendedores">Empreendedores</a></li>
              <li><a href="publico.php?perfil=Artesãos">Artesãos</a></li>
              <li><a href="publico.php?perfil=Catadores">Catadores</a></li>
            </ul>
          </li>
          <li><a href="">Microcrédito</a></li>
          <li><a href="sobre.php">Sobre o Painel</a></li>
        </ul>

        <ul id="user-nav">
          <li><button id="user-notificacao"><span class="hide">Notificações</span></button></li>
          <li><button id="user-faq"><span class="hide">dúvidas frequentes</span></button></li>
          <li><button id="user-select">Fulano</button></li>
        </ul>
      </nav>
    </div>
  </header>