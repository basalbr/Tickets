<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once '../../../controle/admin/includes/header.php'; ?>
    </head>

    <body>

        <!-- Left side content -->
        <div id="leftSide">
            <div class="logo"><a href="index.html"><img src="<?php echo $root_path ?>/imagem/logo.png" alt="" /></a></div>

            <div class="sidebarSep mt0"></div>

            <!-- Search widget -->
            <form action="" class="sidebarSearch">
                <input type="text" name="search" placeholder="search..." id="ac" />
                <input type="submit" value="" />
            </form>

            <div class="sidebarSep"></div>

            <!-- General balance widget -->
            <div class="genBalance">
                <a href="#" title="" class="amount">
                    <span>General balance:</span>
                    <span class="balanceAmount">$10,900.36</span>
                </a>
                <a href="#" title="" class="amChanges">
                    <strong class="sPositive">+0.6%</strong>
                </a>
            </div>

            <!-- Next update progress widget -->
            <div class="nextUpdate">
                <ul>
                    <li>Next update in:</li>
                    <li>23 hrs 14 min</li>
                </ul>
                <div class="pWrapper"><div class="progressG" title="78%"></div></div>
            </div>

            <div class="sidebarSep"></div>

            <!-- Left navigation -->
            <ul id="menu" class="nav">
                <li class="dash"><a href="index.html" title=""><span>Dashboard</span></a></li>
                <li class="charts"><a href="charts.html" title=""><span>Statistics and charts</span></a></li>
                <li class="forms"><a href="#" title="" class="active exp" id="current"><span>Forms stuff</span><strong>4</strong></a>
                    <ul class="sub">
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li class="this"><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                    </ul>
                </li>
                <li class="ui"><a href="ui_elements.html" title=""><span>Interface elements</span></a></li>
                <li class="tables"><a href="tables.html" title="" class="exp"><span>Tables</span><strong>3</strong></a>
                    <ul class="sub">
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li class="widgets"><a href="#" title="" class="exp"><span>Widgets and grid</span><strong>2</strong></a>
                    <ul class="sub">
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li class="errors"><a href="#" title="" class="exp"><span>Error pages</span><strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li class="files"><a href="file_manager.html" title=""><span>File manager</span></a></li>
                <li class="typo"><a href="#" title="" class="exp"><span>Other pages</span><strong>3</strong></a>
                    <ul class="sub">
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <!-- Right side -->
        <div id="rightSide">

            <!-- Top fixed navigation -->
            <div class="topNav">
                <div class="wrapper">
                    <div class="welcome"><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
                    <div class="userNav">
                        <ul>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                            <li class="dd"><a title=""><img src="<?php echo $root_path ?>/imagem/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                                <ul class="userDropdown">
                                    <li><a href="#" title="" class="sAdd">new message</a></li>
                                    <li><a href="#" title="" class="sInbox">inbox</a></li>
                                    <li><a href="#" title="" class="sOutbox">outbox</a></li>
                                    <li><a href="#" title="" class="sTrash">trash</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                            <li><a href="login.html" title=""><img src="<?php echo $root_path ?>/imagem/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- Responsive header -->
            <div class="resp">
                <div class="respHead">
                    <a href="index.html" title=""><img src="<?php echo $root_path ?>/imagem/loginLogo.png" alt="" /></a>
                </div>

                <div class="cLine"></div>
                <div class="smalldd">
                    <span class="goTo"><img src="<?php echo $root_path ?>/imagem/icons/light/alert.png" alt="" />Validation engine</span>
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
                                <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
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
                        <h5>Validation engine</h5>
                        <span>Do your layouts deserve better than Lorem Ipsum.</span>
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
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/plus.png" alt="" /><span>Add new session</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/database.png" alt="" /><span>New DB entry</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/hire-me.png" alt="" /><span>Add new user</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/statistics.png" alt="" /><span>Check statistics</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/comment.png" alt="" /><span>Review comments</span></a></li>
                            <li><a href="#" title=""><img src="<?php echo $root_path ?>/imagem/icons/control/32/order-149.png" alt="" /><span>Check orders</span></a></li>
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
                    <p><strong>INFORMATION: </strong>Form elements were divided into 4 different pages. Don't forget to check all of them!</p>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.iptJur').each(function(){
                            $(this).hide();
                        })
                        $('#selectReq').live('change', function(){
                            if ($("#selectReq").val() == 'F'){
                                $('.iptJur').each(function(){
                                    $(this).hide();
                                })
                                $('.iptFis').each(function(){
                                    $(this).show();
                                })
                            }else{
                                $('.iptJur').each(function(){
                                    $(this).show();
                                })
                                $('.iptFis').each(function(){
                                    $(this).hide();
                                })
                            }
                        });
                    });    
                </script>
                <!-- Validation form -->
                <form id="validate" class="form" method="post" action="">
                    <fieldset>
                        <div class="widget">
                            <div class="title"><img src="<?php echo $root_path ?>/imagem/icons/dark/alert.png" alt="" class="titleIcon" /><h6>Form validation with popups</h6></div>
                            <div class="formRow">
                                <label>Tipo de cliente:<span class="req">*</span></label>
                                <div class="formRight">
                                    <div class="floatL">
                                        <select  id="selectReq" class="validate[required]" >
                                            <option value="F" selected="selected">Pessoa Física</option>
                                            <option value="J">Pessoa Jurídica</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="formRow iptFis">
                                <label>Nome:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" title="Nome do cliente" maxlength="45" class="validate[required]" name="cliente[nome]" id="req"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow iptFis">
                                <label>Sobrenome:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" title="Sobrenome do cliente" maxlength="45" class="validate[required]" name="cliente[sobrenome]" id="req"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow iptJur">
                                <label>Nome Fantasia:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="validate[required]" maxlength="45" title="Nome Fantasia do cliente" name="cliente[nome_fantasia]" id="req"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow iptJur">
                                <label>Razão Social:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="validate[required]" maxlength="100" title="Razão Social do cliente" name="cliente[razao_social]" id="req"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow iptFis">
                                <label>CPF:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="validate[required,custom[cpf]] maskCpf" name="regexValid" id="regexValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow iptJur">
                                <label>CNPJ:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="validate[required,custom[cnpj]] maskCnpj" name="regexValid" id="regexValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Password:<span class="req">*</span></label>
                                <div class="formRight"><input type="password" class="validate[required]" name="password1" id="password1" /></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Repeat password:<span class="req">*</span></label>
                                <div class="formRight"><input type="password" class="validate[required,equals[password]]" name="password2" id="password2" /></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Minimum size:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="validate[required,minSize[6]]" name="minValid" id="minValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Maximum size:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="validate[required,maxSize[6]]" value="0123456789" name="maxValid" id="maxValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Only letters:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="this is an invalid char '.'" class="validate[required,custom[onlyLetterSp]]" name="lettersValid" id="lettersValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Only numbers and space:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="10.1" class="validate[required,custom[onlyNumberSp]]" name="numsValid" id="numsValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Regular expressions:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="too many spaces obviously" class="validate[required,custom[onlyLetterNumber]]" name="regexValid" id="regexValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>IP address:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="192.168.3." class="validate[required,custom[ipv4]]" name="ipValid" id="ipValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Email address:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="" class="validate[required,custom[email]]" name="emailValid" id="emailValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Date validation:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="2009/06/30" class="validate[custom[date],past[2010/01/01]]" name="dateValid" id="dateValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Selects:<span class="req">*</span></label>
                                <div class="formRight">
                                    <div class="floatL">
                                        <select name="selectReq" id="selectReq" class="validate[required]" >
                                            <option value="">Usual select box</option>
                                            <option value="opt2">Option 2</option>
                                            <option value="opt3">Option 3</option>
                                            <option value="opt4">Option 4</option>
                                            <option value="opt5">Option 5</option>
                                            <option value="opt6">Option 6</option>
                                            <option value="opt7">Option 7</option>
                                            <option value="opt8">Option 8</option>
                                        </select>
                                    </div>
                                    <div class="floatL" style="margin: 2px 0 0 10px;"><input type="checkbox" id="checkReq" name="checkReq" class="validate[required]" data-prompt-position="topRight:102" /><label for="checkReq">Checkbox</label></div>
                                    <div class="floatL" style="margin: 2px 0 0 0;"><input type="radio" id="radioReq" name="radioReq" class="validate[required]" data-prompt-position="topRight:102" /><label for="radioReq">Radio</label></div>
                                </div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Date format:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" value="2011-01-" class="validate[custom[date],future[NOW]]" name="dateformatValid" id="dateformatValid"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Textarea:<span class="req">*</span></label>
                                <div class="formRight"><textarea rows="8" cols="" name="textarea" class="validate[required]" id="textareaValid"></textarea></div><div class="clear"></div>
                            </div>
                            <div class="formSubmit"><input type="submit" value="submit" class="redB" /></div>
                            <div class="clear"></div>
                        </div>

                    </fieldset>
                </form>       

                <!-- Validation form -->
                <form id="usualValidate" class="form" method="post" action="">
                    <fieldset>
                        <div class="widget">
                            <div class="title"><img src="<?php echo $root_path ?>/imagem/icons/dark/alert.png" alt="" class="titleIcon" /><h6>Usual form validation</h6></div>
                            <div class="formRow">
                                <label>Usual field:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="firstname" id="firstname"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>With minimum chars:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="minChars" id="minChars"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>With maximum chars:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="maxChars" id="maxChars"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>With minimum num:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="mini" id="mini"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>With maximum num:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="maxi" id="maxi"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>With range:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="range" id="range"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Email field:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="emailField" id="emailField"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>URL field:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="urlField" id="urlField"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Date field:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="dateField" id="dateField"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Digits only:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="digitsOnly" id="digitsOnly"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Custom error message:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="customMessage" id="customMessage"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Enter password:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="enterPass" id="enterPass"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Repeat password:<span class="req">*</span></label>
                                <div class="formRight"><input type="text" class="required" name="repeatPass" id="repeatPass"/></div><div class="clear"></div>
                            </div>
                            <div class="formRow">
                                <label>Something from checks:<span class="req">*</span></label>
                                <div class="formRight"><input type="checkbox" id="agree" name="agree" class="required" /><label for="agree">Accept terms?</label></div><div class="clear"></div>
                            </div>
                            <div class="formSubmit"><input type="submit" value="submit" class="redB" /></div>
                            <div class="clear"></div>
                        </div>

                    </fieldset>
                </form>        

            </div>
            <!--Rodapé-->
            <?php include_once '../../../controle/admin/includes/rodape.php'; ?>    

        </div>

        <div class="clear"></div>

    </body>
</html>