<?php
error_reporting(0);
$filtro = $_GET['filtro'];
?>
<?php
include './scripts/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM alunos WHERE id_aluno = $id";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $id_aluno = $array['id_aluno'];
    $a_status = $array['a_status'];
    $a_nome = $array['a_nome'];
    $a_data = $array['a_data'];
    $a_condicao = $array['a_condicao'];
    $a_obs = $array['a_obs'];
    $a_resp = $array['a_resp'];
    $a_tel = $array['a_tel'];
    $a_email = $array['a_email'];
    $a_create = $array['a_create'];
    $a_update = $array['a_update'];
    //calculo de idade
    list($ano, $mes, $dia) = explode('-', $a_data);
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
}
?>
<div class="row mb-3">
    <div class="card shadow-sm" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Relatório do Aluno</p>
                <p>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <a data-bs-toggle="modal" data-bs-target="#modalAtividade" type="button" class="bi hover bi-file-earmark-plus mx-2" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Cadastrar Atividade" style="font-size: 27px;"></a>

                        <a data-bs-toggle="modal" data-bs-target="#modalAluno" class="bi hover bi-pen" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Alterar dados" href="#" style="font-size: 27px;"></a>
                    </div>
                </div>
                </p>
            </center>
        </div>
        <center>
            <div class="row" style="height: 5px; background: rgb(48,65,135); background: linear-gradient(90deg, rgba(48,65,135,1) 0%, rgba(22,115,247,1) 21%);;">&nbsp</div>
            <div class="row" style="height: 7px; background: #E74C3C;">&nbsp</div>
        </center>
    </div>
</div>

<div class="row">
    <div class="card shadow-sm" style=" background-image: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), url(./img/coruja.png);background-repeat: no-repeat;">
        <div class="card-body">
            <div class="container" style="max-width: 900px;">
                <h5><i class="bi bi-mortarboard" style="margin-right: 10px;"></i>Dados do Aluno</h5>
                <hr>
                <div class="row">
                    <div class="col-lg-2">
                        <label class="form-label">Código:</label>
                        <input class="form-control" type="text" value="<?php echo $id_aluno; ?>" readonly>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">Status:</label>
                        <div class="input-group">

                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-circle-fill" style="color:<?php if ($a_status == 1) {
                                                                                                                            echo 'green';
                                                                                                                        } else {
                                                                                                                            echo 'red';
                                                                                                                        } ?>;"></i></span>
                            <input class="form-control" type="text" value="<?php if ($a_status == 1) : echo "Ativo";
                                                                            else : echo "Inativo";
                                                                            endif; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label class="form-label">Cadastro:</label>
                        <input class="form-control" type="text" value="<?php echo $a_create; ?>" readonly>

                    </div>
                    <div class="col-lg-4">
                        <label class="form-label">Atualização:</label>
                        <input class="form-control" type="text" value="<?php echo $a_update; ?>" readonly>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" type="text" value="<?php echo $a_nome; ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Nascimento:</label>
                        <input class="form-control" type="date" value="<?php echo $a_data; ?>" readonly>
                    </div>
                    <div class="col-4">
                        <label class="form-label">Idade:</label>
                        <input class="form-control" type="text" value="<?php echo $idade; ?>" readonly>
                    </div>
                    <div class=" col-4">
                        <label class="form-label">Condição especial: </label>
                        <input class="form-control" type="text" value="<?php echo $a_condicao; ?>" readonly>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $a_obs; ?></textarea>
                </div>
                <h5 style=" margin-top:20px"><i class="bi  bi-heart" style="margin-right: 10px;"></i>Dados dos Responsáveis</h5>
                <hr>
                <label class="form-label">Nome dos responsáveis: </label>
                <input class="form-control" type="text" value="<?php echo $a_resp; ?>" readonly>
                <label class="form-label">Telefones: </label>
                <input class="form-control" type="text" value="<?php echo $a_tel; ?>" readonly>
                <label class="form-label">Email: </label>
                <input class="form-control" type="text" value="<?php echo $a_email; ?>" readonly>

            </div>
        </div>

    </div>
</div>

<div class="row mt-3">
    <div class="card shadow-sm mt-2 rounded">
        <div class="container">
            <h5 class="mt-3"><i class="bi bi-clipboard-data" style="margin-right: 10px;"></i>Atividades Registradas</h5>
            <form action="./scripts/atv_aluno_filtro.php" method="post">
                <div class="input-group">
                    <select class="form-select" id="pesquisa" name="pesquisa" aria-label="Default select example" required>
                        <option value="Todos">Filtrar...</option>
                        <option value="Todos">Todos</option>
                        <?php
                        include './scripts/conexao.php';
                        $sql = "SELECT * FROM `atividades` ORDER BY at_nome ASC";
                        $todos = mysqli_query($conexao, $sql);
                        $contador = 0;
                        while ($array = mysqli_fetch_array($todos)) {
                            $contador = $contador + 1;
                            $id_atividade = $array['id_atividade'];
                            $at_nome = $array['at_nome'];
                            $at_notamax = $array['at_notamax'];
                            $at_notamin = $array['at_notamin'];
                            $at_descricao = $array['at_descricao'];
                        ?>
                            <option value="<?php echo $id_atividade ?>"><?php echo $at_nome ?></option>
                        <?php } ?>
                    </select>
                    <input class="form-control" id="id" name="id" value="<?php echo $id ?>" hidden>
                    <div class="input-group-prepend">
                        <button data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Pesquisar" href="#" type="submit" class="hover btn btn-outline-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </form>
            <hr>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Observação</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include './scripts/conexao.php';
                    if ($filtro == "") {
                        $sql = "SELECT * FROM `atv_aluno` INNER JOIN `alunos` ON atv_aluno=id_aluno 
                        INNER JOIN `tutores` ON atv_tutor=id_tutor
                        INNER JOIN  `atividades` ON atv_atividade=id_atividade WHERE atv_aluno=$id
                        ORDER BY atv_create ASC";
                    } else {
                        $sql = $filtro;
                    }
                    $total_reg = "15"; // número de registros por página
                    $pag = $_GET['pag'];
                    if (!$pag) {
                        $pc = "1";
                    } else {
                        $pc = $pag;
                    }
                    $inicio = $pc - 1;
                    $inicio = $inicio * $total_reg;

                    $limite = mysqli_query($conexao, "$sql LIMIT $inicio, $total_reg");
                    $todos = mysqli_query($conexao, $sql);

                    $tr = mysqli_num_rows($todos); // verifica o número total de registros
                    $tp = $tr / $total_reg; // verifica o número total de páginas

                    $busca = mysqli_query($conexao, $sql);
                    $contador = 0;
                    while ($array = mysqli_fetch_array($limite)) {

                        $contador = $contador + 1;
                        $id_atv = $array['id_atv'];
                        $atv_atividade = $array['atv_atividade'];
                        $atv_aluno = $array['atv_aluno'];
                        $atv_tutor = $array['atv_tutor'];
                        $atv_nota = $array['atv_nota'];
                        $atv_obs = $array['atv_obs'];
                        $atv_create = $array['atv_create'];
                        $atv_update = $array['atv_update'];
                        $at_nome = $array['at_nome'];
                        $t_nome = $array['t_nome'];
                        $a_nome = $array['a_nome'];

                    ?>
                        <tr>
                            <th scope="row"><?php echo date('d/m/Y H:i:s', strtotime($atv_create)); ?></th>
                            <td><?php echo $t_nome ?></td>
                            <td><?php echo $at_nome ?></td>
                            <td><?php echo $atv_nota ?>%</td>
                            <td><?php echo $atv_obs ?></td>
                        <?php } ?>
                        </tr>
                </tbody>
            </table>
            <center><?php
                    $anterior = $pc - 1;
                    $proximo = $pc + 1;
                    if ($pc > 1) {
                        echo "
                      </style>
                      <a style='appearance: none;
                      text-decoration: none;
                      background-color: #FAFBFC;
                      border: 1px solid rgba(27, 31, 35, 0.15);
                      border-radius: 6px;
                      box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
                      box-sizing: border-box;
                      color: #24292E;
                      cursor: pointer;
                      display: inline-block;
                      font-family: -apple-system, system-ui, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
                      font-size: 14px;
                      font-weight: 500;
                      line-height: 20px;
                      list-style: none;
                      padding: 6px 16px;
                      position: relative;
                      transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
                      user-select: none;
                      -webkit-user-select: none;
                      touch-action: manipulation;
                      vertical-align: middle;
                      white-space: nowrap;
                      word-wrap: break-word;' href='?pagina=alunos_view&&id=$id&&pag=$anterior'>Anterior</a>";
                    }
                    echo "&nbsp | &nbsp";
                    if ($pc < $tp) {
                        echo "<a style='appearance: none;
                      text-decoration: none;
                      background-color: #FAFBFC;
                      border: 1px solid rgba(27, 31, 35, 0.15);
                      border-radius: 6px;
                      box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
                      box-sizing: border-box;
                      color: #24292E;
                      cursor: pointer;
                      display: inline-block;
                      font-family: -apple-system, system-ui, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
                      font-size: 14px;
                      font-weight: 500;
                      line-height: 20px;
                      list-style: none;
                      padding: 6px 16px;
                      position: relative;
                      transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
                      user-select: none;
                      -webkit-user-select: none;
                      touch-action: manipulation;
                      vertical-align: middle;
                      white-space: nowrap;
                      word-wrap: break-word;' href='?pagina=alunos_view&&id=$id&&pag=$proximo'>Próxima</a>";
                    }
                    ?></center>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="card shadow-sm mt-2 rounded">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <?php
        include './scripts/conexao.php';
        $sql = "SELECT * FROM `atividades` ORDER BY at_nome ASC";
        $todos = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($todos)) {
            $id_atividade = $array['id_atividade'];
            $at_nome = $array['at_nome'];
        ?>
            <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['line', 'corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var chartDiv = document.getElementById('chart_div<?php echo $id_atividade; ?>');

                    var data = new google.visualization.DataTable();
                    data.addColumn('date', 'Data');
                    data.addColumn('number', "<?php echo $at_nome; ?>");

                    data.addRows([

                        <?php
                        include './scripts/conexao.php';
                        $sql_ = "SELECT * FROM `atv_aluno` INNER JOIN `alunos` ON atv_aluno=id_aluno INNER JOIN `tutores` ON atv_tutor=id_tutor INNER JOIN  `atividades` ON atv_atividade=id_atividade WHERE atv_aluno=$id AND atv_atividade=$id_atividade  ORDER BY atv_create ASC";
                        $todos_ = mysqli_query($conexao, $sql_);
                        $contador = 0;
                        while ($array = mysqli_fetch_array($todos_)) {

                            $atv__aluno = $array['atv_aluno'];
                            $atv__nota = $array['atv_nota'];
                            $atv__create = $array['atv_create'];
                            $ano = substr($atv__create, 0, 4);
                            $mes = substr($atv__create, 5, 2);
                            $dia = substr($atv__create, 8, 2);
                            $hora = substr($atv__create, 11, 2);
                            $minuto = substr($atv__create, 14, 2);
                            $segundo = substr($atv__create, 17, 2);

                        ?>
                            <?php
                            while ($contador <= 1) {
                                $contador = $contador + 1;?>
                                [new Date(<?php echo $ano; ?>, <?php echo $mes; ?>, <?php echo $dia - 1; ?>), 0],
                            <?php } ?>
                            [new Date(<?php echo $ano; ?>, <?php echo $mes; ?>, <?php echo $dia; ?>), <?php echo $atv__nota ?>],

                        <?php } ?>
                    ]);

                    var classicOptions = {
                        title: 'Grafico da atividade de <?php echo $at_nome; ?>',
                        width: 1000,
                        height: 500,
                        // Gives each series an axis that matches the vAxes number below.
                        series: {
                            0: {
                                targetAxisIndex: 0
                            },
                            1: {
                                targetAxisIndex: 1
                            }
                        },
                        vAxes: {
                            // Adds titles to each axis.
                            0: {
                                title: 'Nota'
                            },
                            1: {
                                title: 'Daylight'
                            }
                        },

                        vAxis: {
                            viewWindow: {
                                max: 100
                            }
                        }
                    };

                    function drawClassicChart() {
                        var classicChart = new google.visualization.LineChart(chartDiv);
                        classicChart.draw(data, classicOptions);
                    }

                    drawClassicChart();

                }
            </script>
            <center>
                <div id="chart_div<?php echo $id_atividade ?>"></div>
            </center>
        <?php } ?>
    </div>
</div>




<!-- Modal EDITAR DADOS DO ALUNO-->
<div class="modal fade" id="modalAluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5><i class="bi bi-mortarboard" style="margin-right: 10px;"></i>Alterar dados do aluno...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mb-2" style="max-width: 900px;">
                    <form class="container" action="./scripts/aluno_edit.php" method="post">
                        <div class="row">
                            <div class="col-xl-2">
                                <label class="form-label">Código: </label>
                                <input class="form-control" type="text" id="id_aluno" name="id_aluno" value="<?php echo $id_aluno; ?>" readonly>
                            </div>
                            <div class="col-xl-2">
                                <label class="form-label">Status: </label>
                                <select class="form-select" aria-label="Status" id="a_status" name="a_status">
                                    <option value="<?php echo $a_status ?>"><?php if ($a_status == 1) : echo "Ativo";
                                                                            else : echo "Inativo";
                                                                            endif; ?></option>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>

                            </div>
                            <div class="col-xl-8">
                                <label class="form-label">Nome:</label>
                                <input class="form-control" type="text" id="a_nome" name="a_nome" value="<?php echo $a_nome; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <label class="form-label">Nascimento:</label>
                                <input class="form-control" type="date" id="a_data" name="a_data" value="<?php echo $a_data; ?>" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">Idade:</label>
                                <input class="form-control" type="text" id="idade" name="idade" value="<?php echo $idade; ?>" readonly>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">Condição especial: </label>
                                <input class="form-control" type="text" id="a_condicao" name="a_condicao" value="<?php echo $a_condicao; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
                            <textarea class="form-control" id="a_obs" name="a_obs" rows="3"><?php echo $a_obs; ?></textarea>
                        </div>

                        <hr>
                        <label class="form-label">Nome dos responsáveis: </label>
                        <input class="form-control" type="text" id="a_resp" name="a_resp" value="<?php echo $a_resp; ?>" required>
                        <label class="form-label">Telefones: </label>
                        <input class="form-control" type="text" id="a_tel" name="a_tel" value="<?php echo $a_tel; ?>" required>
                        <label class="form-label">Email: </label>
                        <input class="form-control" type="text" id="a_email" name="a_email" value="<?php echo $a_email; ?>" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Nova atividade-->
<div class="modal fade " id="modalAtividade" tabindex="-1" aria-labelledby="modalAtividade" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5><i class="bi bi-mortarboard" style="margin-right: 10px;"></i>Registrar atividade...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mb-2" style="max-width: 900px;">
                    <form action="./scripts/atv_aluno_add.php" method="post">
                        <div class="row">
                            <div class="col-xl-3">
                                <label class="form-label">Código: </label>
                                <input class="form-control" type="text" id="atv_aluno" name="atv_aluno" value="<?php echo $id_aluno ?>" readonly>
                            </div>
                            <div class="col-xl-9">
                                <label class="form-label">Aluno:</label>
                                <input class="form-control" type="text" value="<?php echo $a_nome ?>" readonly>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-9">
                                <label class="form-label">Atividade Realizada:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <select class="form-select" id="atv_atividade" name="atv_atividade">
                                        <option selected>Selecione...</option>
                                        <?php
                                        include './scripts/conexao.php';
                                        $sql = "SELECT * FROM `atividades` ORDER BY at_nome ASC";
                                        $todos = mysqli_query($conexao, $sql);
                                        $contador = 0;
                                        while ($array = mysqli_fetch_array($todos)) {
                                            $contador = $contador + 1;
                                            $id_atividade = $array['id_atividade'];
                                            $at_nome = $array['at_nome'];
                                            $at_notamax = $array['at_notamax'];
                                            $at_notamin = $array['at_notamin'];
                                            $at_descricao = $array['at_descricao'];
                                        ?>
                                            <option value="<?php echo $id_atividade ?>"><?php echo $at_nome ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <label class="form-label">Nota: </label>
                                <input class="form-control" type="number" id="atv_nota" name="atv_nota" required>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Observações: </label>
                                    <textarea class="form-control" id="atv_obs" name="atv_obs" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <label class="form-label">Tutor: </label>
                        <input class="form-control" type="text" value="<?php echo $logado ?>" readonly>
                        <input class="form-control" type="text" id="atv_tutor" name="atv_tutor" value="<?php echo $id_tutor ?>" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>