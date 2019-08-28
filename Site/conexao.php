<?php
$host= "localhost";
$user= "root";
$pass= "";
$banco= "bdcadastro";

$conexao = @mysqli_connect($host, $user, $pass, $banco)
or die ("Problemas com a conexão do Banco de Dados");

mysqli_set_charset($conexao, "ISO-8859-1");
?>
