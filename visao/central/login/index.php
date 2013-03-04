<?php include_once '../../../controle/central/login/index.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once '../../../controle/central/includes/header.php'; ?>
    </head>

    <body class="nobg loginPage">

        <!-- Menu Topo -->
        <?php include_once '../../../controle/central/login/menu_topo.php'; ?>


        <!-- Main content wrapper -->
        <div class="loginWrapper">
            <div class="loginLogo"><img src="<?php echo $root_path ?>/imagem/loginLogo.png" alt="" /></div>
            <div class="widget">
                <div class="title"><img src="<?php echo $root_path ?>/imagem/icons/dark/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
                <form action="index.html" id="validate" class="form">
                    <fieldset>
                        <div class="formRow">
                            <label for="login">Username:</label>
                            <div class="loginInput"><input type="text" name="login" class="validate[required]" id="login" /></div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="pass">Password:</label>
                            <div class="loginInput"><input type="password" name="password" class="validate[required]" id="pass" /></div>
                            <div class="clear"></div>
                        </div>

                        <div class="loginControl">
                            <div class="rememberMe"><input type="checkbox" id="remMe" name="remMe" /><label for="remMe">Remember me</label></div>
                            <input type="submit" value="Log me in" class="dredB logMeIn" />
                            <div class="clear"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>    

        <!--Rodapé-->
        <?php include_once '../../../controle/central/includes/rodape.php'; ?>


    </body>
</html>