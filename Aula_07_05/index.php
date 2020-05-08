<!DOCTYPE html>
<html>
		<head>
			<title>Titulo na aba do navegador</title>
		</head>
		<body>
			<h1>Titulo da pagina</h1>
			<?php include_once "header.php";?>
			<p></p>
			<a href="index.php?pagina=quemsomos"> Quem somos <a/><br>
			<a href="index.php?pagina=contatos"> Contatos <a/><br>
			<a href="index.php?pagina=servicos"> Servicos <a/><br>
			<a href="index.php?pagina=home"> Home <a/><br>

			<?php
			    $pagina = $_GET["pagina"];
			    include_once $pagina.".php";
			?>
		</body>
		<p></p>
		<footer>
			<?php include_once "footer.php";?>
		</footer>
</html>