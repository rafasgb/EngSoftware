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
    <meta name='viewport' content='initial-scale=1'>
    <!-- Icones -->
    <link rel="stylesheet" href='font-awesome/css/font-awesome.min.css'/>
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href='estilo/estiloInicial.css'/>
    <link rel="stylesheet" type="text/css" href='estilo/estiloGlobal.css'/>
    <!-- Scripts -->
    <script type="text/javascript" src="script/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="script/scripts.js"></script>
    <title>Inicial</title>
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
            <a href='paginas/perfil.php'><li><i class="fa fa-user" aria-hidden="true"></i></li></a>
            <a href='internaInicial.php'><li class='optionSelected'><i class="fa fa-search" aria-hidden="true"></i></li></a>
            <a href='paginas/menu.php'><li><i class='fa fa-bars' aria-hidden='true'></i></li></a>
            <a href='paginas/logout.php'><li><i class="fa fa-sign-out" aria-hidden="true"></i></li></a>
        </ul>
    </div>
    <div id='corpo' class='container'>
        <form id='searchForm' method='post' action='paginas/anuncio.php?bt=int'>
            <ul>
                <li id='btMonitor' class='opSelected'>
                    <input type="radio" name="option" value='monitor' id='monitor' checked>
                    Monitor
                </li>
                <li id='btGrupo'>
                    <input type="radio" name="option" value='grupo' id='grupo'>
                    Grupo
                </li>
            </ul>
            <select name='curso'>
                <option value='#'>Curso | Matéria</option>
                <option value='ciencia da computacao'>Ciência da Computação</option>
                <option value='engenharia de software'>Engenharia de Software</option>
            </select>
            <p id='minus' class='valor'><i class="fa fa-minus" aria-hidden="true"></i></p>
            <input class='hidden' id='inputValor' type="text" name="valor" value='0'>
            <p id='numValor' class='valor'>R$ 0</p>
            <p id='plus' class='valor'><i class="fa fa-plus" aria-hidden="true"></i></p>
            <button name='bt' value='buscar'>Buscar</button>
        </form>
    </div>
</body>
</html>