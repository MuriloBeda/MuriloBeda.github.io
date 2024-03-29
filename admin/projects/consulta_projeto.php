<?PHP

require_once('../conexao/banco.php');

$sql = "select *, date_format(pro_data_cadastro,'%d/%m/%Y') as data from tb_projetos";
$sql = mysqli_query($con, $sql) or die ("Erro no sql!");

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Consulta Projetos </title>
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
            <div class = "coluna_03"> <strong> Foto </strong> </div>
            <div class = "coluna_02"> <strong> Status </strong> </div>
            <div class = "coluna_03"> <strong> Data </strong> </div>
        </div>

        <?PHP while ($dados = mysqli_fetch_array($sql)) { ?>

            <div class="linha">

                <div class = "coluna_01"> <?php echo $dados['pro_codigo']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['pro_descricao']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['pro_foto']; ?> </div>
                <div class = "coluna_02"> <?php echo $dados['pro_status']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['data']; ?> </div>

                <div class = "coluna_01">
                    <a href = "delete_projeto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>" onclick="excluir_registro(event)">
                        <img src = "../img/excluir.png">
                    </a>
                </div>

                <div class = "coluna_01">
                    <a href = "form_atualizar_projeto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
                        <img src = "../img/edit.png">
                    </a>
                </div>
    
            </div>
            
        <?php } ?>

</div>
</body>
</html>
