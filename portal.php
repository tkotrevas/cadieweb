<!DOCTYPE HTML>

<html>
	<head>
		<?php
session_start();
if((!isset ($_SESSION['cnpj']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['cnpj']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }

$logado = $_SESSION['cnpj'];

?>
		<title>PORTAL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
			<style type="text/css">
			body {
				background: url(https://empresas.fdc.org.br/assets/images/hero-alinhar.jpg) no-repeat center top fixed;
				-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
			}
		</style>
		
	</head>
	<body class="subpage" style="font-family: 'Comfortaa', cursive;">
			<header id="header" class="alt">
				<div class="logo"> <img src="images/cadie.png" style="width: 47px; height: auto;" class="d-inline-block align-top"></div>
				<a href="#menu"><span>Menu</span></a>
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Página Inicial</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="register.php">Registre-se</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="Download.html">Downloads</a></li>
				</ul>
			</nav>
			<section id="post" class="wrapper bg-img" data-bg="portall.jpg">
				<div class="inner">
					<article class="box">
						<div>
						<input type="image" onclick="location.href='cadastros.php';"src="https://image.flaticon.com/icons/svg/1802/1802743.svg" alt="Submit" width="200" height="200">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="image" onclick="location.href='perfil.php';"src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Settings-5-512.png" alt="Submit" width="200" height="200">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="image" onclick="location.href='alunoprof3.php';"src="https://cordisburgo.cam.mg.gov.br/wp-content/uploads/2018/05/flaticon-relatorio-personalizado-1-e1530813304442.png" alt="Submit" width="200" height="200">
						<BR>
						GESTÃO DE CADASTROS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONFIGURAÇÕES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RELATÓRIOS
						</div>
				</article>
				</div>
			</section>
			

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>