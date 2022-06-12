<?php
include './scripts/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tutores WHERE id_tutor = $id";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $id_tutor = $array['id_tutor'];
    $t_nome = $array['t_nome'];
    $t_status = $array['t_status'];
    $t_funcao = $array['t_funcao'];
    $t_email = $array['t_email'];
    $t_tel = $array['t_tel'];
    $t_user = $array['t_user'];
    $t_create = $array['t_create'];
    $t_update = $array['t_update'];
}
?>
<div class="row mb-3">
    <div class="card shadow-sm divContr" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Alterar cadastro de: <?php echo $t_nome ?></p>
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

                <form class="container" action="./scripts/tutor_edit.php" method="post" style="max-width: 800px;">
                    <div class="row">
                    <div class="col-xl-2">
                            <label class="form-label">ID:</label>
                            <input class="form-control" type="text" id="id_tutor" name="id_tutor" value="<?php echo $id_tutor ?>" readonly>
                        </div>
                        <div class="col-xl-2">
                            <label class="form-label">Status: </label>
                            <select class="form-select" aria-label="Status" id="t_status" name="t_status">
                                <option value="<?php echo $t_status ?>"><?php if ($t_status == 1) : echo "Ativo";
                                                                        else : echo "Inativo";
                                                                        endif; ?></option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>

                        </div>
                        <div class="col-xl-4">
                            <label class="form-label">Cadastro:</label>
                            <input class="form-control" type="text" id="t_create" name="t_create" value="<?php echo date('d/m/Y H:i:s', strtotime($t_create)); ?>" readonly>
                        </div>
                        <div class="col-xl-4">
                            <label class="form-label">Atualização:</label>
                            <input class="form-control" type="text" id="t_update" name="t_update" value="<?php echo date('d/m/Y H:i:s', strtotime($t_update)); ?>" readonly>
                        </div>
                        <div class="col-xl-7">
                            <label class="form-label">Nome:</label>
                            <input class="form-control" type="text" id="t_nome" name="t_nome" value="<?php echo $t_nome ?>" required>
                        </div>
                        <div class="col-xl-5">
                            <label class="form-label">Função:</label>
                            <select class="form-select" id="t_funcao" name="t_funcao" required>
                                <option value="<?php echo $t_funcao ?>"><?php echo $t_funcao ?></option>
                                <option value="Administrador(a)">Administrador(a)</option>
                                <option value="Conferente(a)">Conferente</option>
                                <option value="Diretor(a)">Diretor(a)</option>
                                <option value="Pedagogo(a)">Pedagogo(a)</option>
                                <option value="Professor(a)">Professor(a)</option>
                                <option value="Psicólogo(a)">Psicológo(a)</option>
                                <option value="Tutor(a)">Tutor(a)</option>

                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Email: </label>
                            <input class="form-control" type="text" id="t_email" name="t_email" value="<?php echo $t_email ?>" required maxlength="100">
                        </div>
                        <div class="col">
                            <label class="form-label">Telefone: </label>
                            <input class="form-control" type="text" id="t_tel" name="t_tel" value="<?php echo $t_tel ?>" required maxlength="20">
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-6">
                            <label class="form-label">Usuário: </label>
                            <input class="form-control" type="text" id="t_user" name="t_user" value="<?php echo $t_user ?>" readonly maxlength="50">

                        </div>
                        <div class="col">
                            <a class="btn btn-primary" style="margin-top:30px" href="#" data-bs-toggle="modal" data-bs-target="#modalSenha">Mudar Senha</a>
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
    </div>
</div>

    <!-- Modal Senha -->
    <div class="modal fade" id="modalSenha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mudança de Senha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" action="./scripts/senha_edit.php" method="post">
                        <label for="status" class="form-label">#ID:</label>
                        <input type="text" class="form-control " id="id_tutor" name="id_tutor" value="<?php echo $id_tutor ?>" readonly>

                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="t_senha" name="t_senha" placeholder="Nova senha..." maxlength="20" required>
                        <label for="rsenha" class="form-label">Repita senha:</label>
                        <input type="password" class="form-control" id="t_rsenha" name="t_rsenha" placeholder="Repita a senha..." maxlength="20" oninput='validaSenha(this)' required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="Submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>