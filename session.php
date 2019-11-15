<?php
include_once('conexao.php');

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT user FROM adm_user WHERE user = '$user_check'";
$ses_sql = mysqli_query($conexao, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['user'];
?>