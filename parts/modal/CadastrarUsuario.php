<!--Modal para cadastro do aluno novo-->
<div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="ModalCadastro">
    <form action="#" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="ModalCadastro">Cadastre-se para obter todo o conteúdo on-line</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Unidade">Unidade: </label>
                        <select name="Unidade" class="form-control" id="Unidade">
                            <option value="null">Selecione sua unidade</option>
                            <option value="Tatuape">Tatuapé</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Matricula">Matrícula: </label>
                        <input type="number" name="Matricula" id="Matricula" placeholder="Matrícula..." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="NomeCompleto">Nome Completo: </label>
                        <input type="text" name="NomeCompleto" id="NomeCompleto" placeholder="Nome Completo..." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="EmailAluno">E-Mail: </label>
                        <input type="email" name="EmailAluno" id="EmailAluno" placeholder="exemplo@exemplo.com.br" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Turma">Turma: </label>
                        <input type="text" name="Turma" id="Turma" placeholder="Turma..." class="form-control" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="AceitoContrato" id="AceitoContrato" value="1">
                            Aceito os termos de contratos estabelecidos <a href="#" target="new">aqui</a>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                    <button type="submit" class="btn btn-xl btn-success" name="CadastrarAluno">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</div>