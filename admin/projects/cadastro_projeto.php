<?PHP

require_once('../conexao/banco.php');

$descricao 	= $_REQUEST['txt_descricao'];
$status = $_REQUEST['txt_status'];

if (isset($_FILES['txt_arquivo'])) {
    // Lista de tipos de arquivos permitidos
    $tiposPermitidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');
    
    // Tamanho máximo (em bytes)
    $tamanhoPermitido = 10240 * 5000; // 500 Kb
 
    // O nome original do arquivo no computador do usuário
    $arqName = $_FILES['txt_arquivo']['name'];
    
    // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
    $arqType = $_FILES['txt_arquivo']['type'];
    
    // O tamanho, em bytes, do arquivo
    $arqSize = $_FILES['txt_arquivo']['size'];
    
    // O nome temporário do arquivo, como foi guardado no servidor
    $arqTemp = $_FILES['txt_arquivo']['tmp_name'];
    
    // O código de erro associado a este upload de arquivo
    $arqError = $_FILES['txt_arquivo']['error'];

    if ($arqError == 0) {
        // Verifica o tipo de arquivo enviado
        if (array_search($arqType, $tiposPermitidos) === false) {
            echo 'O tipo de arquivo enviado é inválido!';
        } else if ($arqSize > $tamanhoPermitido) {
            echo 'O tamanho do arquivo enviado é maior que o limite!';
        } else {
            $pasta = 'img/';
            $extensao = strtolower(end(explode('.', $arqName)));
            $nome = time() . '.' . $extensao;
            $destino = $pasta . $nome;
            $upload = move_uploaded_file($arqTemp, $pasta . $nome);

            if ($upload == true) {
                $sql = "insert into tb_projetos (pro_descricao, pro_foto, pro_status) values ('$descricao', '$destino', '$status')";
                $query = mysqli_query($con, $sql) or die ("Erro na sql!");

                if ($query == true) {
                    echo 'Projeto inserido com sucesso!';
                    header("Location: consulta_projeto.php"); 
                }
            }
        }
    } else {
        echo 'Ocorreu um erro com o upload, por favor tente novamente!';
    }
} else {
    echo 'Nenhum arquivo foi enviado!';
}

?>
