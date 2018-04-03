<?php

if (isset($_POST['CadastrarAluno'])) {
    if ($_POST['Unidade'] != 'null') {
        include 'parts/InsertCadastroAluno.php';
//        include 'parts/modal/ModalCadastroEfetuado.php';
    } else {
        ?>
        <script>alert("Cadastro não efetuado, escolha a unidade para efetuar o seu cadastro");</script>
        <?php

    }
}