<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
		die('E-mail já existente: ' . @mysqli_error($conexao));
	}
	else {
        echo "Registro Cadastrado com Sucesso <br>";}
            mysqli_close($conexao);
    ?>
    <br>
	<a href="javascript:window.history.go(-1)">Voltar</a>
</body>
</html>