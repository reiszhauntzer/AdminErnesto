<html lang="pt-br">
	<head>
	<title>AdminmyErnesto - ChatBot</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="inicial-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="text/html"; charset= "utf-8">
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">


	<header id="header">
		<a class="logo" href="index.html">AdminmyErnesto</a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>

	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.html">Home</a></li>
			<li><a href="processoseletivo.html">Processo Seletivo</a></li>
			<li><a href="nossaunidade.html">Processo Seletivo</a></li>
			<li><a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/" target="_blank">Pangroup</a></li>
		</ul>
	</nav>

	<!-- Heading -->
	<div id="heading">
		<h1>AdminmyErnesto</h1>
	</div>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<div class="content">
				<?php
					session_start();
					include_once("conexão.php");
					$nome = NULL;

					
					if ($_POST['tabelaconsulta'] == "Campus"){
						if( empty($nome)){
						$sql = "SELECT * FROM Campus";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>NOME</th>";
						echo "<th>ENDEREÇO</th>";
						echo "<th>TELEFONE</th>";
						echo "<th>IMAGEM</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$nome = $registro['nome'];
							$endereco = $registro['endereco'];
							$telefone = $registro['telefone'];
							$imagem = $registro['imagem'];

							echo "<tr>";
							echo "<td>".$nome."</td>";
							echo "<td>".$endereco."</td>";
							echo "<td>".$telefone."</td>";
							echo "<td>".$imagem."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";
						exit(0);
					}
					
					$sql = "SELECT * FROM Campus where nome like '$nome'";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>NOME</th>";
						echo "<th>ENDEREÇO</th>";
						echo "<th>TELEFONE</th>";
						echo "<th>IMAGEM</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$nome = $registro['nome'];
							$endereco = $registro['endereco'];
							$telefone = $registro['telefone'];
							$imagem = $registro['imagem'];

							echo "<tr>";
							echo "<td>".$nome."</td>";
							echo "<td>".$endereco."</td>";
							echo "<td>".$telefone."</td>";
							echo "<td>".$imagem."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";

					}

					elseif ($_POST['tabelaconsulta'] == "ChatBot"){
						if( empty($id)){
						$sql = "SELECT * FROM ChatBot";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>ID</th>";
						echo "<th>QUERIES</th>";
						echo "<th>REPLIES</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$id = $registro['id'];
							$queries = $registro['queries'];
							$replies = $registro['replies'];

							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$queries."</td>";
							echo "<td>".$replies."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";
						exit(0);
					}
					
					$sql = "SELECT * FROM ChatBot where id like '$id'";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>ID</th>";
						echo "<th>QUERIES</th>";
						echo "<th>REPLIES</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$id = $registro['id'];
							$queries = $registro['queries'];
							$replies = $registro['replies'];

							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$queries."</td>";
							echo "<td>".$replies."</td>";
							echo "</tr>";
							
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";

					}

					elseif ($_POST['tabelaconsulta'] == "Cursos_Superiores"){
						if( empty($nomeS)){
						$sql = "SELECT * FROM Cursos_Superiores";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>ID/th>";
						echo "<th>NOME</th>";
						echo "<th>DURAÇÃO</th>";
						echo "<th>CAMPUS</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$id = $registro['id'];
							$nomeS = $registro['nomeS'];
							$duracaoS = $registro['duracaoS'];
							$campusS = $registro['campusS'];

							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$nomeS."</td>";
							echo "<td>".$duracaoS."</td>";
							echo "<td>".$campusS."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";
						exit(0);
					}
					
					$sql = "SELECT * FROM Cursos_Superiores where nomeS like '$nomeS'";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>ID/th>";
						echo "<th>NOME</th>";
						echo "<th>DURAÇÃO</th>";
						echo "<th>CAMPUS</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$id = $registro['id'];
							$nomeS = $registro['nomeS'];
							$duracaoS = $registro['duracaoS'];
							$campuS = $registro['campuS'];

							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$nomeS."</td>";
							echo "<td>".$duracaoS."</td>";
							echo "<td>".$campuS."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";
					}

					elseif ($_POST['tabelaconsulta'] == "Cursos_Tecnicos"){
						if( empty($nomeT)){
						$sql = "SELECT * FROM Cursos_Tecnicos";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>ID/th>";
						echo "<th>NOME</th>";
						echo "<th>DURAÇÃO</th>";
						echo "<th>CAMPUS</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$id = $registro['id'];
							$nomeT = $registro['nomeT'];
							$duracaoT = $registro['duracaoT'];
							$campusT = $registro['campusT'];

							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$nomeT."</td>";
							echo "<td>".$duracaoT."</td>";
							echo "<td>".$campusT."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";
						exit(0);
					}
					
					$sql = "SELECT * FROM Cursos_Tecnicos where nomeT like '$nomeT'";
						$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
						echo "<table border=1>";
						echo "<tr>";
						echo "<th>ID/th>";
						echo "<th>NOME</th>";
						echo "<th>DURAÇÃO</th>";
						echo "<th>CAMPUS</th>";
						echo "</tr>";

						while ($registro = mysqli_fetch_array($resultado))
						{
							$id = $registro['id'];
							$nomeT = $registro['nomeT'];
							$duracaoT = $registro['duracaoT'];
							$campuT = $registro['campuT'];

							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$nomeT."</td>";
							echo "<td>".$duracaoT."</td>";
							echo "<td>".$camposT."</td>";
							echo "</tr>";
						}
						mysqli_close($conn);
						echo "</table>";
					}

				?>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="inner">
			<div class="content">
				<section>
					<h3>Ernesto Chatbot - PanGroup</h3>
					<p>Todos os direitos reservados a comunidade PanGroup@2021.</p>
				</section>
				<section>
					<h4>Sobre nos:</h4>
					<ul class="alt">
						<li><a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/#intro">Conheça a PanGroup</a></li>
						<li><a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/#services">Nossos trabalhos</a></li>
						<li><a href="https://www.ifmg.edu.br/sabara">Nosso campus</a></li>
					</ul>
				</section>
				<section>
					<h4>Siga nosso campus nas redes sociais:</h4>
					<ul class="plain">
						<li><a href="https://pt-br.facebook.com/IfmgCampusSabara"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
						<li><a href="https://www.instagram.com/ifmgsabara/?hl=pt-br"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
						<li><a href="#"><i class="icon fa-youtube">&nbsp;</i>Youtube</a></li>
					</ul>
				</section>
			</div>
			<div class="copyright">
				&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
			</div>
		</div>
	</footer>

<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>

