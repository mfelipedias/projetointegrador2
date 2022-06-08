<div class="row mb-3">
    <div class="card shadow-sm divContr" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50%; ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Adicionar novo aluno</p>
            </center>

        </div>
        <center>
            <div class="row" style="height: 5px; background: rgb(48,65,135); background: linear-gradient(90deg, rgba(48,65,135,1) 0%, rgba(22,115,247,1) 21%);;">&nbsp</div>
            <div class="row" style="height: 7px; background: #E74C3C;">&nbsp</div>
        </center>
    </div>
</div>
<div class="row">

    <div class="card p-3 divContr">

        <div class="row">
            <div class="col">

                <form class="container" action="./scripts/aluno_add.php" method="post" style="max-width: 800px;">
                    <div class="row">
                        <div class="col-xl-3">
                            <label class="form-label">Status: </label>
                            <select class="form-select" aria-label="Status" id="a_status" name="a_status">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="col-xl-9">
                            <label class="form-label">Nome:</label>
                            <input class="form-control"  id="a_nome" name="a_nome" type="text" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <label class="form-label">Data de Nascimento:</label>
                            <input class="form-control" type="date"  id="a_data" name="a_data" required>
                        </div>
                        <div class="col-xl-9">
                            <label class="form-label">Condição especial: </label>
                            <input class="form-control" type="text" id="a_condicao" name="a_condicao" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observações: </label>
                        <textarea class="form-control" id="a_obs" name="a_obs" rows="3"></textarea>
                    </div>

                    <hr>
                    <label class="form-label">Nome dos responsáveis: </label>
                    <input class="form-control" type="text" id="a_resp" name="a_resp" required>
                    <label class="form-label">Telefones: </label>
                    <input class="form-control" type="text" id="a_tel" name="a_tel" required>
                    <label class="form-label">Email: </label>
                    <input class="form-control" type="text" id="a_email" name="a_email" required>


                    <hr>

                    <div class="row mt-1">
                        <div class="col">
                            <a type="button" class="btn btn-secondary" href="?pagina=alunos">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>