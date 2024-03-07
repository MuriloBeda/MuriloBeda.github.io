<?PHP

require_once('../conexao/banco.php');

$codigo = $_REQUEST['pro_codigo'];
$sql = "select * from tb_projetos where pro_codigo = '$codigo'";
$sql = mysqli_query($con, $sql) or die ("Erro no sql!");
$dados = mysqli_fetch_array($sql);
?>

<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title> Formulário Projeto </title>
            <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
        </head>

        <body>
            <form name="frm_projeto" action="atualizar_projeto.php" method="post">
                <div id="principal">
                    <h1> ATUALIZAR PROJETO </h1>
                    <label> Código </label>
                    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['pro_codigo']; ?>">

                    <label> Descrição </label>
                    <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['pro_descricao']; ?>">

                    <label> Foto </label>
                    <input name="txt_arquivo" type="text" class="input_01" value="<?php echo $dados['pro_foto']; ?>">
                    
                    <label> Status </label>
                    <input name="txt_status" type="text" class="input_01" value="<?php echo $dados['pro_status']; ?>">

                    <input name="btn_enviar" type="submit" class="btn">
                </div>
            </form>
        </body>
    </html>
