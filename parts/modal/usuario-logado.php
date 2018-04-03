<!-- Modal Logged in-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:15%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="modal-title" id="myModalLabel">Usuário Logado</h4>

            </div>
            <div class="modal-body">

                <div class="col-md-12 text-center">
                    <img src="img/loading.svg">
                </div>
                <div class="col-md-12 text-center">
                    <p>Processando os dados encontrados...</p>
                    <p>Usuário conectado: <?php echo $_SESSION['Login']['nome'] ?></p>
                    <p>
                        Nível de permissão: 
                        <?php
                            if($_SESSION['Login']['permissao'] == 1){
                                echo "Administração do Expirience";
                            }else{
                                echo "Aluno do Expirience";
                            }
                            
                        ?>
                    </p>
                </div>
                <meta http-equiv="refresh" content="1;app">
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>