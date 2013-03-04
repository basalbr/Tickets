<?php

$_partes = array();
foreach (explode('/', $url) as $parte) {
    if ($parte !== '') {
        $pos = strpos($parte, '?');
        if ($pos !== false) {
            $parte = substr($parte, 0, $pos);
            if ($parte === '') {
                continue;
            }
        }
        $_partes[] = $parte;
    }
}

//ROTEAMENTO
$arrayVisao = array(
    "Central do cliente" => "central",
    "Login" => "login",
    "Admin" => "admin"
    
    );
//FIM DO ROTEAMENTO

//SE FOR LOCAL HOST, DESABILITA O NOME DA PASTA
if ($isLocalHost) {
    unset($_partes[0]);
    $_partes = array_values($_partes);
}

//if (!empty($_partes[0]) && $_partes[0] == 'admin') {
//    $primeiraParte = 1;
//    $primeiroParam = 3;
//} else {
    $primeiraParte = 0;
    $primeiroParam = 2;
//}

$partes = array();
for ($i = $primeiraParte; ($i < $primeiroParam) && ($i < count($_partes)); $i++) {
    $partes[] = $_partes[$i];
}

// GRAVA PARAMETROS PASSADOS NO ARRAY ARGS[]
$args = array();
for ($i = $primeiroParam; $i < count($_partes); $i++) {
    $args[] = $_partes[$i];
}

if (empty($partes[0])) {
    $partes[0] = 'home';
}
if (empty($partes[1])) {
    $partes[1] = 'index';
}

$extensao = '';
if (strrpos($partes[1], '.') === false) {
    $extensao = '.php';
}

if (!empty($_partes[0]) && in_array($_partes[0], $arrayVisao)) {
    $file = realpath(__DIR__ . '/../..') . DIRECTORY_SEPARATOR . "visao" ;
    foreach($_partes as $parte){
        $file.= DIRECTORY_SEPARATOR . $parte;
    }
    
    $file .= $extensao;
    
}else{
    
     $file = realpath(__DIR__ . '/../..') . DIRECTORY_SEPARATOR . "visao" . DIRECTORY_SEPARATOR . $partes[0] . DIRECTORY_SEPARATOR . $partes[1] . $extensao;
}
//echo getcwd();

//if (!empty($_partes[0]) && $_partes[0] == 'admin') {
//    $file = realpath(__DIR__ . '/../admin') . DIRECTORY_SEPARATOR . $partes[0] . DIRECTORY_SEPARATOR . $partes[1] . $extensao;
//} else {
//    $file = realpath(__DIR__ . '/..') . DIRECTORY_SEPARATOR . $partes[0] . DIRECTORY_SEPARATOR . $partes[1] . $extensao;
//}
?>
