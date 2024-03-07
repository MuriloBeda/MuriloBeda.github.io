<?PHP
require_once('../conexao/banco.php');

$titulo = $_REQUEST['txt_titulo'];
$descricao = $_REQUEST['txt_descricao'];
$icone = $_REQUEST['txt_icone'];

$sql = "insert into tb_servicos (ser_titulo, ser_descricao, ser_icone) values ('$titulo', '$descricao', '$icone')";

mysqli_query($con, $sql) or die ("Erro no sql!");

header("Location: atualizar_servico.php");

?>