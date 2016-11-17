<?php
    /*session_start();
    if( isset($_SESSION['unique_id']) ){
        echo "<script>location.href='internaInicial.php';</script>";
    }*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    <link rel="stylesheet" type="text/css" href="estilo/estiloPagInicial.css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
    <script type="text/javascript" src='script/jquery-3.1.0.min.js'></script>
    <script type="text/javascript" src='script/scriptInicial.js'></script>
    <title>Teste Layout Vertical</title>
</head>
<body>
    <!-- Topo -->
        <div id='topo' class='container'>
            <span>ThinkShare</span>
            <a id='btActLogin'>Login</a>
        </div>

    <div id='divLogin' class='container hide'>
        <p> Login </p>
        <div id='divIntLogin'>
            <form method="post" action="conexaobanco.php?bt=login">    
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="senha" placeholder="Senha">
                <button>Entrar</button>
            </form>
        </div>
        <button class='btCreateAcc'> Criar nova conta </button>
        <span><a href="">Esqueceu sua senha?</a> | <a href="">Central de ajuda</a></span>
        <div id='btCloseLogin' class='btClose'>
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    </div>

    <div id='menuInicial' class='container hide'>
        <p> Menu </p>
        <a href="">
            Reportar bug
        </a>
        <a href="">
            Contato
        </a>
        <div id='btCloseMenuInicial' class='btClose'>
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    </div>

    <!-- Botões do corpo - menu e rolagem -->
        <div id='btMenu'>
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class='btBody'>
            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </div>


    <!-- Corpo -->
        <div id='cp1' class='container'>
            <p>Encontre de forma fácil, rápida e gratuita um tutor, grupo ou aluno para passar nas matérias!</p>
            <form method='post' action='paginas/anuncio.php?bt=inic'>
                <select name='curso'>
                    <option value=''> Curso | Departamento </option>
                    <option value='ciencia da computacao'>Ciência da Computação</option>
                    <option value='engenharia de software'>Engenharia de Software</opttion>
                </select>
                <button>
                    Buscar
                </button>
            </form>
        </div>
        <div id='cp2' class='container'>
            <div>
                <i class="fa fa-male" aria-hidden="true"></i>
                <p>Consiga um tutor ou um aluno</p>
            </div>
            <div>
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                <p>Melhore suas notas</p>
            </div>
            <div>
                <i class="fa fa-users" aria-hidden="true"></i>
                <p>Encontre pessoas</p>
            </div>
        </div>
        <div id='cp3' class='container'>
            <p>Cadastre-se gratuitamente.</p>
            <form method="post" action="banco/conexaobanco.php?bt=cadastro">
                <input type="text" name="login" placeholder="Login"/>
                <input type="email" name="email" placeholder="E-mail"/>
                <input type="password" name="senha" placeholder="Senha"/>
                <button>Cadastrar</button>
            </form>
        </div>
</body>
</html>