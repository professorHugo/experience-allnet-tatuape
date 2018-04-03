<section class="content-fluid text-center col-md-10 col-md-push-1">
    <?php
    $QueryBuscarAulasAluno = "SELECT * FROM usuarios WHERE matricula = '$Matricula'";
    $ExeQrBuscarAulasAluno = mysql_query($QueryBuscarAulasAluno);

    if ($ExeQrBuscarAulasAluno) {

        while ($ReturnAulasAluno = mysql_fetch_assoc($ExeQrBuscarAulasAluno)) {
            $AulaAssistida1 = $ReturnAulasAluno['aula1'];
            if ($AulaAssistida1 == 1) {
                $AulaAssistida1 = 1;
            }
            $AulaAssistida2 = $ReturnAulasAluno['aula2'];
            if ($AulaAssistida2 == 1) {
                $AulaAssistida2 = 2;
            }
            $AulaAssistida3 = $ReturnAulasAluno['aula3'];
            if ($AulaAssistida3 == 1) {
                $AulaAssistida3 = 3;
            }
            $AulaAssistida4 = $ReturnAulasAluno['aula4'];
            if ($AulaAssistida4 == 1) {
                $AulaAssistida4 = 4;
            }
            $AulaAssistida5 = $ReturnAulasAluno['aula5'];
            if ($AulaAssistida5 == 1) {
                $AulaAssistida5 = 5;
            }
            $AulaAssistida6 = $ReturnAulasAluno['aula6'];
            if ($AulaAssistida6 == 1) {
                $AulaAssistida6 = 6;
            }
            $AulaAssistida7 = $ReturnAulasAluno['aula7'];
            if ($AulaAssistida7 == 1) {
                $AulaAssistida7 = 7;
            }
            $AulaAssistida8 = $ReturnAulasAluno['aula8'];
            if ($AulaAssistida8 == 1) {
                $AulaAssistida8 = 8;
            }


            $QueryBuscarAulas = "SELECT * FROM aulas WHERE numero_aula = $AulaAssistida1 OR numero_aula = $AulaAssistida2 OR numero_aula = $AulaAssistida3 OR numero_aula = $AulaAssistida4 OR numero_aula = $AulaAssistida5 OR numero_aula = $AulaAssistida6 OR numero_aula = $AulaAssistida7 OR numero_aula = $AulaAssistida8";
            $ExeQrBuscarAulas = mysql_query($QueryBuscarAulas);

            $DadosAulas[numero_aula];

            if (mysql_num_rows($ExeQrBuscarAulas)) {

                while ($AulasAssistidas = mysql_fetch_assoc($ExeQrBuscarAulas)) {
                    ?>
                    <article class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 30px">
                        <a href="?page=Presentations&Aula=<?php echo $AulasAssistidas[numero_aula] ?>">
                            <div class="form-group" style="min-height: 120px;margin:0 auto;">
                                <img src="../img/buttons/<?php echo $AulasAssistidas[numero_aula] ?>.png" class="img-responsive img-rounded" style="max-height: 70px;max-width: 100%;margin: 0 auto 10px;">
                                <span class="btn btn-default form-control" style="width: 100%;font-size: 12px"><?php echo $AulasAssistidas[titulo_aula] ?></span>
                            </div>
                        </a>
                    </article>

                    <?php
                }
            } else {
                ?>
                <article class="col-md-12 tet-center lead">
                    Você ainda não assitiu nenhuma aula do <b>Experience</b>, quando assistir, será liberado o material para fazer download
                </article>
                <?php
            }
        }
    }
    ?>
</section>