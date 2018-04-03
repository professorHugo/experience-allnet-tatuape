<div class="panel-heading" style="background-color: #0075b0">
    <img src="img/logo.png" alt="Experience" title="Experience" class="img-responsive">
</div>
<div class="panel-body">
    <form role="form" action="" method="post">
        <fieldset>
            <div class="form-group">
                <select name="unidade" class="form-control">
                    <option value="null" selected>Selecione a unidade</option>
                    <option value="tatuape">Tatuapé</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Matrícula" name="matricula" type="text" autofocus value="<?php
                if (isset($acesso['login'])):echo $acesso['login'];
                endif;
                if (isset($_GET['Acessar'])):echo $_GET['Acessar'];
                endif;
                ?>">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Senha" name="senha" type="password" value="<?php
                if (isset($acesso['login'])):echo $acesso['senha'];
                endif;
                ?>">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input name="lembrar" type="checkbox" value="1" <?php
                        if (isset($acesso['lembrar'])):echo 'checked="checked"';
                        endif;
                        ?> >Lembrar de mim
                    </label>
                </div>

            </div>
            <!-- Change this to a button or input when using this as a form -->
            <div class="col-md-6">
                <button type="submit" class="btn btn-xl btn-success btn-block" name="submitLogin">Entrar</button>
            </div>
            <div class="text-center col-md-6">
                <button type="button" class="btn btn-lx btn-info btn-block" data-toggle="modal" data-target="#ModalCadastro">Fazer o cadastro</button>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12">
                <a href="?RememberPassword" class="btn btn-lg btn-warning col-md-12" style="font-size: 75%;">Esqueci a senha</a>
            </div>
        </fieldset>
    </form>
</div>