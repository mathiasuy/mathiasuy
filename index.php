<!DOCTYPE html>
<html>
<head>
	<html lang="es">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Mathias Battistella</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.btn{
		  margin: 13px 12px 12px 10px;
		}

	</style>
</head>
<body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="http://www.googletagmanager.com/gtag/js?id=UA-112110069-4"></script>

	<nav>
		<ul>
			<li><a href="http://so.mb.uy">Material de Sistemas operativos (FING)</a></li>
			<li><a href="http://tl.mb.uy">Material de Teoría de Lenguajes (FING)</a></li>
		 	<li><a href="http://tv.mb.uy">TV en vivo</a></li>
		 	<li><a href="http://mtvuy.000webhost.com">Back de TV en vivo</a></li>
		 	<li><a href="http://segundointento.azurewebsites.net">YinYin</a></li>
		 	<li><a href="http://portaln.azurewebsites.net">PortalN</a></li>
		 	<li><a href="http://catedras.azurewebsites.net">Catedras (MVC 5)</a></li>
		 	<li><a href="http://mathiasb.azurewebsites.net">mathiasb</a></li>
		 	<li><a href="http://ushop.azurewebsites.net">ushop</a></li>
		 	<li><a href="http://github.com/mathiasuy">Github/mathiasuy</a></li>
		 	<li><a href="http://gitlab.fing.edu.uy/mathias">Gitlab/mathiasuy</a></li>
		 	<li><a href="https://profile.codersrank.io/user/mathiasuy">CodersRank/mathiasuy</a></li>
		 	<li><a href="https://jtom.mooo.com:8003">Grabador de radios</a></li>
		 	<li><a href="https://jtom.mooo.com:8004">Agenda</a></li>
		 	<li><a href="https://jtom.mooo.com:8005">Calendario</a></li>
		 	<li><a href="https://jtom.mooo.com">Otro front</a></li>
		</ul>
	</nav>

	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112110069-4');
	</script>

	<?php 
		echo "<h1>api-automotoras (java)</h1>";

		$json=file_get_contents("http://jtom.mooo.com:8001/ejemplo/vehiculos");
		$data =  json_decode($json);

		echo "<br>";
		print_r($json);
		echo "<br>";
		print_r($data);
		echo "<br>";


		echo "<h1>api-petshopp (java)</h1>";

		echo "<br>";

		$json=file_get_contents("http://jtom.mooo.com:8002/pet/get/1");
		echo "<br>";

		$data =  json_decode($json);

		print_r($data);

		
	 ?>
	 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
