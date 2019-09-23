<?php 
include_once"conexao.php";
extract($_GET);
$sql="SELECT * FROM contato WHERE id_contato = :id_contato";
$cmd=$conn->prepare($sql);
$cmd->bindParam(":id_contato",$id_contato);
$cmd->execute();
$formconsulta = $cmd->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>alterar</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	include_once"menu.php";
	?>
		
	
	<form action="alterar.php" method="post">

        <input type='hidden' name="id_contato" value="<?=$formconsulta[0]['id_contato']?>"> 
		<input type='text' name="nome" placeholder="Nome" value="<?=$formconsulta[0]['nome']?>" > <br> 
		<input type='email' name="email" placeholder="email" value="<?=$formconsulta[0]['email']?>"> <br>
		<input type='password' name="senha" placeholder="senha" value="<?=$formconsulta[0]['senha']?>"> <br>


		<button>Alterar</button>

	</form>
	
</body>
</html>