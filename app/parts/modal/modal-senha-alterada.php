<?php
$SenhaNova = $_POST['senha_nova'];
$SenhaNovaMD5 = md5($SenhaNova);
$MatriculaUsuario = $_SESSION['Login']['matricula'];
$QueryAlterarSenha = "UPDATE usuarios SET senha = '$SenhaNova' WHERE matricula = '$MatriculaUsuario'";
$QueryAlterarSenhaMD5 = "UPDATE usuarios SET senha_md5 = '$SenhaNovaMD5' WHERE matricula = '$MatriculaUsuario'";
$ExeQrAlterarSenha = mysql_query($QueryAlterarSenha);
$ExeQrAlterarSenhaMD5 = mysql_query($QueryAlterarSenhaMD5);
?>
<!-- Modal Senha Inválida-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="modal-title" id="myModalLabel">Senha alterada</h4>

            </div>
            <div class="modal-body">
                <div class="col-md-12 text-center">
                    <img src="img/loading.svg">
                </div>
                <div class="col-md-12 text-center">
                    A senha foi alterada com sucesso
                </div>
                <meta http-equiv="refresh" content="1;index.php">
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>