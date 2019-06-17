<?php
require_once 'db_conect.php';

//Session start
session_start();

//Dados
$id = $_SESSION['id_logado'];
$sql =  "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Login</title>
</head>
<h1>Usuario Logado</h1>
<h2>Seja bem vindo <?php echo $dados['nome']; ?> </h2>
<a href="logout.php">Sair</a>

<body>
    
</body>
</html>