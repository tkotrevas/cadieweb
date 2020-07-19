<?php
session_start();
include_once("conexao.php");
$result_usuario = "SELECT * FROM escola WHERE cnpj = '". $_SESSION['cnpj']."'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuarios = mysqli_fetch_assoc($resultado_usuario);

if((!isset ($_SESSION['cnpj']) == true) or (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['cnpj']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
 
$logado = $_SESSION['cnpj'];
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Meus Dados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
					<li><a href="login.php">Perfil</a></li>
					<li><a href="Download.html">Downloads</a></li>
				</ul>
			</nav>
			<section id="post" class="wrapper bg-img">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Meus Dados</h2>						
						</header>
						<div class="content">
							<form method="post" action="processa_alter.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">Nome
										<input type="text" name="nome" id="name" value="<?php echo $row_usuarios['nome']; ?>" placeholder="" />
										</div>
										<div class="6u$ 12u$(xsmall)">Email
										<input type="email" name="email" id="email" value="<?php echo $row_usuarios['email']; ?>" placeholder="" />
										</div>
										<div class="6u$ 12u$(xsmall)">Senha
										<input type="text" name="senha" id="senha" value="<?php echo $row_usuarios['senha']; ?>" placeholder="" />
										</div>
										<div class="6u$ 12u$(xsmall)">CNPJ
										<input type="text" name="cnpj" id="cnpj" value="<?php echo $row_usuarios['cnpj']; ?>" placeholder="" />
										</div>
										<div class="6u$ 12u$(xsmall)">IE
										<input type="text" name="ie" id="ie" value="<?php echo $row_usuarios['ie']; ?>" placeholder="" />
										</div>
										

										
										

									
										
										<div class="6u$ 12u$(medium)">
												
												<p></p>
											<input type="button" value="Voltar" onClick="history.go(-1)">
											<input type="submit" value="Enviar" class="button special">

											
										</div>
										
											
										
									
									</div>
								</form>





						</div>						
					</article>
				</div>
			</section>
			<footer id="footer">
				<div class="inner">

					<h2>Contatos</h2>
					<br>
					<br>
					<ul class="icons">
						<h4>Dúvidas</h4>
						<li><a href="https://api.whatsapp.com/send?phone=5519987317594&text=Ol%C3%A1%20tudo%20bem%3F%20Gostaria%20de%20tirar%20algumas%20d%C3%BAvidas%20sobre%20o%20CADiE" class="icon round fa-whatsapp"><span class="label">Dúvidas</span></a></li>
					</ul>
						<br>
					    <br>
					<ul class="icons">
						<h4>Suporte técnico</h4>
						<li><a href="https://api.whatsapp.com/send?phone=5519995965342&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Preciso%20de%20suporte%20t%C3%A9cnico." class="icon round fa-whatsapp"><span class="label">Suporte técnico</span></a></li>
					</ul>

				</div>
			</footer>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>