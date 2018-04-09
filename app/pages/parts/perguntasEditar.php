<?php
  $QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
  $ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);

  while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
    ?>
    <div class="clearfix"></div>
    <form action="#" method="post">
      <div class="form-group">
        <div class="col-md-12">
          <label for="conteudo_pergunta">Pergunta<?php echo $ResBuscarQuestoes['id_prova']?></label>
          <input type="text" id="conteudo_pergunta" name="conteudo_pergunta" class="form-control" value="<?php echo $ResBuscarQuestoes['pergunta']?>">
          <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
        </div>
        <div class="col-md-12">
          <button type="submit" name="atualizar_questao" class="btn btn-success">Atualizar</button>
        </div>
      </div>
    </form>
    <div class="clearfix"></div>
    <form action="#" method="post">
      <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
      <div class="form-group">
        <div class="col-md-12">
          <label for="resposta_correta">Respostas:</label>
          <p>Resposta Certa:
            <input type="text" id="resposta_correta" name="resposta_correta" class="form-control" value="<?php echo $ResBuscarQuestoes['resposta_correta']?>">
          </p>
          <p>
            Respostas incorretas:
            <input type="text" id="resposta_errada1" name="resposta_errada1" class="form-control" value="<?php echo $ResBuscarQuestoes['resposta_errada1']?>">
            <input type="text" id="resposta_errada2" name="resposta_errada2" class="form-control" value="<?php echo $ResBuscarQuestoes['resposta_errada2']?>">
            <input type="text" id="resposta_errada3" name="resposta_errada3" class="form-control" value="<?php echo $ResBuscarQuestoes['resposta_errada3']?>">
          </p>
        </div>
        <div class="col-md-12">
          <button type="submit" name="atualizar_resposta" class="btn btn-success">Atualizar Respostas</button>
        </div>
      </div>
    </form>
    <hr class="col-md-12" style="border-color:#333">
    <?php
  }
