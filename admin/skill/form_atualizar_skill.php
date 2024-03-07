<?PHP

require_once('../conexao/banco.php');

$codigo = $_REQUEST['ski_codigo'];
$sql = "select * from tb_skill where ski_codigo = '$codigo'";
$sql = mysqli_query($con, $sql) or die ("Erro no sql!");
$dados = mysqli_fetch_array($sql);
?>

<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title> Formulário Skill </title>
            <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
        </head>

        <body>
            <form name="frm_skill" action="atualizar_skill.php" method="post">
                <div id="principal">
                    <h1> ATUALIZAR SKILL </h1>
                    <label> Código </label>
                    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['ski_codigo']; ?>">

                    <label> Descrição </label>
                    <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['ski_descricao']; ?>">

                    <label> Porcentagem </label>
                    <input name="txt_porcentagem" type="text" class="input_01" value="<?php echo $dados['ski_porcentagem']; ?>">

                    <input name="btn_enviar" type="submit" class="btn">
                </div>
            </form>
        </body>
    </html>
