<?php
	
	session_start();

	// Objeto PDO
	$pdo = new PDO( "mysql:host=localhost", "root", "" );

	/* Funções auxiliares */
	function verifica( $pdo, $login, $senha ){
		echo $login;
		echo $senha;
		$verifica = $pdo->prepare( "SELECT UNIQUE_ID FROM ENGSOFTWARE.LOGIN WHERE LOGIN=:l AND SENHA=:s" );
		$verifica->bindValue( ':l', $login );
		$verifica->bindValue( ':s', $senha );
		$verifica->execute();
		echo $verifica->rowCount();
		if( $verifica->rowCount() == 1 ){
			$result = $verifica->fetch( PDO::FETCH_BOTH );
			// Definir variavel de sessão com o id do usuario
			$_SESSION['unique_id'] = $result[0];
			return true;
		}
		return false;
	}


	$bt = $_GET['bt'];

	if( $bt == "login" ){
		// aquisiçaõ dos dados recebidos
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$nSenha = md5( $senha);
		if( verifica( $pdo, $login, $nSenha ) ){
			echo "<script>location.href='../internaInicial.php';</script>";
		}else{
			echo "<script>location.href='../paginaInicial.php';</script>";
		}
	}else if ( $bt == "cadastro" ){
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);
		$email = $_POST['email'];
		$insere = $pdo->prepare( "INSERT INTO ENGSOFTWARE.LOGIN( LOGIN, SENHA, EMAIL ) VALUES ( :l, :s, :e )" );
		$insere->bindValue( ':l', $login );
		$insere->bindValue( ':s', $senha );
		$insere->bindValue( ':e', $email );
		$insere->execute();
		if( verifica( $pdo, $login, $senha ) ){
			echo "<script>location.href='../internaInicial.php';</script>";
		}else{
			echo "<script>location.href='../paginaInicial.php';</script>";
		}
	}else{
		echo "<script>location.href='layoutVertical.html';</script>";
	}
?>