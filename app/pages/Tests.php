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
if(isset($_POST['atualizar_resposta'])){
  // Update da Resposta Correta
   "Questão: " . $Questao = $_POST['questao'];
   "<br>Resposta Correta: " . $RespostaCoreta = $_POST['resposta_correta'];
   "<br>Resposta Errada 1: " . $RespostaErrada1 = $_POST['resposta_errada1'];
   "<br>Resposta Errada 2: " . $RespostaErrada2 = $_POST['resposta_errada2'];
   "<br>Resposta Errada 3: " . $RespostaErrada3 = $_POST['resposta_errada3'];
   "<br><br>" . $QueryUpdateRespostaCorreta = "UPDATE questoes_provas SET resposta_correta = '$RespostaCoreta', resposta_errada1 = '$RespostaErrada1', resposta_errada2 = '$RespostaErrada2', resposta_errada3 = '$RespostaErrada3' WHERE id_prova = $Questao";
   "<br>";
  $ExeQrUpdateRespostaCorreta = mysql_query($QueryUpdateRespostaCorreta);

  if($ExeQrUpdateRespostaCorreta){
    ?>
    Respostas atuaizadas <br>
    <b>Resposta correta: </b> <?php echo $RespostaCoreta;?><br>
    <b>Resposta errada 1: </b> <?php echo $RespostaErrada1;?><br>
    <b>Resposta errada 2: </b> <?php echo $RespostaErrada2;?><br>
    <b>Resposta errada 3: </b> <?php echo $RespostaErrada3;?><br>
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
