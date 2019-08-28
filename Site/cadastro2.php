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
    $email=$_POST['email'];
    $nome=$_POST['nome'];

    $sqlinsert = "insert into usuario (email, nome) 
    VALUES ('$email', '$nome')";

    $resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		die('Query Inválida: ' . @mysqli_error($conexao));
	}
	else {
        echo "Registro Cadastrado com Sucesso <br>";}
            mysqli_close($conexao);
    ?>
    <br>
	<a href="javascript:window.history.go(-1)">Voltar</a>
</body>
</html>