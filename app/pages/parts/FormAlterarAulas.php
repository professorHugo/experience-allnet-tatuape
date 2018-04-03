<form action="?page=Confirmar_Aula" class="form-horizontal">
    <div class="form-group col-sm-12">
        <h3>Aluno: <?php echo $ReturnDadosUsuarios['nome'] ?></h3>
        <?php
        while ($NomesDasAulas = mysql_fetch_assoc($ExeQrNomesDasAulas)) {
            ?>
            <div class="col-md-4">
                <input type="checkbox" id="alterarAula<?php echo $NomesDasAulas['titulo_aula'] ?>" name="alterarAula<?php echo $NomesDasAulas['id'] ?>" value="<?php echo $ReturnDadosUsuarios['aula1']; ?>">
                <label for="alterarAula<?php echo $NomesDasAulas['titulo_aula'] ?>">
                    Aula - <?php echo $NomesDasAulas['titulo_aula'] ?>
                </label>
            </div>
            <?php
        }
        ?>
    </div>
</form>