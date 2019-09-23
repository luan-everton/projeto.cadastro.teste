<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>luan%luan</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	include_once"menu.php";
	?>
		
	
	<form action="cadastro.php" method="post">

		<input type='text' name="nome" placeholder="Nome" > <br> 
		<input type='email' name="email" placeholder="email"> <br>
		<input type='password' name="senha" placeholder="senha"> <br>


		<button>enviar</button>

	</form>
	
</body>
</html>