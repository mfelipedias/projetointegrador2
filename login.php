<!doctype html>
<html lang="en">
<?php
error_reporting(0);
$retorno = $_GET['retorno']; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Acorde - Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <link href="http://fonts.cdnfonts.com/css/my-big-heart-demo" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/magistral-honesty" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
</head>

<body class="text-center">


    <main class="form-signin">

        <form action="scripts/login_.php" method="post">
            <img class="mb-4" src="./img/pen.png" alt="" width="100%" height="100%">
            <div class="col" style="width: 300px;">
                <?php
                if ($retorno != "") {
                    include './includes/return/erro.php';
                }
                ?>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="t_usuario" name="t_usuario" placeholder="Usuário" required>
                <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="t_senha" name="t_senha" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Lembrar
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p style="margin-left:0px;margin-top:30px;margin-bottom: 0; padding: 0;line-height: 1; color:#1673f7;font-family: 'Magistral Honesty', sans-serif;">Sistema</p>
            <p style="margin-top: 0; padding: 0;line-height: 1.1;font-size: 40px;background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44); -webkit-text-fill-color: transparent;-webkit-background-clip: text;font-family: 'Magistral Honesty', sans-serif;">ACORDE</p>

            <p class="mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>