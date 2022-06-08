<?php
error_reporting(0);
$filtro = $_GET['filtro'];
?>
<div class="row mb-3">
    <div class="card shadow-sm divContr" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Atividades</p>
                <p>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <form action="./scripts/atividade_filtro.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Nome">
                                <div class="input-group-prepend">
                                    <button data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Pesquisar" href="#" type="submit" class="hover btn btn-outline-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-auto">
                        <a class="bi hover bi-file-earmark-plus mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Cadastrar Atividade" href="#" style="font-size: 27px;"></a>
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
    <div class="card shadow-sm divContr">
        <table class="table table-hover container divContr">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atividade</th>
                    <th scope="col">Nota Máxima(%)</th>
                    <th scope="col">Nota Esperada (%)</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './scripts/conexao.php';
                if ($filtro == "") {
                    $sql = "SELECT * FROM `atividades` ORDER BY at_nome ASC";
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
                    $id_atividade = $array['id_atividade'];
                    $at_nome = $array['at_nome'];
                    $at_notamax = $array['at_notamax'];
                    $at_notamin = $array['at_notamin'];
                    $at_descricao = $array['at_descricao'];
                ?>
                    <tr>
                        <th scope="row"><?php echo $id_atividade ?></th>
                        <td><?php echo $at_nome ?></td>
                        <td><?php echo $at_notamax ?></td>
                        <td><?php echo $at_notamin ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="..."><button class="btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $id_atividade ?>"><i class="bi bi-pen"></i></button><button class="btn btn-outline-danger" href="" data-bs-toggle="modal" data-bs-target="#modalExcluir<?php echo $id_atividade ?>"><i class="bi bi-trash"></i></button></div>
                        </td>
                        <div class="modal fade" id="modalExcluir<?php echo $id_atividade ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black;">
                            <div class="modal-dialog" role="document" style="width: 380px; transition: bottom .75s ease-in-out">
                                <div class="modal-content rounded-6 shadow" style="border-radius: .75rem;">
                                    <div class="modal-header border-bottom-0">
                                        <h5 class="modal-title">Exclusão</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-0">
                                        <p>Este cadastro está prestes a ser excluido. Essa ação não pode ser desfeita, deseja continuar?</p>
                                    </div>
                                    <div class="modal-footer flex-column border-top-0">
                                        <a type="button" class="btn btn-lg btn-danger w-100 mx-0 mb-2" href="./scripts/atividade_del.php?id=<?php echo $id_atividade ?>">Sim</a>
                                        <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Não</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modalEditar<?php echo $id_atividade ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black;">
                            <div class="modal-dialog" role="document" style="transition: bottom .75s ease-in-out">
                                <div class="modal-content rounded-6 shadow" style="border-radius: .75rem;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Alterar atividade</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="container" action="./scripts/atividade_edit.php" method="post">
                                            <div class="mb-3">
                                                <label for="id_atividade" class="form-label">#ID</label>
                                                <input type="text" class="form-control" id="id_atividade" name="id_atividade" value="<?php echo $id_atividade ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="at_nome" class="form-label">Atividade</label>
                                                <input type="text" class="form-control" id="at_nome" name="at_nome" value="<?php echo $at_nome ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="at_notamax" class="form-label">Nota Máxima</label>
                                                <input type="number" class="form-control" id="at_notamax" name="at_notamax" value="<?php echo $at_notamax ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="at_notamin" class="form-label">Nota Esperada</label>
                                                <input type="number" class="form-control" id="at_notamin" name="at_notamin" value="<?php echo $at_notamin ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="at_descricao" class="form-label">Descrição</label>
                                                <textarea class="form-control" id="at_descricao" name="at_descricao" rows="3" required><?php echo $at_descricao ?></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                                        <button type="sumit" class="btn btn-primary">Salvar</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
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
                      word-wrap: break-word;' href='?pagina=atividades&&pag=$anterior'>Anterior</a>";
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
                      word-wrap: break-word;' href='?pagina=atividades&&pag=$proximo'>Próxima</a>";
                }
                ?></center>
    </div>

</div>

<!-- Modal NOVA Atividade-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Atividade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="container" action="./scripts/atividade_add.php" method="post">
                    <div class="mb-3">
                        <label for="at_nome" class="form-label">Atividade</label>
                        <input type="text" class="form-control" id="at_nome" name="at_nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="at_notamax" class="form-label">Nota Máxima</label>
                        <input type="number" class="form-control" id="at_notamax" name="at_notamax" required>
                    </div>
                    <div class="mb-3">
                        <label for="at_notamin" class="form-label">Nota Esperada</label>
                        <input type="number" class="form-control" id="at_notamin" name="at_notamin" required>
                    </div>
                    <div class="mb-3">
                        <label for="at_descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="at_descricao" name="at_descricao" rows="3" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                <button type="sumit" class="btn btn-primary">Salvar</button>
            </div>
            </form>

        </div>
    </div>
</div>