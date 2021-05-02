<?php
session_start();
?>

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
			<li><a href="http://200.131.14.132/saiinfo2018/grupo1/ernesto">Home</a></li>
			<li><a href="http://200.131.14.132/saiinfo2018/grupo1/ernesto/processoseletivo.html">Processo Seletivo</a></li>
			<li><a href="http://200.131.14.132/saiinfo2018/grupo1/ernesto/nossaunidade.html">Nossa Unidade</a></li>
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
				<h1>Atualizar dados BD Ernesto - ChatBot</h1>
						<?php
							if(isset($_SESSION['msg'])){
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
						?>
				<br><br>
				<h2>Importar arquivo txt:</h2>

						<form action="processa.php" method="post" enctype="multipart/form-data">
				            <label>Selecione o nome da tabela que será editada:</label>
				            <select  name="tabelaprocessa"> 
							<option selected value="">Selecione</option>
				            <option value="Campus">Campus</option>
				            <option value="Cursos_Superiores">Cursos Tecnicos</option>
				            <option value="Cursos_Tecnicos">Cursos Superiores</option>
				            <option value="ChatBot">ChatBot</option>
				            </select>
				        </form>
						<form action="processa.php" method="post" enctype="multipart/form-data">
							<label>Arquivo</label>
							<input type="file" name="arquivo"><br><br>
							<input type="submit" value="Enviar">	
						</form>
						<br><br><br><br>

				<h2>Consulta a tabela por pesquisa:</h2>

						<form action="consulta.php" method="post" enctype="multipart/form-data">
				            <label>Selecione o nome da tabela que será consultada:</label>
					            <select name="tabelaconsulta"> 
								<option selected value="">Selecione</option>
					            <option value="Campus">Campus</option>
					            <option value="Cursos_Superiores">Cursos Tecnicos</option>
					            <option value="Cursos_Tecnicos">Cursos Superiores</option>
					            <option value="ChatBot">ChatBot</option>					
				            </select>
							<br>
							<label>Escolha um nome para verificar se exite na tabela</label>
							<input type="text" name="nome" required><br>
							<input type="submit" value="Enviar">		
						</form>
						<br><br><br><br>

						<h2>Consulta a tabela completa:</h2>

						<form action="consultatotal.php" method="post" enctype="multipart/form-data">
							<label>Selecione o nome da tabela que será consultada:</label>
					            <select name="tabelaconsulta"> 
								<option selected value="">Selecione</option>
					            <option value="Campus">Campus</option>
					            <option value="Cursos_Superiores">Cursos Tecnicos</option>
					            <option value="Cursos_Tecnicos">Cursos Superiores</option>
					            <option value="ChatBot">ChatBot</option>
				            </select>
							<br>
							<input type="submit" value="Tabela completa">
						</form>
						<br><br><br><br>

				<h2>Importar imagem:</h2>
							<form action="imagemup.php" method="post" enctype="multipart/form-data">
								<label>Upload imagem ->  <input type="file" name="imagem"></label>
								<label>Escolha um nome para a imagem anexada:</label>
								<input type="text" name="nome" required><br>
								<label>Escolha qual campus receberá essa imagem:</label>
								<input type="text" name="campusimage" required><br>
								<input type="submit" value="Enviar">	
							</form>
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