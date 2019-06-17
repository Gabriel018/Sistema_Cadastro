<?php
session_start();
//Conexao
require_once 'conexao.php';
//Clear

function clear($input){
    global $conn;
    $var =  mysqli_escape_string($conn,$input);
    //Xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])):
$nome = clear($conn,$_POST['nome']);
$sobrenome = clear($conn,$_POST['sobrenome']);
$email = clear($conn,$_POST['email']);
$idade = clear($conn,$_POST['idade']);
//Envia para o banco de dados
$sql = "INSERT INTO clientes (nome,sobrenome,email,idade)VALUES ('$nome','$sobrenome','$email','$idade')";
//Redireciona para pagina
if(mysqli_query($conn,$sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: home.php');
else:
    header('Location: index.php?Falhou');
    $_SESSION['mensagem'] = "Falha no cadastro";
endif;
endif;
?>