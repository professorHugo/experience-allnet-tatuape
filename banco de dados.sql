drop database experience;

CREATE DATABASE experience DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
use experience;

create table usuarios(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    unidade varchar(255),
    matricula varchar(255) COLLATE utf8_general_mysql500_ci,
    matricula_md5 varchar(255) COLLATE utf8_general_mysql500_ci,
    senha varchar(255) COLLATE utf8_general_mysql500_ci,
    senha_md5 varchar(255) COLLATE utf8_general_mysql500_ci,
    nome varchar(255) COLLATE utf8_general_mysql500_ci,
    email varchar(255),
    turma varchar(255),
    idade int(2)default '1',
    aula1 int(11) default '0',
    aula2 int(11) default '0',
    aula3 int(11) default '0',
    aula4 int(11) default '0',
    aula5 int(11) default '0',
    aula6 int(11) default '0',
    aula7 int(11) default '0',
    aula8 int(11) default '0',
    prova1 int(11) default '0',
    prova2 int(11) default '0',
    prova3 int(11) default '0',
    prova4 int(11) default '0',
    prova5 int(11) default '0',
    prova6 int(11) default '0',
    prova7 int(11) default '0',
    prova8 int(11) default '0',
    permissao int(11) DEFAULT 0 COMMENT '0 para alunos e 1 para prof 2 para adm',
    ativado int(1) default 0 comment '0 Para inativo, 1 para ativo'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

create table aulas(
    id int(11) not null primary key auto_increment,
    numero_aula int(1) not null,
    titulo_aula varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
    img_capa varchar(255) COLLATE utf8_general_mysql500_ci default 'img/default',
    img_docs varchar(255) COLLATE utf8_general_mysql500_ci default 'img/img00',
    link_apresentacao varchar(255) COLLATE utf8_general_mysql500_ci default '?',
    link_documento varchar(255) COLLATE utf8_general_mysql500_ci default '?'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/**
Tabelas do banco de dados
**/

INSERT INTO `aulas` (`id`, `numero_aula`, `titulo_aula`, `img_capa`, `img_docs`, `link_apresentacao`, `link_documento`) VALUES
(1, 1, 'Cloud Computing', 'img/Aula1', 'img/img01', 'https://drive.google.com/open?id=0Bx4hVCOh5y-Xem92aXFaanJPcmM', 'https://drive.google.com/open?id=0B4tUvFXK86gKR2x2and1dTRxTkU'),
(2, 2, 'Vocabulary', 'img/Aula2', 'img/img02', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XWVNHNzI1ZW9lRnM', ''),
(3, 3, 'Contrato de Trabalho', 'img/Aula3', 'img/img03', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XMjhyT1JPdFNreVE','https://drive.google.com/open?id=0B4tUvFXK86gKTEkzd1E1YVVDM1k'),
(4, 4, 'Identidade Visual', 'img/Aula4', 'img/img04', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XOGVMd0lOY3NHZjQ',''),
(5, 5, 'Painel de Controle', 'img/Aula5', 'img/img05', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XRU45YngtVWxpUU0','https://drive.google.com/open?id=0B4tUvFXK86gKZFZNYnR0OFN6TFU'),
(6, 6, 'Chunks', 'img/Aula6', 'img/img06', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbFRheXZnbFBsRGs','https://drive.google.com/open?id=0B4tUvFXK86gKWFBBTmtObE1TemM'),
(7, 7, 'Empreendedorismo', 'img/Aula7', 'img/img07', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbnNfQ1VIYWRpOTA','https://drive.google.com/open?id=0B4tUvFXK86gKZDlJUFR3dGVkdFk'),
(8, 8, 'Formatação de Computadores', 'img/Aula8', 'img/img08', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XQkEyWlQwNU51M0U','https://drive.google.com/open?id=0Bx4hVCOh5y-XTEpmS0ZqdGtFSms');

INSERT INTO `usuarios` (`id`, `matricula`, `matricula_md5`, `senha`, `senha_md5`, `nome`, `idade`, `aula1`, `aula2`, `aula3`, `aula4`, `aula5`, `aula6`, `aula7`, `aula8`, `prova1`, `prova2`, `prova3`, `prova4`, `prova5`, `prova6`, `prova7`, `prova8`, `permissao`) VALUES (NULL, 'experience', 'd6e047923b2b0f63a7a03c66074a0151', 'experience', 'd6e047923b2b0f63a7a03c66074a0151', 'Administrador', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2');