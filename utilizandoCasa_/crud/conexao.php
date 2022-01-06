<?php
//usuario do servidor
$usuario = 'root';
//senha do servidor
$senha = '';

try{
$pdo = new PDO('mysql:host=localhost;dbname=utilizando', $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
 echo "Houve falha na conexão".$e;
}
?>