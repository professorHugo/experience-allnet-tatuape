<h2>Documentos das aulas</h2>
<?php
$MatriculaLogada = $_SESSION[Login][matricula];
$QueryAulasAssistidas = "SELECT * FROM usuarios WHERE matricula = '$MatriculaLogada'";
$ExeQueryAulasAssistidas = mysql_query($QueryAulasAssistidas);
if ($ExeQueryAulasAssistidas) {

    while ($ReturnAulasAluno = mysql_fetch_assoc($ExeQueryAulasAssistidas)) {
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

        if (mysql_num_rows($ExeQrBuscarAulas > 0)) {
            while ($DadosAulas = mysql_fetch_assoc($ExeQrBuscarAulas)) {
                ?>
                <article class="col-md-12">
                    <img src="<?php echo $DadosAulas['img_docs'] ?>" title="" alt="" class="img-responsive img-rounded img-bordered col-xs-12 col-sm-8 col-md-6 col-lg-6">
                    <p class="lead hidden-xs col-sm-4 col-md-6 col-lg-6" style="padding-top:12.5%;"><a href="<?php echo $DadosAulas['link_documento']; ?>" target="new">Aula <?php echo $DadosAulas['numero_aula'] ?> - <?php echo $DadosAulas['titulo_aula'] ?></a></p>
                </article>
                <div class="clearfix"></div>
                <hr>
                <?php
            }
        } else {
            ?>
            <article class="col-md-12">
                <img src="<?php echo $DadosAulas['img_docs'] ?>" title="" alt="" class="img-responsive img-rounded img-bordered col-xs-12 col-sm-8 col-md-6 col-lg-6">
                <p class="lead hidden-xs col-sm-4 col-md-6 col-lg-6" style="padding-top:12.5%;"><a href="<?php echo $DadosAulas['link_documento']; ?>" target="new">Aula <?php echo $DadosAulas['numero_aula'] ?> - <?php echo $DadosAulas['titulo_aula'] ?></a></p>
            </article>
            <div class="clearfix"></div>
            <hr>
            <?php
        }
    }
} else {
    echo "Deu ruim!";
}