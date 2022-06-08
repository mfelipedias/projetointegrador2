<div class="row mb-3">
    <div class="card shadow-sm" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50% ">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">Postar um novo aviso</p>
            </center>

        </div>
        <center>
            <div class="row" style="height: 5px; background: rgb(48,65,135); background: linear-gradient(90deg, rgba(48,65,135,1) 0%, rgba(22,115,247,1) 21%);;">&nbsp</div>
            <div class="row" style="height: 7px; background: #E74C3C;">&nbsp</div>
        </center>
    </div>
</div>
<div class="row">

    <div class="card p-3" style=" background-image: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), url(./img/coruja.png);background-repeat: no-repeat;">

        <div class="row">
            <div class="col">

                <form class="container" action="./scripts/aviso_add.php" method="post" style="max-width: 800px;">
                    <div class="row">
                        <div class="col-xl-6">
                            <label class="form-label">Autor:</label>
                            <input class="form-control"  id="nome" name="nome" type="text" value="<?php echo $logado;?>" readonly>
                            <input class="form-control"  id="av_tutor" name="av_tutor" type="text" value="<?php echo $id_tutor;?>" hidden>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">Função:</label>
                            <input class="form-control"  id="av_funcao" name="av_funcao" type="text" value="<?php echo $funcao;?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <label class="form-label">Título:</label>
                            <input class="form-control" type="text"  id="av_titulo" name="av_titulo" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="av_conteudo" class="form-label">Conteúdo: </label>
                        <textarea class="form-control" id="av_conteudo" name="av_conteudo" rows="3"></textarea>
                    </div>

                    <hr>

                    <div class="row mt-1">
                        <div class="col">
                            <a type="button" class="btn btn-secondary" href="?pagina=home">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>