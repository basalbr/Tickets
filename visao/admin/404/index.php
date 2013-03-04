<?php include_once '../../../controle/admin/404/index.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once '../../../controle/admin/includes/header.php'; ?>
    </head>

    <body class="nobg errorPage">

        <!-- Top fixed navigation -->
        <?php
        include_once '../../../controle/admin/includes/menu_topo.php';
        ?>

        <!-- Main content wrapper -->
        <div class="errorWrapper">
            <span class="sadEmo"></span>
            <span class="errorTitle">Ahh, algo errado aconteceu :(</span>
            <span class="errorNum">404</span>
            <span class="errorDesc">Oops! Desculpe mas a página que você está tentando acessar não existe...</span>
            <a href="" action="history.go(-1)" class="button dredB"><span>Clique aqui para voltar</span></a>

        </div>    
        <?php include_once '../../../controle/admin/includes/rodape.php'; ?>
    </body>

</html>