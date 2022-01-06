<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../imagem/icon.png"/>
    <title>Editar usuario</title>
    <!-- CSS -->
    <link href="../bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icon -->
    <link href="../icons/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include_once '../crud/conexao.php';
    include_once '../crud/on.php';
    // selecionar o que está no banco de dados
    $id_session = $_SESSION['id_login'];
    $pesquisaPro = $pdo->query("SELECT * FROM login WHERE login.id_login = $id_session");
    while ($veriPro = $pesquisaPro->fetch()) {
    ?>
        <div class="container">
            <h1 class="text-primary text-center" style="margin-top: 1em; margin-bottom: 1em; font-family: 'Roboto', sans-serif;">Editar</h1>
            <form action="../crud/recebe_editar_login.php?id=<?= $id_session ?>" method="POST">
                <div class="row">
                    <div class="offset-4 col-4" style="margin-bottom: 1em;">
                        <label>Email</label><br><input class="form-control" type="email" name="email" value="<?= $veriPro['usuario'] ?>" aria-label required>
                    </div>
                    <div class="offset-4 col-4" style="margin-bottom: 1em; ">
                        <label>Senha atual</label><br><input class="form-control" type="password" name="senha" aria-label required>
                    </div>
                    <div class="offset-4 col-4" style="margin-bottom: 1em; ">
                        <label>Nova senha</label><br><input class="form-control" type="password" name="nova_senha" aria-label>
                    </div>
                    <div class="offset-4 col-4" style="margin-bottom: 2em; margin-left:47%">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    <?php
    }
    ?>

    <style>
         body {
            font-family: 'PT Sans', sans-serif;
            /* background-color: #373c56; */
        }

        #menu {
            width: 35px;
            height: 30px;
            margin: 30px 0 20px 20px;
            cursor: pointer;
        }

        .bar {
            height: 5px;
            width: 100%;
            background-color: #6495ED;
            display: block;
            border-radius: 5px;
            transition: 0.3s ease;
        }

        #bar1 {
            transform: translateY(-4px);
        }

        #bar3 {
            transform: translateY(4px);
        }

        .nav li a {
            color: #fff;
            text-decoration: none;
        }

        .nav li a:hover {
            font-weight: bold;
        }

        .nav li {
            list-style: none;
            padding: 16px 0;
        }

        .nav {
            padding: 0;
            margin: 0 20px;
            transition: 0.3s ease;
            display: none;
        }

        .menu-bg,
        #menu-bar {
            top: 0;
            left: 0;
            position: absolute;
        }

        .menu-bg {
            z-index: 1;
            width: 0;
            height: 0;
            margin: 30px 0 20px 20px;
            background: #6495ED;
            border-radius: 40%;
            transition: 0.3s ease;
        }

        #menu-bar {
            z-index: 2;

        }

        .change-bg {
            width: 420px;
            height: 500px;
            transform: translate(-60%, -30%);
        }

        .change .bar {
            background-color: white;
        }

        .change #bar1 {
            transform: translateY(4px) rotateZ(-45deg);
        }

        .change #bar3 {
            transform: translateY(-6px) rotate(45deg);
        }

        .change #bar2 {
            opacity: 0;
        }

        .change {
            display: block;
        }
    </style>
    <div id="menu-bar">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <ul class="nav" id="nav">
            <li><a href="../inicio/areaDeEntrada.php">Home</a></li>
            <li><a href="../cadastrar/cadastroItens.php">Cadastrado Itens</a></li>
            <li> <a href="editar_usuario.php">Editar</a> </li>
            <li> <a href="excluir_usuario.php">Excluir</a> </li>
            <li><a href="../crud/sair.php">Sair</a></li>
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="script.js"></script>
    <script>
        function onClickMenu() {
            document.getElementById("menu").classList.toggle("change");
            document.getElementById("nav").classList.toggle("change");
            document.getElementById("menu-bg").classList.toggle("change-bg")
        }
    </script>

</body>

</html>