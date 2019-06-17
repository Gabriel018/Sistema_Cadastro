<?php
session_start();
//Conexao
require_once 'conexao.php';

if(isset($_POST['btn-editar'])):
$nome = mysqli_escape_string($conn,$_POST['nome']);
$sobrenome = mysqli_escape_string($conn,$_POST['sobrenome']);
$email = mysqli_escape_string($conn,$_POST['email']);
$idade = mysqli_escape_string($conn,$_POST['idade']);
//Envia para o banco de dados
$id = mysqli_escape_string($conn,$_POST['id']);

$sql = "UPDATE clientes SET nome = '$nome',sobrenome ='$sobrenome',email ='$email',idade ='$idade' WHERE id = '$id' ";
//Redireciona para pagina
if(mysqli_query($conn,$sql)):
    $_SESSION['mensagem'] = "Atualizado com sucesso com sucesso!";
    header('Location: home.php');
else:
    header('Location: home.php');
    $_SESSION['mensagem'] = "Falha na atualizaçao";
endif;
endif;
?>