<?php
include_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$nova_senha = $_POST['nova_senha'];
if($senha == $nova_senha){
$editar = $pdo->prepare("UPDATE login SET usuario=:usuario,`senha`=:senha WHERE id_produto= $id ");
$editar->execute(array(
    ':usuario'=>$usuario,
    ':senha'=>$senha
));
if($editar == TRUE){
    echo "<script>alert('Alteração feita com sucesso')</script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}else{
    echo "<script>alert('Ocorreu um erredo na alteração')</script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}}else{
    echo "<script>alert('Impossível de ser editado, pois as senhas divergem!') </script>";
    echo "<script>location.href='../areaDeEntrada.php'</script>";
}