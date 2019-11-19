<?php
session_start();
include_once('conexao.php');
$error = '';

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Usuario ou senha inválidos";
	} else {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT user, pass FROM adm_user WHERE user=? AND pass=?";
		$stmt = $conexao->prepare($query);
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt->bind_result($username, $password);
		$stmt->store_result();

		if($stmt->fetch()){
			$_SESSION['login_user'] = $username;
			header("Location: cadastrar_noticias.php");
		}
		else{
			$error = "Usuario ou senha inválidos";
			echo "$error <br>";
			echo "<a href='admin.php'>Voltar</a>";
		}
		mysqli_close($conexao);

	}
}
?>