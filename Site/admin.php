<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/Logo2.png" type="image/x-icon">
    <title>SFA | Login</title>
</head>
<body>
    <?php
        session_start();

        require_once("conexao.php");

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = mysqli_real_escape_string($conexao, $_POST["user"]);
            $userpass = md5(mysqli_real_escape_string($conexao, $_POST["pass"]));

            $query = "SELECT idUser FROM adm_user WHERE user = '$username' and pass = '$userpass'";

            $result = mysqli_query($conexao, $query);

            if($result){
                $row = mysqli_fetch_array($result);
                $active = $row['active'];
            }

            $count = mysqli_num_rows($result);
            
            if($count == 1) {
                $_SESSION['login_user'] = $username;
                header("location: cadastrar_noticias.php");
            }else {
                $loginerror = "O nome de usuario ou senha estão incorretos";
            }
        }
    ?>

    <div class="login">
    <h1>login</h1>
        <form action="" method="post">
            <input type="text" name="user" placeholder="User" autocomplete="off">
            <input type="password" name="pass" placeholder=Password autocomplete="off">
            <input type="submit" value="Login">
        </form>
        <label><?php echo @$loginerror; ?></label>
    </div>
    
</body>
</html>