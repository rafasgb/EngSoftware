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
    <meta name='viewport' content='width=device-width; initial-scale=1'>
    <!-- Icones -->
    <link rel="stylesheet" href='../font-awesome/css/font-awesome.min.css'/>
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href='../estilo/estiloGlobal.css'/>
    <link rel="stylesheet" type="text/css" href='../estilo/estiloMenu.css'/>
    <!-- Scripts -->
    <title>Menu</title>
</head>
<body>
    <!-- Topo -->
    <div id='topo' class='container'>
        <ul>
            <a href='perfil.php'><li><i class="fa fa-user" aria-hidden="true"></i></li></a>
            <a href='../internaInicial.php'><li><i class="fa fa-search" aria-hidden="true"></i></li></a>
            <a href='menu.php'><li class='optionSelected'><i class='fa fa-bars' aria-hidden='true'></i></li></a>
            <a href='logout.php'><li><i class="fa fa-sign-out" aria-hidden="true"></i></li></a>
        </ul>
    </div>
    <!-- Corpo -->
    <div id='corpo' class='container'>
        <a href='#'><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a>
        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contato</a>
        <a href=""><i class="fa fa-question" aria-hidden="true"></i>Dúvidas</a>
        <a href='#'><i class="fa fa-bug" aria-hidden="true"></i>Reportar bug</a>
        <a href='#'><i class="fa fa-trash" aria-hidden="true"></i></i>Excluir conta</a>
    </div>
</body>
</html>