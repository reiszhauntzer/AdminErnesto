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
				$nome = NULL;

					include_once("conexão.php");
					$nome = $_POST['nome'];
					$campusimage = $_POST['campusimage'];

						$target_dir = "/var/www/html/saiinfo2018/grupo1/ernesto/images/";
						$target_file = $target_dir.basename($_FILES["imagem"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
											
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["imagem"]["tmp_name"]);
							if($check !== false) {
								echo "O arquivo é uma imagem - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "Esse arquivo não é uma imagem.";
								$uploadOk = 0;
							}
						}

						// Check if file already exists
						if (file_exists($target_file)) {
							echo "Sua imagem não existe!";
							$uploadOk = 0;
						}

						// Check file size
						if ($_FILES["imagem"]["size"] > 500000) {
							echo "Seu arquivo é muito grande!";
							$uploadOk = 0;
						}

						// Allow certain file formats
						if($imageFileType != "jpg") {
							echo "Somente arquivos .JPG podem ser anexados!";
							$uploadOk = 0;
						}

						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							echo "Seu arquivo não foi anexado.";
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
								rename ("$target_file", "$target_dir$nome.jpg");
								echo "O Arquivo ". htmlspecialchars($nome). ".jpg Foi enviado com sucesso!";
							} else {
								echo "Ocorreu um erro no anexo do seu arquivo!";
							}
						}

						$result_usuario = "UPDATE `Campus` SET `imagem` = '/var/www/html/saiinfo2018/grupo1/ernesto/images/$nome.jpg' WHERE `Campus`.`nome` = '$campusimage';";
						$resultado_usuario = mysqli_query($conn, $result_usuario);

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

