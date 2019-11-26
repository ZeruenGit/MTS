<?php
include('session.php');

if(!isset($_SESSION['login_user'])){
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Enviar Email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    .text-center {
        text-align: center;
      }
      body {
        background: #CEE29D;
      }
      </style>
      

    <?php
        require_once("conexao.php");

        $query = "SELECT * FROM usuario";

        $result = mysqli_query($conexao, $query);

        $rows = Array();

        while($i = mysqli_fetch_assoc($result)){
            $rows[] = $i;
        }
    ?>

</head>
<body>
        <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-left d-flex logo" href="index.html">
                                <img src="./imagens/logo.png" alt="" style="width: 70%;">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dicas.html">Dicas Sustentáveis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="noticias.php">Notícias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cadastro.html">Cadastre-se</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="coleta.html">Pontos de coleta</a>
                                    </li>
                                    <li class="nav-item logout">
                                        <a class="nav-link" href="logout.php">Encerrar sessão</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div>
                </div>
   Assunto (Título): <input type="text" id='assunto'><br><br>
   Texto: <br> <textarea cols="100" rows="10" id="mensagem" style="margin:25px;" ></textarea>
    <input type="submit" value="ENVIAR" onClick="enviar(document.getElementById('assunto').value, document.getElementById('mensagem').value)">

    <script type="text/javascript">

    const usuarios = JSON.parse(' <?php echo json_encode($rows); ?>');
        function enviar(assunto, mensagem){
            console.log(usuarios)
            usuarios.forEach( user =>{
                Email.send({
                Host : "smtp.gmail.com",
                Username : "mataosustentavel@gmail.com",
                Password : "projetomts",
                To : user.email,
                From : "mataosustentavel@gmail.com",
                Subject : `Oi ${user.nome}, ${assunto}`,
                Body : mensagem
                }).then(message => alert(message));
            })
        }
    </script>
    
</body>
</html>