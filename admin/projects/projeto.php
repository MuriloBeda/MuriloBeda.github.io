<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulário de Projeto </title>
        <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
    </head>

    <body>
    <form name="frm_projeto" action="cadastro_projeto.php" method="post" enctype="multipart/form-data">

        <div id="principal">
            <h1> CADASTRO DE PROJETO </h1>
            
            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01">

            <label> Foto </label>
            <input name="txt_arquivo" type="file" class="input_01">

            <label> Status </label>
            <select name="txt_status" class="select_01">
                <option value="A"> Ativo </option>
                <option value="I"> Inativo </option> 
            </select>

            <input name="btn_enviar" type="submit" class="btn">
        </div>
        </form>
    </body>
</html>