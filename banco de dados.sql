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
(2, 2, 'Vocabulary', 'img/Aula2', 'img/img02', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XWVNHNzI1ZW9lRnM', '...'),
(3, 3, 'Contrato de Trabalho', 'img/Aula3', 'img/img03', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XMjhyT1JPdFNreVE','https://drive.google.com/open?id=0B4tUvFXK86gKTEkzd1E1YVVDM1k'),
(4, 4, 'Identidade Visual', 'img/Aula4', 'img/img04', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XOGVMd0lOY3NHZjQ','...'),
(5, 5, 'Painel de Controle', 'img/Aula5', 'img/img05', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XRU45YngtVWxpUU0','https://drive.google.com/open?id=0B4tUvFXK86gKZFZNYnR0OFN6TFU'),
(6, 6, 'Chunks', 'img/Aula6', 'img/img06', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbFRheXZnbFBsRGs','https://drive.google.com/open?id=0B4tUvFXK86gKWFBBTmtObE1TemM'),
(7, 7, 'Empreendedorismo', 'img/Aula7', 'img/img07', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbnNfQ1VIYWRpOTA','https://drive.google.com/open?id=0B4tUvFXK86gKZDlJUFR3dGVkdFk'),
(8, 8, 'Formatação de Computadores', 'img/Aula8', 'img/img08', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XQkEyWlQwNU51M0U','https://drive.google.com/open?id=0Bx4hVCOh5y-XTEpmS0ZqdGtFSms');

INSERT INTO `usuarios` (`id`, `matricula`, `matricula_md5`, `senha`, `senha_md5`, `nome`, `idade`, `aula1`, `aula2`, `aula3`, `aula4`, `aula5`, `aula6`, `aula7`, `aula8`, `prova1`, `prova2`, `prova3`, `prova4`, `prova5`, `prova6`, `prova7`, `prova8`, `permissao`) VALUES (NULL, 'experience', 'd6e047923b2b0f63a7a03c66074a0151', 'experience', 'd6e047923b2b0f63a7a03c66074a0151', 'Administrador', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2');

CREATE TABLE questoes_provas(
	id_prova int not null,
	modulo_prova int,
	pergunta varchar(500) not null,
  resposta_correta varchar(500) not null,
  resposta_errada1 varchar(500) not null,
  resposta_errada2 varchar(500) not null,
  resposta_errada3 varchar(500) not null,
  PRIMARY KEY (id_prova),
  FOREIGN KEY (modulo_prova) REFERENCES aulas(id)
);


INSERT INTO `questoes_provas` (`id_prova`, `modulo_prova`, `pergunta`,`resposta_correta`,`resposta_errada1`,`resposta_errada2`,`resposta_errada3`) VALUES
(1, 1, 'Qual a função do sistema de Cloud Computing?','...','...','...','...'),
(2, 1, 'Levando em consideração os Servidores Google, OneDrive, Mega e Dropbox. Quais são suas quantidades de armazenamento no formato de cadastro Gratuito','...','...','...','...'),
(3, 1, 'Quais as vantagens de se usar os serviços de Cloud Computing?','...','...','...','...'),
(4, 1, 'Falando do Servidor do Google (Drive), quais as funcionalidades além de armazenamento de arquivos genéricos?','...','...','...','...'),
(5, 1, 'Além de armazenamento de arquivos, podemos também compartilhar com outros usuários da mesma nuvem, ou até mesmo quem não tem conta de usuário. Quais as duas formas básicas para compartilhamento?','...','...','...','...'),
(6, 3, 'É um tipo de trabalhador que presta o serviço por conta própria, para vários tomadores de serviço, mas sem estar presente a subordinação. Assinale a alternativa que corresponde corretamente essa afirmação. O que foi afirmado anterior, refere-se à:','...','...','...','...'),
(7, 3, 'É aquele que desenvolve suas atividades profissionais esporadicamente (eventos, acontecimentos, obra, serviço específico) para um empregador. Assinale a alternativa que corresponde corretamente essa afirmação:','...','...','...','...'),
(8, 3, 'É aquele prestado por pessoa física a uma empresa, para atender a necessidade transitória de substituição de seu pessoal regular e permanente ou a acréscimo extraordinário de serviços. Assinale a alternativa que corresponde corretamente essa afirmação: ','...','...','...','...'),
(9, 3, 'Quando não há documento que prove a vinculação entre as partes, porém existindo provas apenas de testemunhas. De acordo com essa afirmação, assinale a alternativa que corresponde corretamente ao tipo de contrato: ','...','...','...','...'),
(10, 3, 'Assinale a alternativa que preenche corretamente as lacunas da afirmação a seguir. <b>Considera-se aprendizagem o contrato de trabalho celebrado com colaboradores entre ___ e ____ anos de idade, pelo qual o ________________ assume a responsabilidade de treinar esse funcionário para a atividade que foi designado.</b>','...','...','...','...'),
(11, 3, 'Sua finalidade consiste em mostrar ao empregador a verificação da capacidade funcional do empregado na execução dos serviços e também permitir ao empregado descobrir se vai se adaptar às condições de emprego. Assinale a alternativa que corresponde ao contrato de trabalho correspondente a afirmação.','...','...','...','...'),
(12, 3, 'É o contrato de trabalho que tem datas de início e término antecipadamente combinadas entre o trabalhador e o empregador. Assinale a alternativa que corresponde ao contrato de trabalho com as características acima citadas','...','...','...','...'),
(13, 3, '_____________________________ é aquele que, por vontade dos contratantes, não é estipulada a sua duração, podendo findar a qualquer tempo, por iniciativa de uma das partes. Assinale a alternativa que corresponde corretamente com o tipo do contrato de acordo com a afirmação acima.','...','...','...','...'),
(14, 3, 'A lei permite que o trabalhador acumule mais de um emprego, pode isto ocorrer quando:','...','...','...','...'),
(15, 3, 'Os direitos apresentados no contrato de trabalho apenas deixarão de ter validade, quando: ','...','...','...','...'),
(16, 5, 'Qual a função do painel de controle?','...','...','...','...'),
(17, 5, 'O que é um firewall e sua importância durante a navegação na internet?','...','...','...','...'),
(18, 5, 'Qual é a diferença entre um usuário comum e um usuário administrador do sistema?','...','...','...','...'),
(19, 5, 'O que é um grupo doméstico e em qual local de rede ele pode ser configurado?','...','...','...','...'),
(20, 5, 'Selecione abaixo quais são os 3 dispositivos que podem ser conectados no computador?','...','...','...','...'),
(21, 6, '__________, Sam, I’m sure your performance will be great.','...','...','...','...'),
(22, 6, 'Hi, Tom, __________, I was just telling Sara about your new car','...','...','...','...'),
(23, 6, 'The English test was a _____________','...','...','...','...'),
(24, 6, 'They really ___________ when they built this bathroom','...','...','...','...'),
(25, 6, 'I have the biggest ______ on Triss. She’s so cute!','...','...','...','...'),
(26, 6, 'told you I was going to settle the score! ___________.','...','...','...','...'),
(27, 6, 'What did you think of my new haircut?” “I loved it!” It’s _________!','...','...','...','...'),
(28, 6, 'Hey Tommy, what are you guys doing?”  “We’re _______________ Do you want to come round?','...','...','...','...'),
(29, 6, 'What’s wrong with Amy?  “Didn’t you hear? Alex ___________ her last night! Just don’t mention his name at all!','...','...','...','...'),
(30, 6, 'How was the Jack Johnson concert?”  “It was awesome. Everyone _________.','...','...','...','...'),
(31, 8, 'O que é Sistema Operacional?','...','...','...','...'),
(32, 8, 'Qual programa que instala imagens de sistemas operacionais?','...','...','...','...'),
(33, 8, 'Selecione quais são as 2 vantagens para a instalação da máquina virtual?','...','...','...','...'),
(34, 8, 'O que é particionamento?','...','...','...','...'),
(35, 8, 'Qual a vantagem da formatação de um computador?','...','...','...','...'),
(36, 8, 'O que é gerenciador de boot?','...','...','...','...'),
(37, 8, 'O que é BackUp?','...','...','...','...'),
(38, 8, 'O que são Drivers?','...','...','...','...'),
(39, 8, 'O que é BIOS?','...','...','...','...'),
(40, 8, 'Cite outro sistema operacional a não ser o Windows.','...','...','...','...');
