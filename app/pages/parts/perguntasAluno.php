<?php

$QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
$ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);
// if(mysql_num_rows($ExeQrBuscarQuestoesProvas) > 0){
?>
<form action="#" method="post">
<?php
while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
  ?>
  <div class="form-group col-md-12">
    <h3>Questão<?php echo $ResBuscarQuestoes['id_prova'].":</b><br> " ;echo $ResBuscarQuestoes['pergunta']?></h3>
    <label class="col-md-3 text-justify" style="font-weight: 100;border:1px solid #ddd;min-height:100px">
      <input type="radio" name="<?php echo $ResBuscarQuestoes['id_prova']?>" value="1"><?php echo $ResBuscarQuestoes['resposta_correta']?>
    </label>
    <label class="col-md-3 text-justify" style="font-weight: 100;border:1px solid #ddd;min-height:100px">
      <input type="radio" name="<?php echo $ResBuscarQuestoes['id_prova']?>" value="1"><?php echo $ResBuscarQuestoes['resposta_errada1']?>
    </label>
    <label class="col-md-3 text-justify" style="font-weight: 100;border:1px solid #ddd;min-height:100px">
      <input type="radio" name="<?php echo $ResBuscarQuestoes['id_prova']?>" value="1"><?php echo $ResBuscarQuestoes['resposta_errada2']?>
    </label>
    <label class="col-md-3 text-justify" style="font-weight: 100;border:1px solid #ddd;min-height:100px">
      <input type="radio" name="<?php echo $ResBuscarQuestoes['id_prova']?>" value="1"><?php echo $ResBuscarQuestoes['resposta_errada3']?>
    </label>
  </div>
  <hr style="border-color:#333;">
  <?php
}
?>
<input type="submit" name="enviarRespostas" value="Enviar Respostas" class="btn btn-lg btn-success">
<input type="reset" name="limparFormulario" value="Limpar Respostas" class="btn btn-lg btn-warning">
</form>
