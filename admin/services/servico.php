<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulário de Skill </title>
        <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
    </head>

    <body>
        <form name="frm_skill" action="cadastro_servico.php" method="post">
        <div id="principal">
            <h1> CADASTRAR SERVIÇO </h1>
            
            <label> Título </label>
            <input name="txt_titulo" type="text" class="input_01">

            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01">

            <label> Ícone </label>
            <select name="txt_icone"  class="select_01">
                <option value = "bi-briefcase"> Pasta </option>
                <option value = "bi-card-checklist"> Lista de Controle </option>
                <option value = "bi-bar-chart"> Gráfico de Barras </option>
                <option value = "bi-binoculars"> Binóculos </option>
                <option value = "bi-calendar4-week">Calendário </option>
                <option value = "bi-people"> Pessoa </option>
                <option value = "bi-award"> Prêmio </option>
            </select>

            <input name="btn_enviar" type="submit" class="btn">
        </div>
        </form>
    </body>
</html>