<?php
//encerra sessao
session_start();
session_unset();
session_destroy();
header('Location: SistemaLogin.php');


?>