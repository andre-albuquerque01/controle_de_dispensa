<?php
include_once 'conexao.php';

$id = md5($_GET['id']);
$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$emisor = $_POST['emisor'];
$qtd = $_POST['qtd'];
$validade = $_POST['validade'];
if($qtd > 0){
$editar = $pdo->prepare("UPDATE `informacao` SET ` `produto`=:produto,`tipo`=:tipo,
`validade`=:validade,`emisor`=:emisor,`quantidade`=:qtd WHERE id_produto= $id ");
$editar->execute(array(
    ':produto'=>$produto,
    ':tipo'=>$tipo,
    ':emisor'=>$emisor,
    ':qtd'=>$qtd,
    ':validade'=>$validade
));
if($editar == TRUE){
    echo "<script>alert('Alteração feita com sucesso')</script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}else{
    echo "<script>alert('Ocorreu um erredo na alteração')</script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}}else{
    echo "<script>alert('Impossível de ser editado, pois quantidade do item é igual ou inferior ou igual!') </script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}