<?
require_once "validador_acesso.php";
$acao = 'recuperar';
require './controller/user_controller.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sidebars · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

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

        #mensagem {
            max-width: 15ch;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        p {
            margin-right: 25px;
        }
    </style>
    <script>
        function remover(id) {
            location.href = 'adm.php?acao=remover&id=' + id;
        }
    </script>


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="margin-left: 50px;">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm.php">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container" style="margin-top: 25px;">
            <div class="row">
                <div class="row">
                    <div class="col">
                        <h4>Todos usuarios</h4>
                        <hr />
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">CreatedAt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <? foreach ($users as $indice => $user) { ?>
                                    <tr id="user_<?= $user->id ?>">
                                        <td>
                                            <p><?= $user->id ?></p>
                                        </td>
                                        <td>
                                            <p><?= $user->email ?></p>
                                        </td>
                                        <td>
                                            <p><?= $user->password ?></p>
                                        </td>
                                        <td>
                                            <p><?= $user->createdAt ?></p>
                                        </td>
                                        <td>
                                            <button onclick="remover(<?= $user->id ?>)">Remover</button>
                                            <!-- <i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $user->id ?>)">Ola</i> -->
                                        </td>
                                    </tr>
                                <? } ?>
                            </tbody>
                        </table>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Novo usuario
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>
</body>

</html>