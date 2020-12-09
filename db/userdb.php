<?php 
	session_start();
	include('connection.php');

	$acao = $_REQUEST['acao'];


	switch ($acao) {
		case 'cadastrar':
			
			$nome = $_REQUEST['nome'];
			$email = $_REQUEST['email'];
			$senha = $_REQUEST['senha'];
			$senha = md5($senha);

			$sql = "SELECT * FROM usuario where email = '{$email}';";

			$res = $con->query($sql);
			if ($res->num_rows != 0) {

				$msg = "E-mail já cadastrado.";
				$tipo = "alert-danger";
			}else {
				$sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`, `status`) VALUES ('{$nome}', '{$email}', '{$senha}', 1);";

				$con->query($sql);



				$msg = "Cadastro realizado com sucesso.";
				$tipo = "alert-success";

			}

			header("Location: ../cadastrarse.php?msg={$msg}&tipo={$tipo}");
			
			exit();
			break;

		case 'login':
			
			$email = $_REQUEST['email'];
			$s = $_REQUEST['senha'];
			$s = md5($s);

			$sql = "SELECT * FROM usuario where email = '{$email}';";

			$res = $con->query($sql);

			if ($res->num_rows > 0) {
				$res = $res->FETCH_ASSOC();
				if ($res['senha'] == $s) {
					$_SESSION['nome'] = $res['nome'];
					#deu certo
					$_SESSION['id'] = $res['idUser'];
					$_SESSION['login'] = true;
					$msg = "Seja bem vindo {$res['nome']}";
					$tipo = "alert-success";
				}else {
					$msg = "Senha ou e-mail incorreto.";
					$tipo = "alert-warning";
				}
			} else {
				$msg = "Senha ou e-mail incorreto.";
				$tipo = "alert-warning";
			}


			header("Location: ../index.php?msg={$msg}&tipo={$tipo}");
			exit();
			break;
		
		default:
			# code...
			break;
	}




	
 ?>