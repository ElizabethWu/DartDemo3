<?php /* Smarty version Smarty-3.0.8, created on 2012-07-17 15:58:50
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/sitesEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1280555645005fc3a2308f8-80581059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd249e9ce5a30b1a27cb97014608fc0f3f958016e' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/sitesEdit.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1280555645005fc3a2308f8-80581059',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>DSD DART: District Schools Edit</title>
<!--        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
        <script type="text/javascript"
        src="js/jquery/jquery-1.6.2.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">
            <link rel="stylesheet" type="text/css"
                  href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" />

            <link rel="stylesheet" href="css/dart.css" type="text/css" media="screen" />
            



            
            <!--        <link rel="stylesheet" href="menu.css" type="text/css" media="screen" />-->
            <!--[if IE 6]>
            <link type='text/css' href='css/dart_ie.css' rel='stylesheet' media='screen' />
    <![endif]-->
                <?php echo (($tmp = @$_smarty_tpl->getVariable('head')->value)===null||$tmp==='' ? '' : $tmp);?>


                <script type="text/javascript" >
            

                    <?php echo (($tmp = @$_smarty_tpl->getVariable('js')->value)===null||$tmp==='' ? '' : $tmp);?>

                </script>
        </head>
        <body>
            <div id="wrapper">

                <?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

                <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

                <div id="container">
                    <div id="content">
                        <script type="text/javascript" >
                            document.getElementById("content").style.display = "none";
                        </script>



                        


<div style="padding-bottom: 20px">
    <?php if ((($tmp = @$_smarty_tpl->getVariable('site')->value)===null||$tmp==='' ? '' : $tmp)){?>
        <font size="4" color="#cc0000">Edit <?php echo $_smarty_tpl->getVariable('site')->value['name'];?>
 information</font><br>
    <?php }else{ ?>
        <font size="4" color="#cc0000">Add new school</font><br>
    <?php }?>
    <a href="index.php?cmd=sitesView">View sites</a>
    <br/>
    <br/>
    <form action="index.php?cmd=sitesUpdate" method=POST enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('site')->value['siteid'];?>
" name="origSiteId" />
        <table cellpadding=5 cellspacing=0>
            <tr>
                <td style="font-weight:bold">Name:</td>
                <td><input value="<?php if ($_smarty_tpl->getVariable('site')->value){?><?php echo $_smarty_tpl->getVariable('site')->value['name'];?>
<?php }?>" name="name" style="width:250px;" /></td>
            </tr>
            <tr>
                <td style="font-weight:bold">Abbreviation</td>

                <td><?php if ($_smarty_tpl->getVariable('site')->value){?>
                    <?php echo $_smarty_tpl->getVariable('site')->value['siteid'];?>

                    <?php }else{ ?>
                        <input value="" name="siteid" maxlength="3" min="3" style="width:50px"/>
                        3 letters
                        <?php }?>
                        </td>    
                    </tr>
                    <tr>
                        <td style="font-weight:bold">Logo:</td>
                        <td>
                            <?php if ($_smarty_tpl->getVariable('site')->value&&$_smarty_tpl->getVariable('site')->value['logo']){?>
                                <img alt="" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
SchoolLogos/<?php echo $_smarty_tpl->getVariable('site')->value['logo'];?>
" /><br/>
                            <?php }?>
                            <input type="file" name="file" id="file" /> Images should be 200px x 200px and not larger than 300kB
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <?php if ($_smarty_tpl->getVariable('site')->value){?>
                            <input type="submit" name="submit" value="Update" />
                            <?php }else{ ?>
                                <input type="submit" name="submit" value="Create" />
                                <?php }?>
                            <a href="index.php?cmd=sitesView"><input type="button" value="Cancel" /></a>
                        </td>
                    </tr>
                </table>
                <br/>
                <ul>
                    <?php if ((($tmp = @$_smarty_tpl->getVariable('errors')->value)===null||$tmp==='' ? '' : $tmp)){?>
                        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
?>

                            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                        <?php }} ?>
                    <?php }?>
                </ul>
            </form>
        </div>

        
                        <?php echo (($tmp = @$_smarty_tpl->getVariable('body')->value)===null||$tmp==='' ? '' : $tmp);?>


                        
                            <script type="text/javascript" >
                                $(document).ready(function(){
                                    document.getElementById("content").style.display = "block";
                                });
                            </script>
                        
                    </div>
                </div>
                    <div class="clearfooter"></div>
            </div>

            <div id="footer">
                <?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
            </div>
            <div id="dialog" title="Your session is about to expire!" style="display:none">
                <p>You will be logged off in <span id="dialog-countdown"></span> seconds.</p>
                <p>Do you want to continue your session?</p>
            </div
            <script type="text/javascript" src="js/wz_tooltip.js"></script>


            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<!--            <script type="text/javascript" src="js/timeout.js"></script>-->
            <script type="text/javascript" src="js/jquery/jquery.idletimeout.js"></script>
            <script type="text/javascript" src="js/jquery/jquery.idletimer.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
            


        </body>


    </html>



