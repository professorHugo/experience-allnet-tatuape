<!-- Modal Alluno cadastrado-->
<div class="modal fade in text-muted" id="AlterarSenha" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form method="post" action="?page=Home&SenhaAlterada">
                <div class="modal-header">
                    <h4 class="modal-title lead">Primeiro Acesso - Altere sua senha</h4>
                </div>
                <div class="modal-body">
                    <p class="lead text-center">
                        Seja Bem vindo ao <b>Experience</b>, em seu primeiro acesso, altere sua senha padrão!
                    </p>
                    <div class="form-group">
                        <label for="matricula_usuario" class="col-sm-3 control-label">Usuário:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled id="matricula_usuario" placeholder="<?php echo $_SESSION['Login']['nome']; ?>">
                            <input type="hidden" name="matricula_usuario" value="<?php echo $_SESSION['Login']['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="senha_nova" class="col-sm-3 control-label">Nova Senha</label>
                        <div class="col-sm-9">
                            <input type="password" name="senha_nova" class="form-control" id="senha_nova" placeholder="Nova senha">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default"> Alterar </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>