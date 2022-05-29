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
                            
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-circle-fill" style="color:<?php if ($a_status == 1) {echo 'green';} else {echo 'red';} ?>;"></i></span>
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
            <form>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" required>
                        <option selected>Filtrar...</option>
                        <option value="1">Atividade 1</option>
                        <option value="2">Atividade 2</option>
                        <option value="3">Atividade 3</option>
                    </select>
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
                        <th scope="col">Descrição</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Observação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">01/01/2022</th>
                        <td>Identificação das letras</td>
                        <td>90%</td>
                        <td>O aluno apresentou poucas dificuldades dentre elas: as letras X e Y</td>
                    </tr>
                    <tr>
                        <th scope="row">01/01/2022</th>
                        <td>Escrita do Nome</td>
                        <td>50%</td>
                        <td>O Aluno escreveu o nome com alguns erros, a atividade deve ser repetida</td>
                    </tr>
                    <tr>
                        <th scope="row">01/01/2022</th>
                        <td>Encontros Vocálicos</td>
                        <td>100%</td>
                        <td>O Aluno não teve dificuldades na atividade</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="card shadow-sm mt-2 rounded">
        <div id="chart_div"></div>
        <script>
            google.charts.load('current', {
                packages: ['corechart', 'line']
            });
            google.charts.setOnLoadCallback(drawTrendlines);

            function drawTrendlines() {
                var data = new google.visualization.DataTable();
                data.addColumn('number', 'X');
                data.addColumn('number', 'Atividade 1');
                data.addColumn('number', 'Atividade 2');

                data.addRows([
                    [0, 0, 0],
                    [1, 10, 5],
                    [2, 23, 15],
                    [3, 17, 9],
                    [4, 18, 10],
                    [5, 9, 5],
                    [6, 11, 3],
                    [7, 27, 19],
                    [8, 33, 25],
                    [9, 40, 32],
                    [10, 32, 24],
                    [11, 35, 27],
                    [12, 30, 22],
                    [13, 40, 32],
                    [14, 42, 34],
                    [15, 47, 39],
                    [16, 44, 36],
                    [17, 48, 40],
                    [18, 52, 44],
                    [19, 54, 46],
                    [20, 42, 34],
                    [21, 55, 47],
                    [22, 56, 48],
                    [23, 57, 49],
                    [24, 60, 52],
                    [25, 50, 42],
                    [26, 52, 44],
                    [27, 51, 43],
                    [28, 49, 41],
                    [29, 53, 45],
                    [30, 55, 47],
                    [31, 60, 52],
                    [32, 61, 53],
                    [33, 59, 51],
                    [34, 62, 54],
                    [35, 65, 57],
                    [36, 62, 54],
                    [37, 58, 50],
                    [38, 55, 47],
                    [39, 61, 53],
                    [40, 64, 56],
                    [41, 65, 57],
                    [42, 63, 55],
                    [43, 66, 58],
                    [44, 67, 59],
                    [45, 69, 61],
                    [46, 69, 61],
                    [47, 70, 62],
                    [48, 72, 64],
                    [49, 68, 60],
                    [50, 66, 58],
                    [51, 65, 57],
                    [52, 67, 59],
                    [53, 70, 62],
                    [54, 71, 63],
                    [55, 72, 64],
                    [56, 73, 65],
                    [57, 75, 67],
                    [58, 70, 62],
                    [59, 68, 60],
                    [60, 64, 56],
                    [61, 60, 52],
                    [62, 65, 57],
                    [63, 67, 59],
                    [64, 68, 60],
                    [65, 69, 61],
                    [66, 70, 62],
                    [67, 72, 64],
                    [68, 75, 67],
                    [69, 80, 72]
                ]);

                var options = {
                    hAxis: {
                        title: 'Registro'
                    },
                    vAxis: {
                        title: 'Notas'
                    },
                    colors: ['#AB0D06', '#007329'],
                    trendlines: {
                        0: {
                            type: 'exponential',
                            color: '#333',
                            opacity: 1
                        },
                        1: {
                            type: 'linear',
                            color: '#111',
                            opacity: .3
                        }
                    }
                };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
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
                    <form>
                        <div class="row">
                            <div class="col-xl-3">
                                <label class="form-label">Código: </label>
                                <input class="form-control" type="text" readonly>
                            </div>
                            <div class="col-xl-9">
                                <label class="form-label">Aluno:</label>
                                <input class="form-control" type="text" readonly>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-9">
                                <label class="form-label">Atividade Realizada:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <label class="form-label">Nota: </label>
                                <input class="form-control" type="text" required>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <label class="form-label">Tutor: </label>
                        <input class="form-control" type="text" readonly>
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