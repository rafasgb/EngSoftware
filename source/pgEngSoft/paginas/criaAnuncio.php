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
    <link rel="stylesheet" type="text/css" href='../estilo/estiloCriaAnuncio.css'/>
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
        <form  method='post' action='../banco/bancopost.php?bt=cad'>
            <p>Titulo</p>
            <input type="text" name="titulo"/>
            <p>Curso ou Matéria</p>
            <select name='curso'>
                <option value=''> </option>
                <option value='ciencia da computacao'>Ciência da computação</option>
                <option value='engenharia de software'>Engenharia de software</option>
            </select>
            <p>Valor</p>
            <input type="number" name="valor" placeholder="0" >
            <p>Descrição</p>
            <textarea name='desc'></textarea>
            <p>Tipo</p>
            <select name='tipo'>
                <option value=''> </option>
                <option value='grupo'>Grupo</option>
                <option value='individual'>Individual</option>
            </select>
            <button class='leftButton'>Criar anúncio</button>
            <button class='rightButton' form='voltar'>Voltar</button>
        </form>
        <form id='voltar' action='perfil.html'></form>
    </div>
</body>
</html>