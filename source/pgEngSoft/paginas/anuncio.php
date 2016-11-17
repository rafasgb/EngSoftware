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
    <link rel="stylesheet" type="text/css" href='../estilo/estiloAnuncio.css'/>
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
        <?php
            $pdo = new PDO("mysql:host=localhost", "root", "" );
            $bt = $_GET['bt'];
            if( $bt == "inic" ){
                $curso = $_POST['curso'];
                $dados = $pdo->prepare( "SELECT * FROM ENGSOFTWARE.POST WHERE POST_MAT=:c" );
                $dados->bindValue( ':c', $curso );
                $dados->execute();
                $linhas = $dados->rowCount();
                for( $i=0; $i<$linhas; $i++ ){
                    $v = $dados->fetch( PDO::FETCH_BOTH );
                    if( $v[6] == "grupo" ){
                        echo "
                            <div class='divAnuncio'>
                                <i class=' imagem fa fa-4x fa-users' aria-hidden='true'></i>
                                <p class='title'>".$v[1]."</p>
                                <div class='descricao'>
                                    <p class='txtDsc'>".$v[3]."</p>
                                </div>
                                <p class='info valor'><span>Valor: R$".$v[5].".0</span></p>
                                <p class='info date'><span>Data: ".$v[4]."</span></p>
                                <div class='btLogin'>Informações do tutor</div>
                            </div>
                        ";
                    }else if( $v[6] == "individual" ){
                        echo "
                            <div class='divAnuncio'>
                                <i class=' imagem fa fa-user' aria-hidden='true'></i>
                                <p class='title'>".$v[1]."</p>
                                <div class='descricao'>
                                    <p class='txtDsc'>".$v[3]."</p>
                                </div>
                                <p class='info valor'><span>Valor: R$".$v[5].".0</span></p>
                                <p class='info date'><span>Data: ".$v[4]."</span></p>
                                <div class='btLogin'>Informações do tutor</div>
                            </div>
                        ";
                    }
                }
            }else{
                $option = $_POST['option'];
                $curso = $_POST['curso'];
                $valor = $_POST['valor'];


                $dados = $pdo->prepare( "SELECT * FROM ENGSOFTWARE.POST WHERE POST_TIPO=:pt AND POST_MAT=:c AND POST_VALOR<=:v");
                $dados->bindValue( ':pt', $option );
                $dados->bindValue( ':c', $curso );
                $dados->bindValue( ':v', $valor);
                $dados->execute();
                $linhas = $dados->rowCount();
                for( $i=0; $i<$linhas; $i++ ){
                    $v = $dados->fetch( PDO::FETCH_BOTH );
                    $rel = $pdo->prepare( "SELECT * FROM ENGSOFTWARE.REL_USER_POST WHERE POST_ID=:pid");
                    $rel->bindValue( ':pid', $v[0] );
                    $rel->execute();
                    if( $rel->rowCount() == 1 ){
                        $t = $rel->fetch( PDO::FETCH_BOTH );
                        
                        $tutor = $pdo->prepare( "SELECT * FROM ENGSOFTWARE.LOGIN WHERE UNIQUE_ID=:uid" );
                        $tutor->bindValue( ':uid', $t[0] );
                        $tutor->execute();
                        $dadoTutor = $tutor->fetch( PDO::FETCH_BOTH );
                        if( $v[6] == "grupo" ){
                            echo "
                                <div class='divAnuncio'>
                                    <i class=' imagem fa fa-4x fa-users' aria-hidden='true'></i>
                                    <p class='title'>".$v[1]."</p>
                                    <div class='descricao'>
                                        <p class='txtDsc'>".$v[3]."</p>
                                    </div>
                                    <p class='info valor'><span>Valor: R$".$v[5].".0</span></p>
                                    <p class='info date'><span>Data: ".$v[4]."</span></p>
                                    <p class='info tutor'><span>Tutor:".$dadoTutor[1]."</span></p>
                                    <p class='contato'><span>Contato:".$dadoTutor[3]."</span></p>
                                </div>
                            ";
                        }else if( $v[6] == "individual" ){
                            echo "
                                <div class='divAnuncio'>
                                    <i class=' imagem fa fa-user' aria-hidden='true'></i>
                                    <p class='title'>".$v[1]."</p>
                                    <div class='descricao'>
                                        <p class='txtDsc'>".$v[3]."</p>
                                    </div>
                                    <p class='info valor'><span>Valor: R$".$v[5].".0</span></p>
                                    <p class='info date'><span>Data: ".$v[4]."</span></p>
                                    <p class='info tutor'><span>Tutor: ".$dadoTutor[1]."</span></p>
                                    <p class='contato'><span>Contato: ".$dadoTutor[3]."</span></p>
                                </div>
                            ";
                        }
                    }
                }
            }
        ?>


        
        <!-- <div class='divAnuncio'>
            <i class=" imagem fa fa-4x fa-users" aria-hidden="true"></i>
            <p class='title'>Titulo do anuncio</p>
            <div class='descricao'>
                <p class='txtDsc'>AJFBAIFEBOIAJGBEIAFBAKFAILBEIGJBAOLGIBPAGJBGODAIJAIUGBVPRSJNAPOFJNDAGPURBPIJADPIAJBGEUBFAPFNAPIOGBAP9BFAO</p>
            </div>
            <p class='info'><span>Valor:</span></p>
            <p class='info'><span>Data:</span></p>
            <p class='info'><span>Tutor:</span></p>
            <p class='contato'><span>Contato:</span></p>
            
        </div>
        <div class='divAnuncio'>
            <i class="imagem fa fa-user" aria-hidden="true"></i>
            <p class='title'>Titulo do anuncio</p>
            <div class='descricao'>
                <p class='txtDsc'>AJFBAIFEBOIAJGBEIAFBAKFAILBEIGJBAOLGIBPAGJBGODAIJAIUGBVPRSJNAPOFJNDAGPURBPIJADPIAJBGEUBFAPFNAPIOGBAP9BFAO</p>
            </div>
            <p class='info'><span>Valor:</span></p>
            <p class='info'><span>Data:</span></p>
            <p class='info'><span>Tutor:</span></p>
            <p class='contato'><span>Contato:</span></p>
            
        </div> -->
    </div>
</body>
</html>