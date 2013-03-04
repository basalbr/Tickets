<?php

$isLocalHost = (in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1',)));
$modoDebug = $isLocalHost;

// mostrando erros (apenas local)
if ($modoDebug) {
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

//Seta o locale
$locale = setlocale(LC_ALL, 'pt_BR.ISO-8859-1', 'pt_BR', 'Portuguese_Brazil.1252');

include_once dirname(__FILE__) . '/../includes/includes.php';

// faço o filtro para o modo de manutenção
//$configuracao = ConfiguracaoPeer::getInstance();
// a sessão teste é setada na página de manutenção, passando na url "?dev=1"
//if($configuracao && $configuracao->getManutencao() == 1 && empty($_SESSION['dev'])) {
//    header('Location:'.ROOT_PATH.'/manutencao.php');
//    exit;
//}
// CONFIGURA O ROOT PATH
$root_path = ROOT_PATH;

// VERIFICA CAMINHO REQUISITADO
$url = preg_replace("%^$root_path/%", "", $_SERVER['REQUEST_URI']);

require dirname(__FILE__) . '/roteamento.php';

//Não mostra Notices no admin
if (ini_get('display_errors') && $_partes && $_partes[0] == 'admin') {
    error_reporting(E_ALL & ~E_NOTICE);
}

if (!is_file($file)) {
     $file = realpath(__DIR__ . '/../..') . DIRECTORY_SEPARATOR . "visao" ;
    foreach($_partes as $parte){
        $file.= DIRECTORY_SEPARATOR . $parte;
    }
    $file .= DIRECTORY_SEPARATOR . "index" . $extensao;
    if (!is_file($file)) {
        $file = realpath(dirname(__FILE__) . '/../404/index.php'); // PÁGINA DE NÃO ENCONTRADO
    }
}
chdir(dirname($file)); //Atualiza o diretorio corrente
include($file); // REQUISITA A PAGINA SOLICITADA