<?php
require_once"conexao.php";

	include_once"menu.php";
	
$sql = "SELECT * FROM contato";
$cmd = $conn->prepare($sql);
$cmd->execute();
$todos = $cmd->fetchAll();

foreach ($todos as $registro) {
	echo $registro["nome"]."<br>";
	echo $registro["email"]."<br>";
	echo $registro["senha"]."<br>";
	echo "<a href='form_alterar.php?id_contato=".$registro['id_contato']."'>alterar</a> &nbsp;";
	echo "<a href='excluir.php?id_contato=".$registro['id_contato']."'>excluir</a><br><hr>";


}

?>