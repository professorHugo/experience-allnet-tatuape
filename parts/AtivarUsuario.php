<?php
if (isset($_GET['Ativar'])) {
    $UsuarioAtivacao = $_GET['Usuario'];
    "<br>";
    $QueryBuscarUsuarioParaAtivar = "SELECT * FROM usuarios WHERE matricula_md5 = '$UsuarioAtivacao'";
    $ExeQrBuscarUsuarioParaAtivar = mysql_query($QueryBuscarUsuarioParaAtivar);

    if (mysql_num_rows($ExeQrBuscarUsuarioParaAtivar) >= 1) {
        while ($ResBuscarAtivar = mysql_fetch_assoc($ExeQrBuscarUsuarioParaAtivar)) {
            $MatriculaAtivar = $ResBuscarAtivar['matricula'];
            $MatriculaMD5 = $ResBuscarAtivar['matricula_md5'];
            $NomeAtivar = $ResBuscarAtivar['nome'];

            $QueryAtivarUsuario = "UPDATE usuarios SET ativado = 1 WHERE matricula_md5 = '$MatriculaMD5'";
            $ExeQrAtivarUsuario = mysql_query($QueryAtivarUsuario);

            if ($ExeQrAtivarUsuario) {
                ?>
                <!-- Modal Ativar usuario-->
                <div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:11%">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Cadastro Ativação da Matrícula: <?php echo $MatriculaAtivar ?></h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 text-center">
                                    <p class="lead">
                                        Olá <?php echo $NomeAtivar ?>, seja bem vindo ao Sistema <?php echo $SITENAME . ' - Unidade ' . $_POST['Unidade'] ?>
                                    </p>
                                    <hr>
                                    <p class="">
                                        Seu usuário foi ativado com sucesso, agora pode usar o sistema livremente
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                                    <a href="?Acessar=<?php echo $MatriculaAtivar ?>" class="btn btn-xl btn-success" name="Acessar">Acessar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    }
}