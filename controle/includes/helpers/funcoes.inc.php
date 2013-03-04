<?php

function redirect_home(){
    global $_partes;
    
    if (!empty($_partes[0]) && $_partes[0] == 'admin'){
        header('Location: '.ROOT_PATH.'/admin/');
    }else{
        header('Location: '.ROOT_PATH.'/');
    }
    exit;
}

function redirect_referer($alternativo = null){
    if (!empty($_SERVER['HTTP_REFERER'])){
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } elseif ($alternativo){
        header('Location: '.$alternativo);
    }else{
        redirect_home();
    }
    exit;
}

function redirect_404(){
    header('Location: '.ROOT_PATH.'/404/');
}


function get_root_path($absolute = false){
    $root = '';
    if ($absolute){
        $root = rtrim('http://'.$_SERVER['SERVER_NAME'], '/');
    }
    $root .= ROOT_PATH;    
    return $root;
}

/**
 * Fonte: http://snipplr.com/view/2809/convert-string-to-slug/;
 * @param string $str
 * @return string
 */
function slug($str) {
    $str = strtolower(trim($str));
    $str = preg_replace('/[^a-z0-9-]/', '-', $str);
    $str = preg_replace('/-+/', "-", $str);
    return $str;
} 
?>