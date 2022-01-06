<?php
include_once 'on.php';
include_once 'conexao.php';
$id_excluir = $_GET["id"];

$excluir = $pdo->query("DELETE FROM `informacao` WHERE informacao.login_id_login = $id_excluir");
$excluir = $pdo->query("DELETE FROM `login` WHERE login.id_login = $id_excluir");
if ($excluir == true) {
    echo "<script>alert('Excluido com sucesso')</script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
} else {
    echo "<script>alert('Falha na tentativa de excluir')</script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}
