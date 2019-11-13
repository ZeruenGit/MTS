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
<?php

        if(!isset($_SESSION['login_user'])){
            header("location:admin.php");
            die();
        }
        if(isset($_GET['logout']) == true){
            session_destroy();
            header("Location: index.php");
            die();
        }
        ?>
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