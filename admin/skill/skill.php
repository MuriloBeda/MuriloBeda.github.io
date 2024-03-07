<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulário de Skill </title>
        <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
    </head>

    <body>
        <form name="frm_skill" action="cadastro_skill.php" method="post">
        <div id="principal">
            <h1> CADASTRAR SKILL </h1>
            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01">

            <label> Porcentagem </label>
            <select name="txt_porcentagem"  class="select_01">
                <option value = "0"> 0% </option>
                <option value = "10"> 10% </option>
                <option value = "20"> 20% </option>
                <option value = "30"> 30% </option>
                <option value = "40"> 40% </option>
                <option value = "50"> 50% </option>
                <option value = "60"> 60% </option>
                <option value = "70"> 70% </option>
                <option value = "80"> 80% </option>
                <option value = "90"> 90% </option>
                <option value = "100"> 100% </option>
            </select>

            <input name="btn_enviar" type="submit" class="btn">
        </div>
        </form>
    </body>
</html>