<?php
    session_start();
    if( !isset($_SESSION['unique_id']) ){
        echo "<script>location.href='paginaInicial.php';</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'/>
    <meta name='author' content='Fernando de Moraes'/>
    <meta name='viewport' content='initial-scale=1'/>
    <!-- Icones -->
    <link rel="stylesheet" href='../font-awesome/css/font-awesome.min.css'/>
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href='../estilo/estiloGlobal.css'/>
    <link rel="stylesheet" type="text/css" href='../estilo/estiloPerfil.css'/>
    <!-- Scripts -->
    <script type="text/javascript" src="../script/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="../script/scripts.js"></script>
    <title>Perfil</title>
</head>
<body>
    <!-- Menu -->
    <div id='menu' class='container hidden'>
        <a href='#'><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a>
        <a href='#'><i class="fa fa-bug" aria-hidden="true"></i>Reportar bug</a>
        <a href='#'><i class="fa fa-times" aria-hidden="true"></i>Voltar</a>
    </div>
    <!-- Topo -->
    <div id='topo' class='container'>
        <ul>
            <a href='perfil.php'><li  class='optionSelected'><i class="fa fa-user" aria-hidden="true"></i></li></a>
            <a href='../internaInicial.php'><li><i class="fa fa-search" aria-hidden="true"></i></li></a>
            <a href='menu.php'><li><i class='fa fa-bars' aria-hidden='true'></i></li></a>
            <a href='logout.php'><li><i class="fa fa-sign-out" aria-hidden="true"></i></li></a>
        </ul>
    </div>
    <div id='corpo' class='container'>
        <ul>
            <li>
                <img src='../imagens/perfil.jpg'/>
            </li>
            <li>
                <input type="text" id="inputNome" name="nome" placeholder='Norm' disabled>
                <button id='btAltNome' class='btAlt'><i id='imgBtNome' class="fa fa-pencil" aria-hidden="true"></i></button>
            </li>
            <li>
                <input type="text" id="inputCurso" name="curso" placeholder='E-mail' disabled>
                <button form='#' id='btAltCurso' class='btAlt'><i id='imgBtCurso' class="fa fa-pencil" aria-hidden="true"></i></button>
            </li>
            <li>
                <form id='formImg' method='get' action='#'>
                    <input type="text" id="inputImg" name="img" placeholder='perfil.jpg' disabled>
                    <button form='#' id='btAltImg' class='btAlt'><i id='imgBtImg' class="fa fa-pencil" aria-hidden="true"></i></button>
                </form>
            </li>
            <form id="anuncio" action="criaAnuncio.php">
                <button class='btAnuncio'>Criar anúncio</button>
            </form>
        </ul>
    </div>
</body>
</html>