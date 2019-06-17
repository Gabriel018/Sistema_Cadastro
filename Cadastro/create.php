<?php
session_start();
//Conexao
require_once 'conexao.php';

if(isset($_POST['btn-cadastrar'])):
$nome = mysqli_escape_string($conn,$_POST['nome']);
$sobrenome = mysqli_escape_string($conn,$_POST['sobrenome']);
$email = mysqli_escape_string($conn,$_POST['email']);
$idade = mysqli_escape_string($conn,$_POST['idade']);
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