<?php

$Usuario = md5($Login[matricula]);

$QueryBuscarAluno = "SELECT * FROM usuarios WHERE matricula_md5 = '$Usuario'";
$ExeQrBuscarAluno = mysql_query($QueryBuscarAluno);

if (mysql_num_rows($ExeQrBuscarAluno) >= 1) {
    while ($ReturnDadosAluno = mysql_fetch_assoc($ExeQrBuscarAluno)) {
        $NomeCompleto = $ReturnDadosAluno['nome'];
        $Unidade = $ReturnDadosAluno['unidade'];
        $MatriculaCadastrada = $ReturnDadosAluno['matricula'];
        $MatriculaMD5 = $ReturnDadosAluno['matricula_md5'];
        $TurmaAluno = $ReturnDadosAluno['turma'];
        $EMailAluno = $ReturnDadosAluno['email'];
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
            Caso o link acima n&atilde;o funcione, copie o link a seguir e cole na barra de endereço do seu navegador:<br>
            http://experienceallnettatuape.n2y.com.br/index.php?Ativar&Usuario=' . $MatriculaMD5 . '
        </p>

    </div>
</div>

';
        $enviar = sendMail('Cadastro no ' . $SITENAME, $mensagem, $mensagem, MAILUSER, $SITENAME, $EMailAluno, $NomeCompleto);
    }
}