<?php

  $QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
  // echo $QueryBuscarQuestoesProvas = "SELECT m.* , c.pergunta_prova FROM questoes_provas m INNER JOIN aulas a ON m.numero_aula = a.modulo_prova";
  // echo $QueryBuscarQuestoesProvas = "
  //       SELECT
  //       q.*, modulo_prova
  //       FROM questoes_provas as q
  //       INNER JOIN aulas as a
  //       ON q.modulo_prova = a.id
  //       ";
  // echo "<br>";

  $ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);

  while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
    ?>
    <div class="clearfix"></div>
    <form action="#" method="post">
      <div class="form-group">
        <div class="col-md-12">
          <label for="conteudo_pergunta">Pergunta<?php echo $ResBuscarQuestoes['id_prova']?></label>
          <textarea type="text" id="conteudo_pergunta" name="conteudo_pergunta" class="form-control" value=""><?php echo $ResBuscarQuestoes['pergunta_prova']?></textarea>
          <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
        </div>
      </div>
      <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
      <div class="form-group">
        <div class="col-md-12">
          <label for="resposta_correta">Respostas:</label>
          <p>Resposta Certa:
            <?php
            $IdResosta = $ResBuscarQuestoes['id_resposta_correta'];
            $QueryBuscarRespostaCerta = "SELECT * FROM respostas_corretas WHERE id = $IdResosta";
            $ExeQrBuscarRespostaCerta = mysql_query($QueryBuscarRespostaCerta);
            while($ReqRespostaCerta = mysql_fetch_assoc($ExeQrBuscarRespostaCerta)){
              ?>
              <input type="text" id="resposta_correta" name="resposta_correta" class="form-control" value="<?php echo $ReqRespostaCerta['resposta']?>">
              <?php
            }
            ?>
          </p>
        </div>
        <div class="col-md-12">
          <button type="submit" name="atualizar_questao" class="btn btn-success">Atualizar</button>
        </div>
      </div>
    </form>
    <hr class="col-md-12" style="border-color:#333">
    <?php
  }
