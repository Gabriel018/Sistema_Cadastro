<?php
$senha="Duke2345";
//Senha criptografada base64
$novasenha= base64_encode($senha);

echo "Sua senha é: ". $senha."<br>";

echo "Criptografia base64:  ". $novasenha."<br>";

echo "<hr>";
//MD5 criptografia de mao unica
echo  "MD5 ". md5($senha)."<br>";
echo "Sha1". sha1($senha);

echo "<hr>";
//Password_hash

$senha="Nokia1212";

$novasenha = password_hash($senha, PASSWORD_DEFAULT);
echo "Senha gerada com o password hash"."<br>";
echo $novasenha;

//Validaçao

if(password_verify($senha, $novasenha)):
    echo"<br>";
    echo "Senha Valida";
else:
    echo "Senha nao confere";
endif;





?>