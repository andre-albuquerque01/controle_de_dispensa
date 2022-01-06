<?php
include_once 'conexao.php';
$email = addslashes($_POST['email']);
$senha = $_POST['senha'];

$cadastrar = $pdo->prepare("INSERT INTO login(`usuario`,`senha`) value(:email, sha(:senha))");
$cadastrar->execute(array(
    ':email'=>$email,
    ':senha'=>$senha
));


if($cadastro == true){
    echo "<script>alert('Cadastrado com sucesso')</script>";
    echo "<script>location.href='../index.php'</script>";
}else{
    echo "<script>alert('Não foi possível cadastrar, será redirecionado para o ínicio')</script>";
    echo "<script>location.href='../index.php'</script>";
}