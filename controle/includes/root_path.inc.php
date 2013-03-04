<?php
//ROOT_PATH: caminho do site dentro da pasta publica (public_html, htdocs, web, ...).
if (!defined('ROOT_PATH')){
    
    $root = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']));
        
    $root = trim($root, '/');
    
    if ($root){
        define('ROOT_PATH', '/'.$root);
    }else{
        define('ROOT_PATH', '');
    }
}
?>