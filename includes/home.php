<style>
    .bg-coruja {
        background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(./img/coruja.png);
        background-repeat: no-repeat;
        color: black;
    }
</style>
<div class="row mb-3">
    <div class="card shadow-sm divContr" style="background-image: url(./img/pen.png);background-size: 130px; background-repeat: no-repeat; background-position: 0% 50%; ">
        <div class="card-body" style="padding-bottom: 0; background-image: url(./img/logo_escola.png);background-size: 120px; background-repeat: no-repeat; background-position: 99% 50%; background-color: transparent;">
            <center>
                <p class="lead text-muted" style="font-size:25px;font-family: 'My Big Heart Demo', sans-serif; ">E.E. Profª. Hermelina de Albuquerque Passarela</p>
                <p>
                    <a class="bi hover bi-vector-pen mx-2" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Criar Aviso" href="?pagina=aviso" style="font-size: 30px;"></a>
                    <a class="bi hover bi-facebook mx-2" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Facebook" href="#" style="font-size: 30px;"></a>
                    <a class="bi hover bi-instagram mx-2" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Instagram" href="#" style="font-size: 30px;"></a>
                    <a class="bi hover bi-envelope-paper mx-2" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Email" href="#" style="font-size: 30px;"></a>
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
    <div class="col-xl-6">
        <div class="">
            <h5><i class="bi bi-chat-left-dots" style="margin-right: 10px;"></i>Avisos</h5>
            <hr>
            <div class="list-group shadow-sm">
                <?php
                include './scripts/conexao.php';
                $sql = "SELECT * FROM `avisos` INNER JOIN `tutores` ON av_tutor=id_tutor ORDER BY av_create DESC";
                $todos = mysqli_query($conexao, "$sql LIMIT 5");
                while ($array = mysqli_fetch_array($todos)) {
                    $id_aviso = $array['id_aviso'];
                    $av_titulo = $array['av_titulo'];
                    $av_conteudo = $array['av_conteudo'];
                    $av_tutor = $array['av_tutor'];
                    $av_create = $array['av_create'];
                    $av_update = $array['av_update'];
                    $t_nome = $array['t_nome'];
                ?>
                    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 divContr" aria-current="true">
                        <i class="bi bi-cone-striped" style="font-size: 30px; color:#E74C3C"></i>
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                                <h6 class="mb-0"><?php echo $av_titulo ?></h6>
                                <p class="mb-0 opacity-90"><?php echo $av_conteudo ?></p>
                                <p class="mb-0 opacity-75">Autor: <?php echo $t_nome ?></p>
                            </div>
                            <small class="opacity-75 text-nowrap"><?php echo date('d/m/Y H:i:s', strtotime($av_create)); ?></small>
                        </div>
                    </a>
                <?php } ?>

            </div>
            <a href="#" type="button" class="mt-1 btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAvisos">ver tudo...</a>
            <!-- Modal -->
            <div class="modal fade" id="modalAvisos" tabindex="-1" aria-labelledby="modalAvisos" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Todos os avisos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="list-group">
                                <?php
                                include './scripts/conexao.php';
                                $sql = "SELECT * FROM `avisos` INNER JOIN `tutores` ON av_tutor=id_tutor ORDER BY av_create DESC";
                                $todos = mysqli_query($conexao, "$sql LIMIT 100");
                                while ($array = mysqli_fetch_array($todos)) {
                                    $id_aviso = $array['id_aviso'];
                                    $av_titulo = $array['av_titulo'];
                                    $av_conteudo = $array['av_conteudo'];
                                    $av_tutor = $array['av_tutor'];
                                    $av_create = $array['av_create'];
                                    $av_update = $array['av_update'];
                                    $t_nome = $array['t_nome'];
                                ?>
                                    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 divContr" aria-current="true">
                                        <i class="bi bi-cone-striped" style="font-size: 30px; color:#E74C3C"></i>
                                        <div class="d-flex gap-2 w-100 justify-content-between">
                                            <div>
                                                <h6 class="mb-0"><?php echo $av_titulo ?></h6>
                                                <p class="mb-0 opacity-90"><?php echo $av_conteudo ?></p>
                                                <p class="mb-0 opacity-75">Autor: <?php echo $t_nome ?></p>
                                            </div>
                                            <small class="opacity-75 text-nowrap"><?php echo date('d/m/Y H:i:s', strtotime($av_create)); ?></small>
                                        </div>
                                    </a>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <h5><i class="bi bi-info-square" style="margin-right: 10px;"></i>Informaçoes gerais</h5>
        <hr>
        <div class="card shadow-sm divContr" style="height: 424px;">
            <div class="card-body">
                <div class="row" style="margin-left: 0px;">
                    <p style="margin-left:8px;margin-bottom: 0; padding: 0;line-height: 1; color:#1673f7;font-family: 'Magistral Honesty', sans-serif;">Sistema</p>
                    <p style="margin-top: 0; margin-bottom: 0; padding: 0;line-height: 1.1;font-size: 30px;background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44); -webkit-text-fill-color: transparent;-webkit-background-clip: text;font-family: 'Magistral Honesty', sans-serif;">ACORDE</p>
                </div>
                <p style="line-height: 1">(Acompanhamento de Resultados e Demandas Especiais)</p>

                <p>Projeto Integrador II</p>
                <p>Sistema para acompanhamento de desempenho de alunos com TDAH</p>

                <small>
                    ALEC ALEXANDRE GRACELLI, RA 2007086<br>
                    GABRIELA CALLIGARIS KAYATT, RA 2004226<br>
                    DIEGO DA SILVA COSTA, RA 2015273<br>
                    LEANDRO DONIZETE DA SILVA, RA 2002583<br>
                    JOÃO FÁBIO SIQUEIRA DINIZ, RA 2006613<br>
                    MARCOS FELIPE ALMEIDA DIAS DA SILVA, RA 2004989<br>
                    RODRIGO OCTAVIO LOPES MENDES, RA 2005427
                </small>
            </div>
        </div>
    </div>
</div>