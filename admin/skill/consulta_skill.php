 <?PHP

require_once('../conexao/banco.php');

$sql = "select * , date_format(ski_data_cadastro,'%d/%m/%Y') as data from tb_skill";
$sql = mysqli_query($con, $sql) or die ("Erro no sql!");

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Consulta Skill </title>
        <link rel="stylesheet" type = "text/css"  href="../css/consulta.css">
    </head>

    <script type="text/javascript">   

    function excluir_registro() {

        if(!confirm('Deseja realmente excluir este registro?') 

    ){

        if(window.event)

            window.event.returnValue=false;

        else

            e.preventDefault();

     }

    }

    </script>

<body>

    <div id = "principal">

        <div class = "linha">
            <div class = "coluna_01"> <strong> Código </strong> </div>
            <div class = "coluna_03"> <strong> Descrição </strong> </div>
            <div class = "coluna_02"> <strong> Porcentagem </strong> </div>
            <div class = "coluna_03"> <strong> Data </strong> </div>
        </div>

        <?PHP while ($dados = mysqli_fetch_array($sql)) { ?>

            <div class="linha">

                <div class = "coluna_01"> <?php echo $dados['ski_codigo']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['ski_descricao']; ?> </div>
                <div class = "coluna_02"> <?php echo $dados['ski_porcentagem']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['data']; ?> </div>

                <div class = "coluna_01">
                    <a href = "delete_skill.php?ski_codigo=<?php echo $dados['ski_codigo']; ?>" onclick="excluir_registro(event)">
                        <img src = "../img/excluir.png">
                    </a>
                </div>

                <div class = "coluna_01">
                    <a href = "form_atualizar_skill.php?ski_codigo=<?php echo $dados['ski_codigo']; ?>">
                        <img src = "../img/edit.png">
                    </a>
                </div>
    
            </div>
            
        <?php } ?>

</div>
</body>
</html>
