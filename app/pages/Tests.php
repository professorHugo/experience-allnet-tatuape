<h3>Avaliações e Provas</h3>

<?php

if(isset($_POST['atualizar_questao'])){
  echo "Questão: " . $Questao = $_POST['questao'];
  echo "<br>Conteudo da pergunta: " . $ConteudoPergunta = $_POST['conteudo_pergunta'];
  echo "<br>" . $QueryUpdateQuestao = "UPDATE questoes_provas SET pergunta_prova = '$ConteudoPergunta' WHERE id_prova = $Questao";
  $ExeQrUpdateQuestao = mysql_query($QueryUpdateQuestao);

  // Update da Resposta Correta
   echo "Questão: " . $Questao = $_POST['questao'];
   echo "<br>Resposta Correta: " . $RespostaCoreta = $_POST['resposta_correta'];
   echo "<br><br>" . $QueryUpdateRespostaCorreta = "UPDATE respostas_corretas SET resposta = '$RespostaCoreta' WHERE id = $Questao";
   echo "<br>";
  $ExeQrUpdateRespostaCorreta = mysql_query($QueryUpdateRespostaCorreta);

  if($ExeQrUpdateRespostaCorreta){
    ?>
    Resposta atuaizada <br>
    <b>Resposta correta: </b> <?php echo $RespostaCoreta;?><br>
    <?php
  }else{
    ?>
    Erro: <b><?php echo mysql_error()?></b>
    <?php
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
  if($PermLogado == "Administrador"){

    include_once 'parts/perguntasEditar.php';

  }else {

    include_once 'parts/perguntasAluno.php';

  }
}

?>
<div class="clearfix"></div>
