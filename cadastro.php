<?php
require_once"conexao.php";
extract($_POST);
$sql = "INSERT INTO contato VALUES (0,:nome,:email,:senha)";
$cmd=$conn->prepare($sql);
$cmd->bindParam(":nome",$nome);
$cmd->bindParam(":email",$email);
$cmd->bindParam(":senha",$senha);	
 if ($cmd->execute()) {
 	echo "<script>
 	alert('cadastrado com sucesso!');
 	window.location.href='index.php';

 	</script>";

 }
 else {

 	echo "<script>
 	alert('erro!');
 	window.location.href='index.php';
 	</script>";
 }


?>