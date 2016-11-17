<?php

 	session_start();
 	$pdo = new PDO("mysql:host=localhost", "root", "" );
 	
 	$_SESSION['unique_id'] = 1;
 	$bt = $_GET['bt'];

 	// insersão no banco

 	if( $bt == "cad" ){
 		$titulo = $_POST['titulo'];
 		$curso = $_POST['curso'];
 		$valor = $_POST['valor'];
 		$desc = $_POST['desc'];
 		$tipo = $_POST['tipo'];
 		$data = date('Y-m-d'); // pega o dia
 		// verficar se algum está vazio //

 		// inserção no banco //
 		$insere = $pdo->prepare( "INSERT INTO ENGSOFTWARE.POST( POST_TITULO, POST_MAT, POST_DESC, POST_DATA, POST_VALOR, POST_TIPO ) VALUES ( :t, :c, :d, :dt, :v, :tp ) " );
 		$insere->bindValue( ':t', $titulo );
 		$insere->bindValue( ':c', $curso );
 		$insere->bindValue( ':d', $desc );
 		$insere->bindValue( ':dt', $data );
 		$insere->bindValue( ':v', $valor );
 		$insere->bindValue( ':tp', $tipo );
 		$insere->execute();

 		// relacionar as informações //
 		$busca = $pdo->prepare( "SELECT * FROM ENGSOFTWARE.POST WHERE POST_TITULO=:t AND POST_MAT=:c AND POST_TIPO=:tp");
 		$busca->bindValue( ':t', $titulo );
 		$busca->bindValue( ':c', $curso );
 		$busca->bindValue( ':tp', $tipo );
 		$busca->execute();
 		if( $busca->rowCount() == 1 ){
 			$v = $busca->fetch( PDO::FETCH_BOTH );
 			$insereRel = $pdo->prepare( "INSERT INTO ENGSOFTWARE.REL_USER_POST(UNIQUE_ID, POST_ID) VALUES (:u, :p ) " );
 			$insereRel->bindValue( ':u', $_SESSION['unique_id']);
 			$insereRel->bindValue( ':p', $v[0] );
 			$insereRel->execute();
 		}

 		echo "<script>location.href='../internaInicial.html';</script>";

 	}

?>