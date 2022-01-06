<?php
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['id_login']) == null) {
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    //echo "<script>window.alert ='Erro: Necessário realizar o login para acessar a página!'</script>";
    echo "<script>window.location.href ='../index.php'</script>";
}