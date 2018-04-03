<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $NomeLogado; ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li><a href="?page=Home"><i class="fa fa-home"></i> <span> HOME</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-laptop"></i> <span>Sala de Aula</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="?page=Presentations"><i class="fa fa-eye"></i> Apresentações</a></li>
                    <li><a href="?page=Documents"><i class="glyphicon glyphicon-book"></i> Documentos</a></li>
                    <li><a href="?page=Videos"><i class="glyphicon glyphicon-film"></i> Vídeos</a></li>
                    <li><a href="?page=Tests"><i class="glyphicon glyphicon-file"></i> Provas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-users"></i> <span>Dados do Usuário</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="?page=Dados_Pessoais"><i class="fa fa-photo"></i> <span> Dados Pessoais</span></a></li>
                    <li><a href="?page=Experiencia"><i class="fa fa-exclamation"></i> <span> Experiência</span></a></li>
                    <?php
                    if ($PermLogado == "Administrador") {
                        ?>
                        <li><a href="?page=Cadastrar_Aluno"><i class="fa fa-user"></i> <span> Cadastrar Novo Aluno</span></a></li>
                        <li><a href="?page=Cadastrar_Professor"><i class="glyphicon glyphicon-education"></i> <span> Cadastrar Novo Professor</span></a></li>
                        <li><a href="?page=Consultar_Alunos"><i class="glyphicon glyphicon-education"></i> <span> Consultar Alunos</span></a></li>
                        <?php
                    }
                    ?>
                    <li><a href="#" type="button" data-toggle="modal" data-target="#modal_senha"><i class="fa fa-key"></i> <span> Alterar Senha</span></a></li>
                </ul>
            </li>
            <li><a href="?page=Home&LogOff"><i class="fa fa-power-off"></i> <span> Sair</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>