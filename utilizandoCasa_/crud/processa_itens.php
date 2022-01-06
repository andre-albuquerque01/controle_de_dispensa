<?php
include_once 'conexao.php';
session_start();

$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$emissor = $_POST['emissor'];
$qtd = $_POST['qtd'];
$validade = $_POST['validade'];
$id = $_SESSION['id_login'];

if ($qtd > 0) {
    $cadastro2 = $pdo->prepare("INSERT INTO `informacao` (`produto`,`tipo`,`validade`,`emisor`,`quantidade`, `login_id_login`) 
VALUE (:produto, :tipo, :validade, :emisor, :quantidade, :login_id_login);");
    $cadastro2->execute(array(
        ':produto' => $produto,
        ':tipo' => $tipo,
        ':validade' => $validade,
        ':emisor' => $emissor,
        ':quantidade' => $qtd,
        ':login_id_login' => $id
    ));
    if ($cadastro2 == true) {
        echo "<script>alert('Cadastrado com sucesso!') </script>";
        echo "<script>location.href='../areaDeEntrada.php'</script>";
    } else {
        echo "<script>alert('Itens não cadastrado!') </script>";
    }
} else {
    echo "<script>alert('Itens não cadastrado, pois quantidade é zero ou menor') </script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}
