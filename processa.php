<?php
session_start();

//Incluir Conexão com o BD
	include_once("conexão.php");

//Recebendo dados do formulário
	//$arquivo = $_FILES['arquivo'];
	//var_dump($arquivo);
	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//Ler os dados do .txt em vetores
	$dados = file($arquivo_tmp);

//var_dump($dados -- CAMPUS);
	if ($_POST['tabelaprocessa'] = "Campus"){

		foreach($dados as $linha){
			$linha = trim($linha);
			$valor = explode(',', $linha);
			var_dump($valor);

			$nome = $valor[0];
			$endereco = $valor[1];
			$telefone = $valor[2];
			$imagem = $valor[3];

			$result_usuario = "INSERT INTO Campus (nome, endereco, telefone, imagem) VALUES ('$nome', '$endereco', '$telefone', '$imagem')";

			$resultado_usuario = mysqli_query($conn, $result_usuario);

		}
	}

//var_dump($dados -- ChatBot);	
	elseif ($_POST['tabelaprocessa'] = "ChatBot"){

		foreach($dados as $linha){
			$linha = trim($linha);
			$valor = explode(',', $linha);
			var_dump($valor);

			$id = $valor[0];
			$queries = $valor[1];
			$replies = $valor[2];

			$result_usuario = "INSERT INTO ChatBot (id, queries, replies) VALUES ('$id', '$queries', '$replies')";

			$resultado_usuario = mysqli_query($conn, $result_usuario);

		}
	}

//var_dump($dados -- Cursos_Superiores);	
	elseif ($_POST['tabelaprocessa'] = "Cursos_Superiores"){

		foreach($dados as $linha){
			$linha = trim($linha);
			$valor = explode(',', $linha);
			var_dump($valor);

			$id = $valor[0];
			$nomeS = $valor[1];
			$duracaoS = $valor[2];

			$result_usuario = "INSERT INTO Cursos_Superiores (id, nomeS, duracaoS) VALUES ('$id', '$nomeS', '$duracaoS', '$campusS')";

			$resultado_usuario = mysqli_query($conn, $result_usuario);

		}
	}

//var_dump($dados -- Cursos_Tecnicos);	
	elseif ($_POST['tabelaprocessa'] = "Cursos_Tecnicos"){

		foreach($dados as $linha){
			$linha = trim($linha);
			$valor = explode(',', $linha);
			var_dump($valor);

			$id = $valor[0];
			$nomeT = $valor[1];
			$duracaoT = $valor[2];

			$result_usuario = "INSERT INTO Cursos_Tecnicos (id, nomeT, duracaoT) VALUES ('$id', '$nomeT', '$duracaoT')";

			$resultado_usuario = mysqli_query($conn, $result_usuario);

		}
	}

	else {
		echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
	}

	$_SESSION['msg'] = "<p style='color: green;'>Dados carregados com sucesso</p>";
	header("Location: index.php");
?>

