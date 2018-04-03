<?php
$QueryBuscarAulasTodosUsuarios = "SELECT * FROM usuarios";
?>
<form action="" method="post" class="form-inline">
    <div class="form-group col-xs-11 col-sm-4 col-md-3 col-lg-3">
        <label for="MatriculaDoAluno" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Matrícula: </label>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <input type="text" class="form-control" name="MatriculaDoAluno" id="MatriculaDoAluno">
        </div>
    </div>
    <div class="form-group col-xs-11 col-sm-7 col-md-8 col-lg-8">
        <label for="NomeDoAluno" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Nome</label>
        <div class="col-xs-12 col-sm-5 col-md-9 col-lg-9">
            <input type="text" class="form-control" name="NomeDoAluno" id="NomeDoAluno" style="width:100%">
        </div>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search text-success"></i></button>
    </div>
</form>
<?php
if (isset($_POST['MatriculaDoAluno'])) {
    $Matricula = $_POST['MatriculaDoAluno'];
    $QueryBuscarAulasTodosUsuarios = "SELECT * FROM usuarios WHERE matricula = '$Matricula' AND permissao = 0";
} else if (isset($_POST['NomeDoAluno'])) {
    $NomeDoAluno = $_POST['NomeDoAluno'];
    $QueryBuscarAulasTodosUsuarios = "SELECT * FROM usuarios WHERE matricula = '$NomeDoAluno' AND permissao = 0";
} else {
    $QueryBuscarAulasTodosUsuarios = "SELECT * FROM usuarios WHERE permissao = 0";
}
$ExeQrBuscarAulasTodosUsuarios = mysql_query($QueryBuscarAulasTodosUsuarios);
?>
<table class="table table-striped">
    <tr>
        <td>Matrícula</td>
        <td>Nome</td>
        <td>
            <span id="inspBtn">Inspecionar</span>/<span id="editBtn">Editar</span>
        </td>
    </tr>
    <?php
    if (mysql_num_rows($ExeQrBuscarAulasTodosUsuarios) >= 1) {
        while ($ReturnDados = mysql_fetch_assoc($ExeQrBuscarAulasTodosUsuarios)) {
            ?>
            <tr>
                <td><?php echo $ReturnDados['matricula'] ?></td>
                <td><?php echo $ReturnDados['nome'] ?></td>
                <td><button class="glyphicon glyphicon-search" data-togle="modal" data-target="#ModalEditAluno<?php echo $ReturnDados['matricula'] ?>"></button></td>
            </tr>
            <?php
        }
    }
    ?>
</table>