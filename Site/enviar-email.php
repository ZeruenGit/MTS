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