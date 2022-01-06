<?php
session_start();
include_once './conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == null || $senha == NULL) {
    echo "<script>alert('Email ou senha invalida')</script>";
    echo "<script>location ='../index.php'</script>";
}

$consulta = $pdo->query("SELECT * FROM login WHERE `usuario` like '$email' AND `senha` like '$senha';");
$entrada = $consulta->fetch();
if ($entrada != null) {
    $_SESSION['id_login'] = $entrada['id_login'];
    $_SESSION['usuario'] = $entrada['usuario'];
    $_SESSION['senha'] = $entrada['senha'];

    echo "<script>alert ('Login com Sucesso!') </script>";
    echo "<script> location.href='../inicio/areaDeEntrada.php'</script>";
} else {
    echo "<script> alert ('Informações erradas!')</script>";
    echo "<script>location.href='../index.php'</script>";
}
