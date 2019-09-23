<?php 
require_once"conexao.php";

extract($_GET);

$sql = "DELETE FROM contato WHERE id_contato=:id_contato";
$cmd = $conn->prepare($sql);
$cmd->bindParam(":id_contato", $id_contato);
$cmd->execute();
if ($cmd->execute()) {
 	echo "<script>
 	alert('excluido  com sucesso!');
 	window.location.href='consulta.php';

 	</script>";

 }
 else {

 	echo "<script>
 	alert('erro! Não foi possivel excluir');
 	window.location.href='consulta.php';
 	</script>";
 }