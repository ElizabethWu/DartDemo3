<?php /* Smarty version Smarty-3.0.8, created on 2012-07-10 18:17:05
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/transcriptsDefine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5515176214ffce221caed36-95403774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83ae2b6f38fcda135ea9ebd3155527a01d779fcf' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/transcriptsDefine.tpl',
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
  'nocache_hash' => '5515176214ffce221caed36-95403774',
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
        <title>DSD DART: Define Transcripts</title>
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



                        
<div align="center">
    <form name=doreports method=post action="index.php?cmd=transcriptsProduce&listid=<?php echo $_smarty_tpl->getVariable('listid')->value;?>
">
        <input type=hidden name=foo value=bar>
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
            <tr>
                <td bgcolor="white">
                    <div align="left">
                        <br>
                        <div align="left">
                            <font size="4" color="#cc0000">DART Transcripts</font><br>
                            <br>
                        </div>
                        <div class="noteimportant">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><br>
                    <br>
                    <font size="4" color="#cc0000">Select Current Groups &amp; Users </font><br>
                    <br>You can use this interface to select either an entire group, 
                    or any idividual within a group to print reports for, and then select
                    the time frame of the report. <br>
                    <br>
                    If you do not see the group or user listed here, you can use the
                    Student Search screen to locate specific individuals.<br>
                    <br>
                    <table width="75%" border="1">
                        <tbody>
                            <tr>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Groups</b></font></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Users</b></font></div>
                                </td>
                            </tr>
                            <tr height="100">
                                <td nowrap height="100">
                                    <div align="center">
                                        <select name="selectGroup" size="15" onClick="javascript:AddList();" style="width: 200px">
                                            <?php  $_smarty_tpl->tpl_vars['listOption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listOptions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['listOption']->key => $_smarty_tpl->tpl_vars['listOption']->value){
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['listOption']->value['listid'];?>
"><?php echo $_smarty_tpl->tpl_vars['listOption']->value['listname'];?>
</option>
                                            <?php }} ?>
                                        </select></div>
                                </td>
                                <td nowrap height="100">
                                    <div align="center">
                                        <input type=button name=delete value=delete onClick="javascript:SubmitType('delete');">
                                        <input type=button name=clear onClick="javascript:SubmitType('clear')" value='Clear List'><br>Student Number [<?php echo count($_smarty_tpl->getVariable('studentList')->value);?>
]<br>
                                        <select name="selectNames[]" size="13" multiple style="width: 200px">

                                            <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('studentList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value['lname'];?>
, <?php echo $_smarty_tpl->tpl_vars['student']->value['fname'];?>

                                            </option>

                                            <?php }} ?>
                                           
                                        </select></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table width="75%" border="1" cellspacing="2" cellpadding="0">
                        <tr>
                            <td width="50%">
                                <font size="4" color="#cc0000">Print Reports</font><br>
                                <br>Once you have selected the students to print the transcripts from you must select the type and the level for the transcripts. After this when you click the print button below you the system creates the reports you have requested in PDF format, and downloads them to your machine.
                                <br/>
                                <br/>
                                <table>
                                    <tr>
                                        <td>Type of Transcript:</td>
                                        <td>Date Issued:</td>
                                        <td>Start Testing Level:</td>
                                        <td>Final Testing Level:</td>
                                    </tr>
                                    <tr>
                                        <td><select name="transcriptType" size="1">
                                                <option value="">Choose One</option>
                                                <!--			<option value="Exit  - Standards Based">Exit  - Standards Based</option> -->
                                                <option value="Exit - GPA & Credits Earned">Exit - GPA & Credits Earned</option>
                                                <!--			<option value="Permanent File - Standards Based">Permanent File - Standards Based</option> -->
                                                <option value="Permanent File  - GPA & Credits Earned">Permanent File  - GPA & Credits Earned</option>
                                                <!--			<option value="COA - Standards Based">COA - Standards Based</option> -->
                                                <option value="COA - GPA & Credits Earned">COA - GPA & Credits Earned</option>
                                                <!--			<option value="Graduation - Standards Based">Graduation - Standards Based</option> -->
                                                <option value="Graduation - GPA & Credits Earned">Graduation - GPA & Credits Earned</option>
                                            </select>
                                        </td><td>
                                            <input type=text name=dateIssued size=10>
                                        </td><td>

                                            <select name="start" size="1">
                                                <option value="">Choose One</option>
                                                <option value="-2">PK2</option>
                                                <option value="-1">PK</option>
                                                <option value="0">K</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">12+</option>
                                            </select>
                                        </td><td>
                                            
                                            <select name="final" size="1">
                                                <option value="">Choose One</option>
                                                <option value="-2">PK2</option>
                                                <option value="-1">PK</option>
                                                <option value="0">K</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">12+</option>
                                            </select>
                                        </td></tr>
                                </table>
                                <div align="center">
                                    <p><button name="buttonName" value="Print!" type="button" onClick="submit();">Print Reports!</button></p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>
        </table>
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
            
<script language="JavaScript" type="text/javascript" src="js/transcriptsDefine.js"></script>

        </body>


    </html>



