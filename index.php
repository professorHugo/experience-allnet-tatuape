<?php
require_once 'cnf/config.php';
session_start();
if (isset($_SESSION['Login'])) {
    include 'parts/head.php';
    include_once 'parts/modal/usuario-logado.php';
}
if (isset($_POST['CadastrarAluno'])) {
    include 'parts/head.php';
    include_once 'parts/modal/CadastroEfetuado.php';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php include 'parts/head.php'; ?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-7918214509077495",
	    enable_page_level_ads: true
	  });
	</script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <?php
                        if (isset($_POST['submitLogin'])) {
                            #Armazenar os dados de login de acesso
                            $Login['matricula'] = $_POST['matricula'];
                            $Login['senha'] = $_POST['senha'];
                            $Login['remember'] = $_POST['lembrar'];

                            /* Lembrar usuario
                              if(isset($_POST['Remember'])){
                              $Login['remember'] = $_POST['lembrar'];
                              }
                             * */

                            #Verificar se o usuário foi ativado#
                            $QueryVerificarAtivacao = "SELECT * FROM usuarios WHERE matricula = '$Login[matricula]' AND ativado = 1";
                            $ExeQrVerificarAtivacao = mysql_query($QueryVerificarAtivacao);

                            if (mysql_num_rows($ExeQrVerificarAtivacao) < 1) {
                                
                                include_once 'parts/EnviarEmailNovamente.php';
                                
                                session_abort();
                                ?>
                                <script>
                                    alert("O usuario não foi ativado ainda, um novo e-mail foi enviado para fazer a ativação");
                                </script>
                                <meta http-equiv="refresh" content="1;index.php">
                                <?php
                            }

                            #Dados vazios
                            if (empty($Login['matricula'])) {
                                #Se não houver dados no campo da matrícula
                                include_once 'parts/modal/modal-usuario-vazio.php';
                            } else if (empty($Login['senha'])) {
                                #Se não houver dados no campo de senha
                                include_once 'parts/modal/modal-senha-vazia.php';
                            } else {
                                #Dados preenchidos, armazenar com MD5 os dados do aluno
                                $MatriculaMD5 = md5($Login['matricula']);
                                $SenhaMD5 = md5($Login['senha']);

                                $ReadLogin = read('usuarios', "WHERE matricula_md5 = '$MatriculaMD5'");

                                if ($ReadLogin) {
                                    #Armazenar em uma repetição
                                    foreach ($ReadLogin as $UsuarioLogado)
                                        ;

                                    if ($UsuarioLogado['matricula_md5'] === $MatriculaMD5 && $UsuarioLogado['senha_md5'] === $SenhaMD5) {
                                        #Ciar os cookies para guardar as informações no Pc do aluno
                                        if (isset($Login['remember'])) {
                                            ##CRIAR OS COOKIES##
                                            $cookieSalvar = $Login['matricula'] . '&' . $Login['senha'];
                                            setcookie('login', $cookieSalvar, time() + 60 * 20, '/');
                                        } else {
                                            ##CRIAR OS COOKIES##
                                            //$cookieSalvar = $acesso['login'] . '&' . $acesso['senha'];
                                            setcookie('login', $cookieSalvar, time() - 3600, '/');
                                        }
                                        #CRIAR SESSION DO USUÁRIO
                                        $_SESSION['Login'] = $UsuarioLogado;
                                        ?>
                                        <meta http-equiv="refresh" content="0;index.php">
                                        <?php
                                    } else {
                                        #Senha incorreta
                                        include_once 'parts/modal/modal-senha-errada.php';
                                    }
                                } else {
                                    #Usuário não tem cadastro
                                    include_once 'parts/modal/modal-usuario-sem-cadastro.php';
                                }
                            }
                        } else if (!empty($_COOKIE['login'])) {
                            #Fazer a inicialização do Cookie
//                            $cookie = $_COOKIE['login'];
//                            $cookie = explode('&', $cookie);
//                            $acesso['login'] = $cookie[0];
//                            $acesso['senha'] = $cookie[1];
//                            $acesso['lembrar'] = 1;
                            include_once 'parts/form-login.php';
                        } else if (isset($_GET['RememberPassword'])) {
                            include_once 'parts/form-recuperar-senha.php';
                        } else if (isset($_GET['Ativar'])) {
                            include_once 'parts/AtivarUsuario.php';
                        } else {
                            include_once 'parts/form-login.php';
                            include_once 'parts/modal/CadastrarUsuario.php';
                            /*echo md5("7437")."<br>";
			    echo md5("7055")."<br>";
			    echo md5("7457")."<br>";
			    echo md5("experience")."<br>";
			    */
                        }
                        //echo md5('7292');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
