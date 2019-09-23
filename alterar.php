<?php 
require_once("conexao.php");
extract($_POST);

$sql = "UPDATE contato SET nome=:nome, email=:email, senha=:senha WHERE id_contato=:id_contato";
$cmd = $conn->prepare($sql);
$cmd->bindParam(":nome", $nome);
$cmd->bindParam(":email", $email);
$cmd->bindParam(":senha", $senha);
$cmd->bindParam(":id_contato", $id_contato);
$cmd->execute();

header("Location: consulta.php");
?>