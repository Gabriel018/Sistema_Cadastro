
<?php
//Conexao com banco de dados

$server = "localhost";
$admuser = "root";
$password = "";
$db_name = "sistemacrud";

$conn = mysqli_connect($server,$admuser,$password,$db_name);
if(mysqli_connect_error()):
    Echo "Falha na conexao".mysqli_connect();
endif;
?>