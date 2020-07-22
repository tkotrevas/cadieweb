<!DOCTYPE HTML>

<html>
	<head>
		<title>Adicionar Professor</title>
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
			<section id="post" class="wrapper bg-img" >
				<div class="inner">
					<article class="box">
						<header>
							<h2>Adicionar Professor(a):</h2>						
						</header>
						<div class="content">
							<form method="post" action="processa_cad_prof.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
										<input type="text" name="nome" id="nome" value="" placeholder="Nome" />
										<p></p>
										<input type="text" name="materia" id="materia" value="" placeholder="Matéria" />
										<p></p>
										<input type="text" name="turma" id="turma" value="" placeholder="Turma" />							</div>	
									
										<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="E-mail" />
									
										
</div>
									
										<p></p>
										<div class="6u$ 12u$(medium)">
										<input type="button" value="Voltar" onClick="history.go(-1)">
										<input type="submit" value="Enviar" class="button special">
										</div>
										
									</div>
								</form>

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