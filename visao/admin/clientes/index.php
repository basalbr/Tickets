<?php
include_once '../../../controle/admin/clientes/index.php';
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page;
}
$arrClientes = ClienteQuery::create()->orderById(Criteria::DESC)->paginate($page);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once '../../../controle/admin/includes/header.php'; ?>
    </head>

    <body>

        <!-- Menu esquerdo -->
        <?php
        include_once '../../../controle/admin/includes/menu_esquerdo.php';
        ?>


        <!-- Right side -->
        <div id="rightSide">


            <!-- Menu topo -->
            <?php
            include_once '../../../controle/admin/includes/menu_topo.php';
            ?>

            <!-- Responsive header -->
            <div class="resp">
                <div class="respHead">
                    <a href="index.html" title=""><img src="<?php echo $root_path ?>/imagem/loginLogo.png" alt="" /></a>
                </div>

                <div class="cLine"></div>
                <div class="smalldd">
                    <span class="goTo"><img src="<?php echo $root_path ?>/imagem/icons/light/frames.png" alt="" />Clientes</span>
                    <ul class="smallDropdown">
                        <li><a href="index.html" title=""><img src="<?php echo $root_path ?>/imagem/icons/light/home.png" alt="" />Dashboard</a></li>
                        <li><a href="charts.html" title=""><img src="<?php echo $root_path ?>/imagem/icons/light/stats.png" alt="" />Statistics and charts</a></li>
                        <li><a href="#" title="" class="exp"><img src="<?php echo $root_path ?>/imagem/icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                            <ul>
                                <li><a href="forms.html" title="">Form elements</a></li>
                                <li><a href="form_validation.html" title="">Validation</a></li>
                                <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                                <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                            </ul>
                        </li>
                        <li><a href="ui_elements.html" title=""><img src="<?php echo $root_path ?>/imagem/icons/light/users.png" alt="" />Interface elements</a></li>
                        <li><a href="tables.html" title="" class="exp"><img src="<?php echo $root_path ?>/imagem/icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                            <ul>
                                <li><a href="table_static.html" title="">Static tables</a></li>
                                <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                                <li class="last"><a href="table_sortable_resizable.html" title="">Clientes</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="exp"><img src="<?php echo $root_path ?>/imagem/icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                            <ul>
                                <li><a href="widgets.html" title="">Widgets</a></li>
                                <li class="last"><a href="grid.html" title="">Grid</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="exp"><img src="<?php echo $root_path ?>/imagem/icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                            <ul class="sub">
                                <li><a href="403.html" title="">403 page</a></li>
                                <li><a href="404.html" title="">404 page</a></li>
                                <li><a href="405.html" title="">405 page</a></li>
                                <li><a href="500.html" title="">500 page</a></li>
                                <li><a href="503.html" title="">503 page</a></li>
                                <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                            </ul>
                        </li>
                        <li><a href="file_manager.html" title=""><img src="<?php echo $root_path ?>/imagem/icons/light/files.png" alt="" />File manager</a></li>
                        <li><a href="#" title="" class="exp"><img src="<?php echo $root_path ?>/imagem/icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                            <ul>
                                <li><a href="typography.html" title="">Typography</a></li>
                                <li><a href="calendar.html" title="">Calendar</a></li>
                                <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="cLine"></div>
            </div>

            <!-- Title area -->
            <div class="titleArea">
                <div class="wrapper">
                    <div class="pageTitle">
                        <h5>CLIENTES</h5>
                        <span>Listagem de clientes</span>
                    </div>
                    <div class="middleNav">
                        <ul>
                            <li class="mUser"><a href="#" title=""><span class="users"></span></a>
                                <ul class="mSub1">
                                    <li><a href="#" title="">Add user</a></li>
                                    <li><a href="#" title="">Statistics</a></li>
                                    <li><a href="#" title="">Orders</a></li>
                                </ul>
                            </li>
                            <li class="mMessages"><a href="#" title=""><span class="messages"></span></a>
                                <ul class="mSub2">
                                    <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                                    <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                                    <li><a href="#" title="">Closed tickets</a></li>
                                </ul>
                            </li>
                            <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                            <li class="mOrders"><a href="#" title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                                <ul class="mSub4">
                                    <li><a href="#" title="">Pending uploads</a></li>
                                    <li><a href="#" title="">Statistics</a></li>
                                    <li><a href="#" title="">Trash</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="line"></div>

            <!-- Page statistics area -->
            <div class="statsRow">
                <div class="wrapper">
                    <div class="controlB">
                        <ul>

                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/hire-me.png" alt="" /><span>Cadastrar cliente</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/statistics.png" alt="" /><span>Relatórios</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/order-149.png" alt="" /><span>Visualizar Tickets</span></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="line"></div>

            <!-- Main content wrapper -->
            <div class="wrapper">

                <!-- Note -->
                <div class="nNote nInformation hideit">
                    <p><strong>INFORMATION: </strong>Here are both versions of tables - with sortable and resizable columns.</p>
                </div>


                <div class="widget">
                    <div class="title"><img src="<?php echo $root_path ?>/imagem/icons/dark/frames.png" alt="" class="titleIcon" />
                        <h6>Tabela de clientes</h6></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable" id="res1">
                        <thead>
                            <tr>
                                <td class="sortCol"><div>Nome<span></span></div></td>
                                <td class="sortCol"><div>Tipo<span></span></div></td>
                                <td class="sortCol"><div>CPF/CNPJ<span></span></div></td>
                                <td class="sortCol"><div>Telefone<span></span></div></td>
                                <td class="sortCol"><div>E-mail<span></span></div></td>
                                <td class="sortCol"><div>Total de Tickets<span></span></div></td>
                                <td class="sortCol"><div>Status<span></span></div></td>
                                <td class="sortCol"><div>Opções<span></span></div></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($arrClientes->getResults()) > 0) {
                                foreach ($arrClientes->getResults() as $cliente) {
                                    ?>
                                    <tr>
                                        <td><?php echo $cliente->getNomeCliente() ?></td>
                                        <td><?php echo $cliente->getTipoCliente() ?></td>
                                        <td><?php echo $cliente->getCpfCnpj() ?></td>
                                        <td><?php echo $cliente->getTelefone() ?></td>
                                        <td><?php echo $cliente->getEmail() ?></td>
                                        <td><?php echo count($cliente->getTickets()) ?></td>
                                        <td><?php echo $cliente->getSituacao() ?></td>
                                        <td align="center">
                                            <a href="#" title="Editar" class="smallButton" style="margin: 5px;"><img src="<?php echo $root_path ?>/imagem/icons/dark/pencil.png" alt=""></a>
                                            <a href="#" title="Desabilitar" class="smallButton" style="margin: 5px;"><img src="<?php echo $root_path ?>/imagem/icons/dark/close.png" alt=""></a>
                                        </td>
                                    </tr>

                                <?php }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="8" align="center">Nenhum cliente cadastrado</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>

            <!--Rodapé-->
            <?php include_once '../../../controle/admin/includes/rodape.php'; ?>

        </div>

        <div class="clear"></div>

    </body>
</html>