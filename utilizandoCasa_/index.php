<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="imagem/icon.png"/>
    <title>Login</title>
    <!-- CSS -->
    <link href="bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icon -->
    <link href="icons/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-primary text-center" style="margin-top: 3em; margin-bottom: 1em">Controle da dispensa</h1>
        <form action="crud/recebe_login.php" method="POST">
            <div class="row">
                <div class="offset-4 col-4" style="margin-bottom: 1em;">
                    <label>Email</label><br><input class="form-control" type="email" name="email" placeholder="Email" aria-label require>
                </div>
                <div class="offset-4 col-4" style="margin-bottom: 1em;">
                    <label>Senha</label><br><input class="form-control" type="password" name="senha" placeholder="Senha" aria-label require>
                </div>
                <div class="row text-center">
                    <div class="offset-4 col-4" style="margin-bottom: 2em; margin-left:34%">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"> Entrar</i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>