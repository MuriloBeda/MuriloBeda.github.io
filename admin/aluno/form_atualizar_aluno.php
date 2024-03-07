<?PHP

require_once('../conexao/banco.php');

$codigo = $_REQUEST['alu_codigo'];
$sql = "select * from tb_aluno where alu_codigo = '$codigo'";
$sql = mysqli_query($con, $sql) or die ("Erro no sql!");
$dados = mysqli_fetch_array($sql);
?>

<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title> Formulário Aluno </title>
            <link rel="stylesheet" type="text/css" href="../css/formatacao.css">

            <script> function mascara(t, mask){

var i = t.value.length;
var saida = mask.substring(1,0);
var texto = mask.substring(i)

 if (texto.substring(0,1) != saida){
     t.value += texto.substring(0,1);
 }

}</script>
        </head>

        <body>
            <form name="form_atualizar_aluno" action="atualizar_aluno.php" method="post">
                <div id="principal">
                    <h1> ATUALIZAR ALUNO </h1>
                    <label> Código </label>
                    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['alu_codigo']; ?>">

                    <label> Nome </label>
                    <input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['alu_nome']; ?>">

                    <label> Data de nascimento</label>
                    <input name="txt_data_nascimento" type="date" class="input_01" value="<?php echo $dados['alu_data_nascimento']; ?>">
                    
                    <label> Sexo </label>
                    <select name="txt_sexo" class="select_01" value="<?php echo $dados['alu_sexo']; ?>">
                        <option value = "Masculino"> Masculino </option>
                        <option value="Feminino"> Feminino </option>
                    </select>

                    <label> CEP </label>
                    <input name="txt_cep" type="text" onkeypress="mascara(this, '#####-###')" maxlength="9" class="input_01" value="<?php echo $dados['alu_cep']; ?>">

                    <label> Logradouro </label>
                    <input name="txt_logradouro" type="text" class="input_01" value="<?php echo $dados['alu_logradouro']; ?>">

                    <label> Número </label>
                    <input name="txt_numero" type="text" class="input_01" value="<?php echo $dados['alu_numero']; ?>">

                    <label> Complemento </label>
                    <input name="txt_complemento" type="text" class="input_01" value="<?php echo $dados['alu_complemento']; ?>">

                    <label> Cidade </label>
                    <input name="txt_cidade" type="text" class="input_01" value="<?php echo $dados['alu_cidade']; ?>">

                    <label> Estado </label>
                    <input name="txt_estado" type="text" class="input_01" value="<?php echo $dados['alu_estado']; ?>">

                    <label> Email </label>
                    <input name="txt_email" type="text" class="input_01" value="<?php echo $dados['alu_email']; ?>">
                    
                    <label> Telefone </label>
                    <input name="txt_telefone" type="text" onkeypress="mascara(this, '## #####-####')" maxlength="12" class="input_01" value="<?php echo $dados['alu_telefone']; ?>">

                    <label> Celular </label>
                    <input name="txt_celular" type="text" onkeypress="mascara(this, '## #####-####')" maxlength="13" class="input_01" value="<?php echo $dados['alu_celular']; ?>">

                    <label> Escolaridade </label>
                    <input name="txt_escolaridade" type="text" class="input_01" value="<?php echo $dados['alu_escolaridade']; ?>">
                    
                    <label> Série </label>
                    <input name="txt_serie" type="text" class="input_01" value="<?php echo $dados['alu_serie']; ?>">
                    
                    <label> Ano de Conclusão </label>
                    <input name="txt_ano_conclusao" type="text" class="input_01" value="<?php echo $dados['alu_ano_conclusao']; ?>">
                    
                    <label> Escola </label>
                    <input name="txt_escola" type="text" class="input_01" value="<?php echo $dados['alu_escola']; ?>">
                    
                    <label> Objetivo </label>
                    <input name="txt_objetivo" type="text" class="input_01" value="<?php echo $dados['alu_objetivo']; ?>">

                    <input name="btn_enviar" type="submit" class="btn">

                </div>
            </form>
        </body>
    </html>
