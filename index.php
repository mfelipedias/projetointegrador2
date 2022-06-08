<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- fontawesome Icons -->
    <script src="https://kit.fontawesome.com/17040bbfa3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema | Acorde</title>

    <style>
        .hover {
            color: #1673f7
        }

        .hover:hover {
            color: #E74C3C
        }
        .janela2 {
            font-size: 15px;
            background-color: black !important;
            color: white !important;
        }
    </style>
    <link href="http://fonts.cdnfonts.com/css/my-big-heart-demo" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/magistral-honesty" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/the-chatalestick" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/klubkatz" rel="stylesheet">
    <link rel="stylesheet" href="css/headers.css">



</head>

<body style="max-width: 1366px; margin-right:auto; margin-left:auto; color: black;">
    <?php
    session_start();
    if ((!isset($_SESSION['user']) == true) and (!isset($_SESSION['t_senha']) == true)) {
        unset($_SESSION['id_tutor']);
        unset($_SESSION['t_nome']);
        unset($_SESSION['t_senha']);
        unset($_SESSION['t_funcao']);
        unset($_SESSION['t_status']);
        unset($_SESSION['t_usuario']);
        unset($_SESSION['senha']);
        header('location: ./login.php');
    }
    $logado = $_SESSION['t_nome'];
    $id_tutor = $_SESSION['id_tutor'];
    $funcao = $_SESSION['t_funcao'];
    ?>
    <div class="row">

        <header class="navbar shadow rounded d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-2 border-bottom divContr" style=" margin-right:auto; margin-left:auto">
            <a href="#" class="d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none">
                <img src="./img/coruja.png" width="40" role="img" class="img-fluid" style="background-color: white;">
                <div class="row" style="height:30px;margin:0px">
                    <p style="margin-left:8px;margin-bottom: 0; padding: 0;line-height: 1; color:#1673f7;font-family: 'Magistral Honesty', sans-serif;">Sistema</p>
                    <p style="margin-top: 0; padding: 0;line-height: 1.1;font-size: 30px;background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44); -webkit-text-fill-color: transparent;-webkit-background-clip: text;font-family: 'Magistral Honesty', sans-serif;">ACORDE</p>
                </div>
            </a>
            <div class="buttonColor">
                <div class="ball"></div>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="?pagina=home" class="nav-link hover" aria-current="page">Início</a></li>
                <li class="nav-item"><a href="?pagina=alunos" class="nav-link hover">Alunos</a></li>
                <li class="nav-item"><a href="?pagina=atividades" class="nav-link hover">Atividades</a></li>
                <li class="nav-item"><a href="?pagina=tutores" class="nav-link hover">Tutores</a></li>
                <li class="nav-item"><a href="?pagina=sobre" class="nav-link hover">Sobre</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <div class="dropdown text-end">
                    <a href="#" class="d-block text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <label style="margin-right:15px;">Bem vindo, <b style="color:#E74C3C;"><?php echo $logado ?>!</b></label>
                        <img src="./img/user.jpg" alt="mdo" width="35" height="35" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Meu perfil</a></li>
                        <li><a class="dropdown-item" href="#">Mudar senha</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./scripts/logout_.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
    <main style="max-width: 1366px;  margin-right:auto; margin-left:auto">
        <?php
        if (isset($_GET['pagina'])) {
            switch ($_GET['pagina']) {
                    //PAGINAS HOME
                case 'inicio':
                    include './includes/home.php';
                    break;
                case 'aviso':
                    include './includes/sub/avisos_add.php';
                    break;
                case 'aviso_add_ok':
                    include './includes/return/sucesso.php';
                    include './includes/home.php';
                    break;
                case 'alunos':
                    include './includes/alunos.php';
                    break;
                case 'alunos_view':
                    include './includes/sub/alunos_view.php';
                    break;
                case 'atv_aluno_add':
                    include './includes/return/sucesso.php';
                    include './includes/sub/alunos_view.php';
                    break;
                case 'alunos_edit':
                    include './includes/sub/alunos_edit.php';
                    break;
                case 'alunos_add':
                    include './includes/sub/alunos_add.php';
                    break;
                case 'alunos_add_ok':
                    include './includes/return/sucesso.php';
                    include './includes/alunos.php';
                    break;
                case 'alunos_add_erro':
                    include './includes/return/erro.php';
                    include './includes/sub/alunos_add.php';
                    break;
                case 'alunos_edit_ok':
                    include './includes/return/sucesso.php';
                    include './includes/sub/alunos_view.php';
                    break;
                case 'alunos_del_ok':
                    include './includes/return/aviso.php';
                    include './includes/alunos.php';
                    break;
                case 'atividades':
                    include './includes/atividades.php';
                    break;
                case 'atividades_add_ok':
                    include './includes/return/sucesso.php';
                    include './includes/atividades.php';
                    break;
                case 'atividades_del_ok':
                    include './includes/return/aviso.php';
                    include './includes/atividades.php';
                    break;
                case 'atividades_del_ok':
                    include './includes/return/aviso.php';
                    include './includes/atividades.php';
                    break;
                case 'atividades_edit_ok':
                    include './includes/return/sucesso.php';
                    include './includes/atividades.php';
                    break;
                case 'atividades_add_erro':
                    include './includes/return/erro.php';
                    include './includes/atividades.php';
                    break;
                case 'tutores':
                    include './includes/tutores.php';
                    break;
                case 'tutores_add':
                    include './includes/sub/tutores_add.php';
                    break;
                case 'tutores_add_ok':
                    include './includes/return/sucesso.php';
                    include './includes/tutores.php';
                    break;
                case 'tutores_add_erro':
                    include './includes/return/erro.php';
                    include './includes/sub/tutores_add.php';
                    break;
                case 'tutores_edit':
                    include './includes/sub/tutores_edit.php';
                    break;
                case 'tutores_edit_ok':
                    include './includes/return/sucesso.php';
                    include './includes/sub/tutores_edit.php';
                    break;
                case 'tutores_del_ok':
                    include './includes/return/aviso.php';
                    include './includes/tutores.php';
                    break;
                case 'sobre':
                    include './includes/sobre.php';
                    break;
                default:
                    include './includes/home.php';
                    break;
            }
        } else {
            include './includes/home.php';
        }
        ?>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="./img/logo_univesp.png" width="150px" role="img" class="img-fluid" alt="...">
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="?pagina=home" class="nav-link px-2 text-muted">Início</a></li>
            <li class="nav-item"><a href="?pagina=alunos" class="nav-link px-2 text-muted">Alunos</a></li>
            <li class="nav-item"><a href="?pagina=atividades" class="nav-link px-2 text-muted">Atividades</a></li>
            <li class="nav-item"><a href="?pagina=tutores" class="nav-link px-2 text-muted">Tutores</a></li>
            <li class="nav-item"><a href="?pagina=sobre" class="nav-link px-2 text-muted">Sobre</a></li>
        </ul>
    </footer>

                <script>
                    document.querySelector('.ball').addEventListener('click', (e) => {
                        e.target.classList.toggle('ball-move');
                        document.body.classList.toggle('Contraste');
                        
                        var els = document.getElementsByClassName("divContr");
                        
                        Array.prototype.forEach.call(els,
                        function(el){
                            el.classList.toggle('janela2');                      
                        })
                    });
                </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <script src="js/scripts.js"></script>

</body>

</html>