<?php
require_once('../conexao/banco.php');

$codigo = $_REQUEST['ser_codigo'];

$sql = "delete from tb_servicos where ser_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro no sql!");

header("Location: consulta_servico.php");

?>