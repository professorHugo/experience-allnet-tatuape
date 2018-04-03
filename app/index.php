<?php
require_once '../cnf/config.php';
session_start();
//session_destroy();
$NomeLogado = $_SESSION['Login']['nome'];
$Matricula = $_SESSION['Login']['matricula'];
$Senha = $_SESSION['Login']['senha'];
$PermLogado = $_SESSION['Login']['permissao'];
if ($PermLogado == 2) {
    $PermLogado = "Administrador";
} else {
    $PermLogado = "Aluno";
}
if (isset($_GET['LogOff'])) {
    include_once 'parts/head.php';
    include_once 'parts/modal-log-off.php';
}
if (isset($_GET['SenhaAlterada'])) {
    include_once 'parts/head.php';
    include_once 'parts/modal/modal-senha-alterada.php';
}
if (isset($_SESSION['Login'])) {
    $QueryBuscarSenhaPadrao = "SELECT * FROM usuarios WHERE matricula = '$Matricula'";
    $ExeQrBuscarSenhaPadrao = mysql_query($QueryBuscarSenhaPadrao);

    while ($ReturnSenhaPadrao = mysql_fetch_assoc($ExeQrBuscarSenhaPadrao)) {
        $SenhaPadrao = $ReturnSenhaPadrao['senha'];
        $SenhaPadraoMD5 = $ReturnSenhaPadrao['senha_md5'];

        if ($SenhaPadrao === 'experience') {
            include_once 'parts/modal/AlterarSenhaPadrao.php';
        } else {
            break;
        }
    }
    ?>
    <!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
    <html>
        <head>
            <?php include_once 'parts/head.php'; ?>
        </head>
        <!--
        BODY TAG OPTIONS:
        =================
        Apply one or more of the following classes to get the
        desired effect
        |---------------------------------------------------------|
        | SKINS         | skin-blue                               |
        |               | skin-black                              |
        |               | skin-purple                             |
        |               | skin-yellow                             |
        |               | skin-red                                |
        |               | skin-green                              |
        |---------------------------------------------------------|
        |LAYOUT OPTIONS | fixed                                   |
        |               | layout-boxed                            |
        |               | layout-top-nav                          |
        |               | sidebar-collapse                        |
        |               | sidebar-mini                            |
        |---------------------------------------------------------|
        -->
        <body class="hold-transition skin-blue sidebar-mini">
            <div class="wrapper">

                <!-- Main Header -->
                <header class="main-header">

                    <!-- Logo -->
                    <a href="index.php" class="logo">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class="logo-mini"><b>EX</b>P</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg"><b>Ex</b>perience</span>
                    </a>

                    <!-- Header Navbar -->
                    <nav class="navbar navbar-static-top" role="navigation">
                        <!-- Sidebar toggle button-->
                        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <!-- Navbar Right Menu -->
                        <?php include_once 'parts/navbar-right.php'; ?>
                    </nav>
                </header>
                <!-- Left side column. contains the logo and sidebar -->

                <?php include_once 'parts/aside-menu.php'; ?>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Page Header
                            <small>Optional description</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                            <li class="active">Here</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content container-fluid">
                        <!--<img src="../img/fundo.jpg" style="position: fixed;top:7%;left:10%">-->
                        <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];

                            switch ($page) {
                                case $page: include_once 'pages/' . $page . '.php';
                                    break;
                                default: include_once 'nd.php';
                            }
                        } else {
                            include_once 'pages/Home.php';
                        }
                        ?>

                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                <!-- Main Footer -->
                <footer class="main-footer">
                    <!-- To the right -->
                    <div class="pull-right hidden-xs">
                        <?php echo $SITENAME . " V" . $Version ?>
                    </div>
                    <!-- Default to the left -->
                    <strong>Copyright &copy; 2017 <a href="http://www.n2y.com.br">Next2You</a>.</strong> All rights reserved.
                </footer>
            </div>
            <!-- Modal alterar senha -->
            <div class="modal fade" id="modal_senha" tabindex="-1" role="dialog" aria-labelledby="Alterar Senha">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Alterar Senha</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="matricula_usuario" class="col-sm-3 control-label">Usuário:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" disabled id="matricula_usuario" placeholder="<?php echo $_SESSION['Login']['nome']; ?>">
                                        <input type="hidden" name="matricula_usuario" value="<?php echo $_SESSION['Login']['id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha_atual" class="col-sm-3 control-label">Senha Atual</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="senha_atual" class="form-control" id="senha_atual" placeholder="Senha Atual">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha_nova" class="col-sm-3 control-label">Senha Nova</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="senha_nova" class="form-control" id="senha_nova" placeholder="Senha Atual">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Salvar nova Senha</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED JS SCRIPTS -->

            <!-- jQuery 3.1.1 -->
            <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.min.js"></script>

            <!-- Optionally, you can add Slimscroll and FastClick plugins.
                 Both of these plugins are recommended to enhance the
                 user experience. -->
        </body>
    </html>
    <?php
} else {
    include_once 'parts/head.php';
    include_once 'parts/modal-session-expired.php';
}