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
                    <div class="col-lg-3">
                        <label class="form-label">Código</label>
                        <input class="form-control" type="text" readonly>

                    </div>
                    <div class="col-lg-9">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" type="text" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <label class="form-label">Idade:</label>
                        <input class="form-control" type="text" readonly>
                    </div>
                    <div class="col-9">
                        <label class="form-label">Condição especial: </label>
                        <input class="form-control" type="text" readonly>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
                </div>
                <h5 style=" margin-top:20px"><i class="bi  bi-heart" style="margin-right: 10px;"></i>Dados dos Responsáveis</h5>
                <hr>
                <label class="form-label">Nome dos responsáveis: </label>
                <input class="form-control" type="text" readonly>
                <label class="form-label">Telefones: </label>
                <input class="form-control" type="text" readonly>
                <label class="form-label">Email: </label>
                <input class="form-control" type="text" readonly>

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
                    <form>
                        <div class="row">
                            <div class="col-xl-3">
                                <label class="form-label">Código: </label>
                                <input class="form-control" type="text" readonly>

                            </div>
                            <div class="col-xl-9">
                                <label class="form-label">Nome:</label>
                                <input class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <label class="form-label">Idade:</label>
                                <input class="form-control" type="text" required>
                            </div>
                            <div class="col-xl-9">
                                <label class="form-label">Condição especial: </label>
                                <input class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    
                        <hr>
                        <label class="form-label">Nome dos responsáveis: </label>
                        <input class="form-control" type="text" required>
                        <label class="form-label">Telefones: </label>
                        <input class="form-control" type="text" required>
                        <label class="form-label">Email: </label>
                        <input class="form-control" type="text" required>
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
                <h5 class="modal-title" id="exampleModalLabel">
                    <h5 class="mt-3"><i class="bi bi-file-earmark-plus" style="margin-right: 10px;"></i>Nova atividade...</h5>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>