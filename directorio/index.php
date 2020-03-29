<!DOCTYPE html>
<html>
<head>
	<html lang="es">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Material para Teoría de lenguajes - FING</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.btn{
		  margin: 13px 12px 12px 10px;
		}

	</style>
</head>
<body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112110069-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112110069-4');
	</script>

	<?php 
		$fowdir= "/";
		$fowwdir= "";
		$directorio = opendir("."); //ruta actual
		$dir = getcwd().$fowdir;
		$url =  "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		// Abre un directorio conocido, y procede a leer el contenido
		echo '<div class="btn-group-vertical">';
		echo '<a  type="button" class="btn btn-info " href=".."">Arriba</a></br></br>';
	    $dh = opendir($dir);
	    while (($file = readdir($dh)) !== false) {
	    	$ruta = $dir.$file;
	    	if (!($file == 'index.php') && !($file == '..') && !($file == '.')) {		
	    		if (is_dir($ruta)){
					echo '<a  type="button" class="btn btn-info " href="'.$fowwdir.$file.'">'.$file ."</a></br></br>";
				}
	    	}
	        //echo "nombre archivo: $file : tipo archivo: " . filetype($dir . $file) . "\n";
	    }
	    $dh = opendir($dir);
	    while (($file = readdir($dh)) !== false) {
	    	$ruta = $dir.$file;
	    	if (!($file == 'index.php') && !($file == '..') && !($file == '.')) {		
	    		if (!is_dir($ruta)){
				    echo '<a  type="button" class="btn btn-primary " href="'.$fowwdir.$file.'">'.$file ."</a></br></br>";
				}
	    	}
	        //echo "nombre archivo: $file : tipo archivo: " . filetype($dir . $file) . "\n";
	    }	    
	    closedir($dh);
		echo '</div>';
	 ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
