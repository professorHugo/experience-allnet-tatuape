<h3>Avaliações e Provas</h3>

<?php

if(isset($_POST['atualizar_questao'])){
  echo "Questão: " . $Questao = $_POST['questao'];
  echo "<br>Conteudo da pergunta: " . $ConteudoPergunta = $_POST['conteudo_pergunta'];
  echo "<br>" . $QueryUpdateQuestao = "UPDATE questoes_provas SET pergunta = '$ConteudoPergunta' WHERE id_prova = $Questao";
  $ExeQrUpdateQuestao = mysql_query($QueryUpdateQuestao);

  if($ExeQrUpdateQuestao){
    echo "Pergunta atualizada, novo conteúdo: " . $ConteudoPergunta;
  }
}


  $QueryBuscarAulas = "SELECT * FROM aulas";
  $ExeQrBuscarAulas = mysql_query($QueryBuscarAulas);

while($returnAulasCurso = mysql_fetch_assoc($ExeQrBuscarAulas)){
  ?>
  <article class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 30px">
    <a href="?page=Tests&Aula=<?php echo $returnAulasCurso['numero_aula'] ?>">
        <div class="form-group" style="min-height: 120px;margin:0 auto;">
            <img src="../img/buttons/<?php echo $returnAulasCurso['numero_aula'] ?>.png" class="img-responsive img-rounded" style="max-height: 70px;max-width: 100%;margin: 0 auto 10px;">
            <span class="btn btn-default form-control" style="width: 100%;font-size: 12px"><?php echo $returnAulasCurso['titulo_aula'] ?></span>
        </div>
    </a>
  </article>
  <?php
}
if(isset($_GET['Aula'])){
  $AulaProva = $_GET['Aula'];
  echo $PermLogado;
  if($PermLogado == "Administrador"){
    $QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
    $ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);

    while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
      ?>
      <form action="#" method="post">
        <div class="form-group">
          <div class="col-md-10">
            <input type="text" name="conteudo_pergunta" class="form-control" value="<?php echo $ResBuscarQuestoes['pergunta']?>">
            <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
          </div>
          <div class="col-md-2">
            <button type="submit" name="atualizar_questao" class="btn btn-success">Atualizar</button>
          </div>
        </div>
      </form>
      <?php
    }
  }else {
    $QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
    $ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);
    ?>
    <form action="#" method="post">
    <?php
    while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
      ?>
      <div class="form-group">
        <?php echo $ResBuscarQuestoes['pergunta']?>
      </div>
      <?php
    }
    ?>
    </form>
    <?php
  }
}

?>
<div class="clearfix"></div>
<h3>Todas as questões</h3>
<hr style="border-color:#333">
<?php
    ?>
    Exibir apenas as avaliações para o aluno
    <?php
?>
