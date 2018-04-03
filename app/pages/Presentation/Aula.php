<section class="col-md-12">
    <?php
    $AulaSelecionada = $_GET['Aula'];

    switch ($AulaSelecionada) {
        case $AulaSelecionada:
            $ImgAula = 'Aula' . $AulaSelecionada;
            break;
    }
    switch ($AulaSelecionada) {
        case 1: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-Xem92aXFaanJPcmM/view?usp=sharing';
            $LinkDocs = 'https://drive.google.com/file/d/0B4tUvFXK86gKR2x2and1dTRxTkU/view?usp=sharing';
            $NomeArquivo = 'IMG01';
            $NomeAula = 'Cloud Computing';
            break;
        case 2: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XWVNHNzI1ZW9lRnM/view?usp=sharing';
            $LinkDocs = '';
            $NomeArquivo = 'IMG02';
            $NomeAula = 'Vocabulary';
            break;
        case 3: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XMjhyT1JPdFNreVE/view?usp=sharing';
            $LinkDocs = 'https://drive.google.com/file/d/0B4tUvFXK86gKTEkzd1E1YVVDM1k/view?usp=sharing';
            $NomeArquivo = 'IMG03';
            $NomeAula = 'Contrato de Trabalho';
            break;
        case 4: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XOGVMd0lOY3NHZjQ/view?usp=sharing';
            $LinkDocs = '';
            $NomeArquivo = 'IMG04';
            $NomeAula = 'Identidade Visual';
            break;
        case 5: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XRU45YngtVWxpUU0/view?usp=sharing';
            $LinkDocs = 'https://drive.google.com/file/d/0B4tUvFXK86gKZFZNYnR0OFN6TFU/view?usp=sharing';
            $NomeArquivo = 'IMG05';
            $NomeAula = 'Painel de Controle';
            break;
        case 6: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XbFRheXZnbFBsRGs/view?usp=sharing';
            $LinkDocs = 'https://drive.google.com/file/d/0B4tUvFXK86gKWFBBTmtObE1TemM/view?usp=sharing';
            $NomeArquivo = 'IMG06';
            $NomeAula = 'Chunks';
            break;
        case 7: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XbnNfQ1VIYWRpOTA/view?usp=sharing';
            $LinkDocs = '';
            $NomeArquivo = 'IMG07';
            $NomeAula = 'Empreendedorismo';
            break;
        case 8: $LinkApres = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XQkEyWlQwNU51M0U/view?usp=sharing';
            $LinkDocs = 'https://drive.google.com/file/d/0Bx4hVCOh5y-XTEpmS0ZqdGtFSms/view?usp=sharing';
            $NomeArquivo = 'IMG08';
            $NomeAula = 'Formatação de Computadores';
            break;
    }
    ?>
    <article class="col-md-12">
        <p class="text-center lead">Aula: <?php echo $_GET['Aula'] . ' - ' . $NomeAula ?></p>
    </article>
    <div class="clearfix"></div>
    <article class="col-md-6">
        <a href="<?php echo $LinkApres ?>" target="new">
            <img src="img/<?php echo $ImgAula ?>.png" title="<?php echo $NomeAula ?>" class="img-responsive img-rounded">
        </a>
    </article>
    <article class="col-md-6">
        <a href="<?php echo $LinkDocs ?>" target="new">
            <img src="img/<?php echo $NomeArquivo ?>.jpg" title="<?php echo $NomeAula ?>" class="img-responsive img-circle">
        </a>
    </article>
    <div class="clearfix"></div>
    <article class="col-md-6 col-md-push-3 text-center"  style="margin-top: 50px">
        <p class="lead">Para baixar o conteúdo da aula, clique nas imagens acima</p>
    </article>
</section>