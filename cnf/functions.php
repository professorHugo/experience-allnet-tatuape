<?php

####################################
#     CONFIGURAÇÕES DO SISTEMA     #
####################################

/* * *********************************
  FUNÇÃO DE CADASTRO PESSOAS NO BANCO
 * ********************************* */
function create($tabela, array $dados) {
    $queryBuscarTabela = "SELECT * FROM {$tabela}";
    $exeQrBuscarTabela = mysql_query($queryBuscarTabela);
    $valores = "'" . implode("', '", array_values($dados)) . "'";

    $queryCadastrar = "INSERT INTO {$tabela}";
    $queryCadastrar .= "(tipo_pessoa,tratamento_pessoa,nome_pessoa,genero_pessoa,email_principal,cod_reg_cliente,reg_pessoa_cadastrada) VALUES ($valores)";

    mysql_query($queryCadastrar);
}

/* * *******************************
  FUNÇÃO PARA LER AS TABELAS NO BANCO
  OBS: Genérica
 * ******************************* */
function read($tabela, $cond = null) {
    $qrRead = "SELECT * FROM {$tabela} {$cond}";
    $stRead = mysql_query($qrRead) or die('Erro ao Buscar os valores da tabela: <strong>' . mysql_error() . '</strong>');
    $cFields = mysql_num_fields($stRead);

    for ($y = 0; $y < $cFields; $y++) {
        $names[$y] = mysql_field_name($stRead, $y);
    }

    for ($x = 0; $res = mysql_fetch_assoc($stRead); $x++) {
        for ($i = 0; $i < $cFields; $i++) {
            $resultado[$x][$names[$i]] = $res[$names[$i]];
        }
    }
    return $resultado;
}

/* * *******************************
  FUNÇÃO PARA LER AS TABELAS NO BANCO
  Deve alterar na chamada da função
  o nome para a $tabela
 * ******************************* */
function readTabela($tabela) {
    $qrRead = "SELECT * FROM {$tabela}";
    $stRead = mysql_query($qrRead) or die('Erro ao Buscar os valores da tabela: <strong>' . mysql_error() . '</strong>');
    $cFields = mysql_num_fields($stRead);

    for ($y = 0; $y < $cFields; $y++) {
        $names['names'][$y] = mysql_field_name($stRead, $y);
    }

    $nomes_colunas = implode(', ', $names['names']);

    return $nomes_colunas;
}

/* * ***********************************
  FUNÇÃO PARA CADASTRAR DADOS NAS TABELAS
 * *********************************** */
function cadastrarDados($tabela, $colunas_tabela, $valores_para_tabela) {

    $queryCadastrarAtivo = "INSERT INTO {$tabela}($colunas_tabela) VALUES($valores_para_tabela)";
    $exeQrCadastrarAtivo = mysql_query($queryCadastrarAtivo) or die("Erro ao cadastrar no banco de dados: " . mysql_error());
}

/* * ***************************
  GERAR RESUMOS
 * *************************** */
function lmWord($string, $words = '35') {
    $string = strip_tags($string);
    $count = strlen($string);

    if ($count <= $words) {
        return $string;
    } else {
        $strpos = strrpos(substr($string, 0, $words), ' ');
        return substr($string, 0, $strpos);
    }
}

/* * ***************************
  VALIDA O EMAIL
 * *************************** */
function valMail($email) {
    if (preg_match('/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/', $email)) {
        return true;
    } else {
        return false;
    }
}


/* * ***************************
  FORMATAR DATA
 * *************************** */
function FormDate($data) {
    $timestamp = explode(" ", $data);
    $getData = $timestamp[0];
    $getTime = $timestamp[1];

    $setData = explode('/', $getData);
    $dia = $setData[0];
    $mes = $setData[1];
    $ano = $setData[2];

    if (!$getTime):$getTime = date('H:i:s');
    endif;

    $resultado = $dia . '-' . $mes . '-' . $ano . ' ' . $getTime;

    return $resultado;
}
