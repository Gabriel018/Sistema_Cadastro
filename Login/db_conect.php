
<?php
//Conexao com banco de dados
$servename = "localhost";
$username = "root";
$senha = "";
$dbname = "SistemaLogin";

$connect = mysqli_connect($servename, $username , $senha ,$dbname);

if(mysqli_connect_error()):
    echo "Falha na conexao" .mysqli_connect_error();
endif;


?>