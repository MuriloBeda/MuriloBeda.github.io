<?PHP

require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];

$descricao = $_REQUEST['txt_descricao'];
$porcentagem = $_REQUEST['txt_porcentagem'];


$sql = "update tb_skill set
        ski_descricao = '$descricao',
        ski_porcentagem = '$porcentagem'
        where
        ski_codigo = '$codigo'";

mysqli_query($con, $sql) or die ("Erro no sql!");
header("Location: consulta_skill.php");

?>