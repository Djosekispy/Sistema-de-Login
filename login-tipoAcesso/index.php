<?php
session_start(); 
if(!$_SESSION['login']){
    header('location: login.php');
}
if(isset($_GET['sair'])){
  header('location: sair.php');
}

$conexao = mysqli_connect('localhost','root','','sistemaLogin') or die("Conexão Não Feita");
$sql = "SELECT * from login where idLogin = '$id' ";
$saida = mysqli_query($conexao,$sql);
$busca = mysqli_fetch_array($saida);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
<h1>BEM VINDO AO MEU SITE</h1>
<a href="index.php?sair=true">Sair</a>
</body>
</html>