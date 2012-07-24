<?php /* Smarty version Smarty-3.0.8, created on 2012-07-09 16:45:00
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/sitesView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15851327424ffb7b0c555634-19355392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c546606cd651a9918a96e6df7d4e6eeb252257d' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/sitesView.tpl',
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
  'nocache_hash' => '15851327424ffb7b0c555634-19355392',
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
        <title>DSD DART: District Schools</title>
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
    <font size="4" color="#cc0000">District Schools</font><br>

    <div id="sites"> 
        <a href="index.php?cmd=sitesEdit">Add new school</a>
        <?php if ((($tmp = @$_smarty_tpl->getVariable('msg')->value)===null||$tmp==='' ? '' : $tmp)){?>
            <p style="color: tomato; font-size: 10pt"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</p>
         <?php }?>
        
        
        <table cellpadding=5 cellspacing=0>
            <tr style="height:40px; font-size: 10pt; font-weight: bold;">
                <td style="border-bottom: 1px solid; border-left: 1px solid; border-top: 1px solid;"></td>
                <td style="border-bottom: 1px solid; border-top: 1px solid;">Name</td>
                <td style="border-bottom: 1px solid; border-top: 1px solid;">Abbreviation</td>
                <td style="border-bottom: 1px solid; border-right: 1px solid; border-top: 1px solid;">Logo</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sites')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value){
?>
                <tr style="font-size: 9pt;">
                <td style="border-bottom: 1px solid; border-left: 1px solid; border-top: 1px solid;">
                <a href="index.php?cmd=sitesEdit&siteid=<?php echo $_smarty_tpl->tpl_vars['site']->value['siteid'];?>
">
                    <img src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/pencil_16.png" title="Edit Site" /></a>
                <a href="index.php?cmd=sitesDelete&siteid=<?php echo $_smarty_tpl->tpl_vars['site']->value['siteid'];?>
" onclick='javascript:return confirm_delete("You are about to delete the a school. Please act carefully. Click OK to continue")'>
                   <img src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/bin_empty_16.png" title="Delete Site"/></a>
                </td>
                <td style="border-bottom: 1px solid; border-top: 1px solid;"><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</td>
                <td style="border-bottom: 1px solid; border-top: 1px solid;"><?php echo $_smarty_tpl->tpl_vars['site']->value['siteid'];?>
</td>
                <td style="border-bottom: 1px solid; border-right: 1px solid; border-top: 1px solid;">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('logoURL')->value;?>
<?php echo $_smarty_tpl->tpl_vars['site']->value['logo'];?>
" />
                </td>
            </tr>
            <?php }} ?>
        </table>
    </div>
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
            
<script type="text/javascript" src="js/sitesView.js"></script>

        </body>


    </html>



