<?php
include('admin2.php'); //incluí o script de login

if(isset($_SESSION['login_user'])){
  header("Location: cadastrar_noticias.php"); //Redireciona para a página de cadastro de noticias
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login MTS</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
.text-center {
  text-align: center;
}
body {
  margin-top: 100px;
  background: #CEE29D;
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="painel">
        <div class="panel-heading text-center"><h4>Login</h4></div>
		<div class="panel-body">
		<form action="admin2.php" method="post">
          <div class="form-group">
            <label for="usr">Usuário:</label>
            <input type="text" name="username" placeholder="Username" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <label for="pwd">Senha:</label>
            <input type="password" name="password" placeholder="Password" class="form-control" id="pwd">
          </div>
        <input type="submit" class="botao" name="submit" value="Login">
        </form>
		</div>
    </div>
  </div>
</div>
</body>
</html>
