<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulário de Aluno </title>
        <link rel="stylesheet" type="text/css" href="../css/formatacao.css">

        <script language="JavaScript">
	
 function mascara(t, mask){

 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 
  if (texto.substring(0,1) != saida){
      t.value += texto.substring(0,1);
  }

 }

 function foco() {
	document.frm_modelo.txt_nome.focus()
}

 function validar_dados() {
	if(document.frm_modelo.txt_nome.value=="") {
        alert ("Você deve preencher o campo RG!");
		document.frm_modelo.txt_nome.focus();

        return false;
  }

	if(document.frm_modelo.txt_nascimento.value=="") {
        alert ("Você deve preencher o campo Nome!");
		document.frm_modelo.txt_nascimento.focus();

        return false;
  }
 }
  
</script>
    </head>

    <body onload="foco()">>
        <form name="form_aluno" action="cadastro_aluno.php" method="post">
        <div id="principal">
            <h1> CADASTRO ALUNO </h1>
            
            <label> Nome </label>
            <input name="txt_nome" type="text" class="input_01">

            <label> Data de nascimento </label>
            <input name="txt_data_nascimento" type="date" class="input_01">

            <label> Sexo </label>
            <select name="txt_sexo"  class="select_01">
                <option value = "Masculino"> Masculino </option>
                <option value="Feminino"> Feminino </option>
            </select>

            <label> RG </label>
            <input type="text" name="rg" onkeypress="mascara(this, '##.###.###.#')" maxlength="12" class="input_01">
    
            <label> CPF </label>
            <input type="text" name="cpf" onkeypress="mascara(this, '###.###.###.##')" maxlength="14" class="input_01">

            <label> CEP </label>
            <input type="text" name="cep" onkeypress="mascara(this, '#####-###')" maxlength="9" class="input_01">

            <label> Logradouro </label>
            <input name="txt_logradouro" type="text" class="input_01">

            <label> Número </label>
            <input name="txt_numero" type="text" class="input_01">

            <label> Complemento </label>
            <input name="txt_complemento" type="text" class="input_01">

            <label> Cidade </label>
            <input name="txt_cidade" type="text" class="input_01">

            <label> Estado </label>
            <select name="txt_estado"  class ="select_01">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
            

            <label> Email </label>
            <input name="txt_email" type="text" class="input_01">
            
            <label> Telefone </label>
            <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12" class="input_01">

            <label> Celular </label>
            <input type="text" name="celular" onkeypress="mascara(this, '## #####-####')" maxlength="13" class="input_01">

            <label> Escolaridade </label>
            <input name="txt_escolaridade" type="text" class="input_01">
            
            <label> Série </label>
            <input name="txt_serie" type="text" class="input_01">
            
            <label> Ano de Conclusão </label>
            <input name="txt_ano_conclusao" type="text" class="input_01">
            
            <label> Escola </label>
            <input name="txt_escola" type="text" class="input_01">
            
            <label> Objetivo </label>
            <input name="txt_escola" type="text" class="input_01">

            <input name="btn_enviar" type="submit" class="btn">
        </div>
        </form>
    </body>
</html>
