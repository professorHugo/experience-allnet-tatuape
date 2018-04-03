<h2>Cadastro do aluno</h2>
<hr>
<?php
if (isset($_POST['CadastrarAluno'])) {
    require '../cnf/config.php';
    
    $Cadastrar[matricula] = $_POST['matricula'];
    $Cadastrar[matricula_md5] = md5($Cadastrar[matricula]);
    $Cadastrar[nome] = $_POST['nome'];
    $Cadastrar[idade] = $_POST['idade'];
    $Cadastrar[senha] = 'experience';
    $Cadastrar[senha_md5] = md5($Cadastrar[senha]);
    
    $QueryCadastrarUsuario = "INSERT INTO usuarios(matricula,matricula_md5,senha,senha_md5,nome,idade,permissao) VALUES('$Cadastrar[matricula]','$Cadastrar[matricula_md5]','$Cadastrar[senha]','$Cadastrar[senha_md5]','$Cadastrar[nome]','$Cadastrar[idade]',0)";
    
    $ExeQrCadastrarUsuario = mysql_query($QueryCadastrarUsuario);

    if (isset($ExeQrCadastrarUsuario)) {
        include_once 'parts/modal/AlunoCadastrado.php';
    } else {
        echo 'Sei lá';
    }
} else {
    ?>
    <form method="post" action="#">
        <div class="form-group col-xs-2 col-sm-6 col-md-3 col-lg-2">
            <label for="matricula"> Matrícula</label>
            <input type="text" name="matricula" id="matricula" placeholder="Matrícula" title="Matrícula" class="form-control">
        </div>
        <div class="form-group col-xs-4 col-sm-6 col-md-5 col-lg-4">
            <label for="nome"> Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" title="nome" class="form-control">
        </div>
        <div class="form-group col-xs-2 col-sm-6 col-md-4 col-lg-2">
            <label for="idade"> Idade</label>
            <input type="text" name="idade" id="idade" placeholder="Idade" title="idade" class="form-control">
        </div>

        <div class="form-group col-xs-4 col-sm-6 col-md-4 col-lg-4">
            <label for="foto"> Foto do Aluno</label>
            <input type="file" id="foto">
            <p class="help-block">Escolha a foto do aluno.</p>
        </div>

        <button type="submit" class="btn btn-primary" name="CadastrarAluno">Cadastrar o aluno</button>
        <button type="reset" class="btn btn-danger">Limpar formulário</button>
    </form>
    <?php
}