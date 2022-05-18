<div class="row mb-3">
    <div class="card shadow-sm" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Atividades</p>
                <p>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" id="pesquisa" placeholder="Nome" required>
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
    <div class="card shadow-sm">
        <table class="table table-hover container">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Identificação de Escrita</td>
                    <td>100%</td>
                    <td>80%</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="..."><a class="btn btn-outline-primary" href="#"><i class="bi bi-pen"></i></a><a class="btn btn-outline-danger" href="#"><i class="bi bi-trash"></i></a></div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Atividade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Atividade</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nota Máxima</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nota Esperada</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
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