<?PHP

require_once('../conexao/banco.php');

$sql = "select *, date_format(log_data_cadastro,'%d/%m/%Y') as data from tb_login";
$sql = mysqli_query($con, $sql) or die ("Erro no sql!");

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Consulta Login </title>
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
            <div class = "coluna_01"> <strong> ID </strong> </div>
            <div class = "coluna_03"> <strong> NOME </strong> </div>
            <div class = "coluna_02"> <strong> Login </strong> </div>
            <div class = "coluna_03"> <strong> Data </strong> </div>
        </div>

        <?PHP while ($dados = mysqli_fetch_array($sql)) { ?>

            <div class = "linha">

                <div class = "coluna_01"> <?php echo $dados['log_codigo']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['log_nome']; ?> </div>
                <div class = "coluna_02"> <?php echo $dados['log_login']; ?> </div>
                <div class = "coluna_03"> <?php echo $dados['data']; ?> </div>

                <div class = "coluna_01">
                    <a href = "delete_login.php?log_codigo=<?php echo $dados['log_codigo']; ?>" onclick="excluir_registro(event)">
                        <img src = "../img/excluir.png">
                    </a>
                </div>

                <div class = "coluna_01">
                    <a href = "form_atualizar_login.php?log_codigo=<?php echo $dados['log_codigo']; ?>">
                        <img src = "../img/edit.png">
                    </a>
                </div>
    
            </div>
            
        <?php } ?>

</div>
</body>
</html>
