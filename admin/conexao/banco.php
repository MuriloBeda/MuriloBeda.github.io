<?PHP
$con = mysqli_connect("dumont", "220176", "220176", "220176_db");

if(mysqli_connect_errno()) {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_erro();
} else {
    mysqli_select_db($con,"220176_db");
}

?>