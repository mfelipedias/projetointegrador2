<div class="row mb-3">
    <div class="card shadow-sm" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Adicionar novo Tutor/Usuário</p>
            </center>

        </div>
        <center>
            <div class="row" style="height: 5px; background: rgb(48,65,135); background: linear-gradient(90deg, rgba(48,65,135,1) 0%, rgba(22,115,247,1) 21%);;">&nbsp</div>
            <div class="row" style="height: 7px; background: #E74C3C;">&nbsp</div>
        </center>
    </div>
</div>
<div class="row">

    <div class="card p-3">
        <form action="./scripts/tutor_add.php" method="post">
            <div class="row">
                <div class="col-xl-2">
                    <label class="form-label">Status: </label>
                    <select class="form-select" aria-label="Status" id="t_status" name="t_status">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>

                </div>
                <div class="col-xl-5">
                    <label class="form-label">Nome:</label>
                    <input class="form-control" type="text" id="t_nome" name="t_nome" required>
                </div>
                <div class="col-xl-5">
                    <label class="form-label">Função:</label>
                    <input class="form-control" type="text" id="t_funcao" name="t_funcao" required>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <label class="form-label">Email: </label>
                    <input class="form-control" type="text" id="t_email" name="t_email"required>
                </div>
                <div class="col">
                    <label class="form-label">Usuário: </label>
                    <input class="form-control" type="text" id="t_user" name="t_user" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label">Senha: </label>
                    <input class="form-control" type="password" id="t_senha" name="t_senha" placeholder="Digite uma senha..." required>
                </div>
                <div class="col">
                    <label class="form-label">Repita a senha: </label>
                    <input class="form-control" type="password" id="t_rsenha" name="t_rsenha" placeholder="Repita a senha..." oninput='validaSenha(this)' required>
                </div>


            </div>


            <div class="row mt-4">
                <div class="col">
                    <a type="button" class="btn btn-secondary" href="?pagina=tutores">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>

            </div>

        </form>
    </div>
</div>