<html>
<body>
<?php
//Conexao
require_once 'db_conect.php';

//Session start
session_start();

//Botao enviar
if(isset($_POST['btn-login'])):
 $erro = array();
 $login = mysqli_escape_string($connect, $_POST['login']);
 $senha = mysqli_escape_string($connect, $_POST['senha']);
   //Verificar se campos estao vazios
  if(empty($login) or empty($senha)):
$erro[] = "<li> O campo login/senha precisa ser preenchido </li>";
  else:
   $sql = "SELECT login FROM usuarios WHERE login ='$login'";
   $resultado = mysqli_query($connect, $sql);

    if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha' ";
        $resultado = mysqli_query($connect, $sql);
   
       
        if(mysqli_num_rows($resultado) == 1):
          $dados = mysqli_fetch_array($resultado);
          $_SESSION['logado'] = true;
          $_SESSION['id_logado'] = $dados['id'];
         header('Location: Principal.php');
        else:
            $erro[] =" <li>Usuario/senha nao conferem </li>";
        endif;

        
   endif;

    endif;

endif;

?>
<h1>Sistema de Login</h1>
<?php
if(!empty($erro)):
foreach($erro as $erros):
    echo $erros;
endforeach;
endif;
?>
<form action="" method="POST">
<label>Login</label><br>
<input type="text" name="login"><br>
<label>Senha</label><br>
<input typer="password" name="senha"><br>
<button type="submit" name="btn-login">Logar</button>


</body>
</html>