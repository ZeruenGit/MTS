<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include_once('conexao.php');
    $titulo=$_POST['titulo'];
    $texto=$_POST['texto'];

    $sqlinsert = "insert into agua (titulo, texto) 
    VALUES ('$titulo', '$texto')";

    $resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		die('Erro de conexão com o banco de dados ' . @mysqli_error($conexao));
	}
	else {
        echo "Registro Cadastrado com Sucesso <br>";}
            mysqli_close($conexao);
    ?>
    <a href="javascript:window.history.go(-1)">Voltar</a>
</body>
</html>