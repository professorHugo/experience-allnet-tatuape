<h2>Cadastro do Professor</h2>
<hr>
<form>
    <div class="form-group col-xs-2 col-sm-6 col-md-3 col-lg-2">
        <label for="matricula"> Login</label>
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
    
    <button type="submit" class="btn btn-primary">Cadastrar o professor</button>
    <button type="reset" class="btn btn-danger">Limpar formulário</button>
</form>