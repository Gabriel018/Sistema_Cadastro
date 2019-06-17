<?php
session_start();
//Conexao
require_once 'conexao.php';

if(isset($_POST['btn-deletar'])):

$id = mysqli_escape_string($conn,$_POST['id']);

$sql = "DELETE FROM clientes WHERE id = '$id'";
//Redireciona para pagina
if(mysqli_query($conn,$sql)):
    $_SESSION['mensagem'] = "Deletado com sucesso com sucesso!";
    header('Location: home.php');
else:
    header('Location: home.php');
    $_SESSION['mensagem'] = "Erro para deletar";
endif;
endif;
?>