 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Enviar Email</title>

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
    <input type="submit" value="ENVIAR" onClick="enviarTodos()">

    <script type="text/javascript">
    const usuarios = JSON.parse(' <?php echo json_encode($rows); ?>');
        function enviarTodos(){
            usuarios.forEach( user =>{
            enviar(user.email, `Olha ${user.nome}`, `Bomdia`)
        })
        }
        function enviar(email, mensagem, assunto){
            Email.send({
                SecureToken : "3ca17337-03b3-4200-8689-c0a653da2661",
                To : email,
                From : "mataosustentavel@gmail.com",
                Subject : assunto,
                Body : mensagem
            }).then(
                message => alert(message)
            );
        }
    </script>
    
</body>
</html>