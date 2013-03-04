<?php
$includeKey = "admin/clientes/index";
$arrClientes = ClienteQuery::create()->orderById(Criteria::DESC)->paginate();
?>
