<?PHP

require_once('../conexao/banco.php');

$codigo = $_REQUEST['ser_codigo'];
$sql = "select * from tb_servicos where ser_codigo = '$codigo'";
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
            <form name="frm_servico" action="atualizar_servico.php" method="post">
                <div id="principal">
                    <h1> ATUALIZAR SERVIÇO </h1>
                    <label> Código </label>
                    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['ser_codigo']; ?>">

                    <label> Título </label>
                    <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['ser_titulo']; ?>">

                    <label> Descrição </label>
                    <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['ser_descricao']; ?>">
                    
                    <label> Ícone </label>
                    <input name="txt_icone" type="text" class="input_01" value="<?php echo $dados['ser_icone']; ?>">

                    <input name="btn_enviar" type="submit" class="btn">
                </div>
            </form>
        </body>
    </html>
