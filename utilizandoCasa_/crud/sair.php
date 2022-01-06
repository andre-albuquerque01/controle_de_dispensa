<?php
include_once 'on.php';

if (isset($_SESSION['id_login'])) {
    session_destroy();
    echo "<script> location.href = '../index.php'</script>";
}
