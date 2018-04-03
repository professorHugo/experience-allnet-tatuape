<!-- Modal Cadastro Efetuado -->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:11%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="modal-title" id="myModalLabel">Cadastro Efetuado - Matrícula: <?php echo $_POST['Matricula'] ?></h4>

            </div>
            <div class="modal-body">

                <div class="col-md-12 text-center">
                    <img src="img/loading.svg">
                </div>
                <div class="col-md-12 text-center">
                    <p class="lead">
                        Olá <?php echo $_POST['NomeCompleto'] ?>, seja bem vindo ao Sistema <?php echo $SITENAME . ' - Unidade ' . $_POST['Unidade'] ?>
                    </p>
                    <hr>
                    <p class="">
                        Para concluir, será necessário confirmar seu cadastro. Enviamos um e-mail para <?php echo $_POST['EmailAluno'] ?>, verifique sua caixa de entrada para confirmar o cadastro
                    </p>
                </div>
                <!--<meta http-equiv="refresh" content="1;app">-->
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>