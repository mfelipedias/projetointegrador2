<div class="row mb-3">
    <div class="card shadow-sm" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Alunos</p>
                <p>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" id="pesquisa" placeholder="Nome">
                                <div class="input-group-prepend">
                                    <button data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Pesquisar" href="#" type="submit" class="hover btn btn-outline-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-auto">
                        <a class="bi hover bi-person-plus mx-2" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Cadastrar Aluno" href="#" style="font-size: 27px;"></a>
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
                    <th scope="col">Nome</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Condição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td>Henrique Almeida</td>
                    <td>2B</td>
                    <td>7</td>
                    <td>TDAH</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="..."><a class="btn btn-outline-primary" href="?pagina=alunos_view"><i class="bi bi-eye"></i></a></a><a class="btn btn-outline-danger" href="#"><i class="bi bi-trash"></i></a></div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>