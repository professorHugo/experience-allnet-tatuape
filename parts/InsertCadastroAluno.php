<?php
$Unidade = $_POST['Unidade'];
$MatriculaCadastrada = $_POST['Matricula'];
$MatriculaMD5 = md5($MatriculaCadastrada);
$Senha = 'experience';
$SenhaMD5 = md5($Senha);
$NomeCompleto = $_POST['NomeCompleto'];
$EMailAluno = $_POST['EmailAluno'];
$TurmaAluno = $_POST['Turma'];

$QueryCadastrarAluno = "
        INSERT INTO usuarios (
            id, 
            unidade, 
            matricula, matricula_md5, 
            senha, senha_md5, 
            nome, email, turma, idade, 
            aula1, aula2, aula3, aula4, aula5, aula6, aula7, aula8, 
            prova1, prova2, prova3, prova4, prova5, prova6, prova7, prova8, 
            permissao, ativado) VALUES (
            NULL, 
            '$Unidade', 
            '$MatriculaCadastrada', '$MatriculaMD5', 
            '$Senha', '$SenhaMD5', 
            '$NomeCompleto', '$EMailAluno', '$TurmaAluno', '1', 
            '0', '0', '0', '0', '0', '0', '0', '0', 
            '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'
        )";

$ExeQrCadastrarAluno = mysql_query($QueryCadastrarAluno);

if (!$ExeQrCadastrarAluno) {
    ?>
    <script>alert("Erro ao cadastrar: <?php echo mysql_error() ?>")</script>
    <?php
}

$mensagem = '
			
                <!--Core jQuery-->
                <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

                <h1>Ol&aacute; ' . $NomeCompleto . '
                Seja Bem vindo ao ' . $SITENAME . '
                </h1>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-4 col-sm-6 col-md-8 col-lg-10">
                                <h3>Você se cadastrou com os seguintes dados:</h3>
                                <p class="lead">
                                        Unidade: ' . $Unidade . '<br>
                                        Matrícula: ' . $MatriculaCadastrada . '<br>
                                        Turma: ' . $TurmaAluno . '<br>
                                        E-mail de Cadastro: ' . $EMailAluno . '
                                </p>
                                <p>Seu cadastro est&aacute; quase completo, para concluir, precisamos que confirme seu cadastro clicando no link abaixo:<br>
                                <a href="http://experienceallnettatuape.n2y.com.br/index.php?Ativar&Usuario=' . $MatriculaMD5 . '">Ativar cadastro</a>
                                </p>

                                <p>
                                        Caso o link acima n&atilde;o funcione, copie o link a seguir e cole na barra de endereço do seu navegador:
                                        http://experienceallnettatuape.n2y.com.br/index.php?Ativar&Usuario=' . $MatriculaMD5 . '
                                </p>

                        </div>
                </div>
                
        ';
$enviar = sendMail('Cadastro no ' . $SITENAME, $mensagem, $mensagem, MAILUSER, $SITENAME, $EMailAluno, $NomeCompleto);
//$enviar = sendMail('Cadastro no sistema ' . $SITENAME, $mensagem, $mensagem, MAILUSER, SITENAME, $EMailAluno, $NomeCompleto);

if ($enviar) {
    ?><script>alert("Email enviado");</script><?php
} else {
    ?><script>alert("Email não foi enviado");</script><?php
}
?>
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
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                    <a href="index.php" class="btn btn-xl btn-success">OK</a>
                </div>
            </div>
        </div>
    </div>
</div>