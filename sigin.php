<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->

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
    <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="valida_login.php" method="post">
            <img class="mb-4" src="./assets/img/logo.png" alt="" width="50%">
            <h1 class="h3 mb-3 fw-normal">Por favor faça o login</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Login</label>
            </div>
            <div class="form-floating">
                <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->
            <div class="d-flex flex-row bd-highlight mb-3" style="justify-content: center">
                <button class=" btn btn-lg" style="background-color: #c1a35f; color: white; margin-right: 5px;" type="submit"><a style="text-decoration: none; color: white;" href="index.php">Voltar</a></button>
                <button class=" btn btn-lg" style="background-color: green; color: white;" type="submit">Entrar</button>
            </div>

            <? if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger">
                    Usuário ou senha inválido(s)
                </div>
            <? } ?>

            <? if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                </div>

            <? } ?>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
        </form>
    </main>



</body>

</html>