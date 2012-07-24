<?php /* Smarty version Smarty-3.0.8, created on 2012-07-18 16:24:10
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/searchResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2073045657500753aa33b334-10420318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093cf14bb0c6266d27ab3db41674b12bc25d2c32' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/searchResults.tpl',
      1 => 1342657443,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073045657500753aa33b334-10420318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_age')) include 'smarty/plugins/modifier.age.php';
if (!is_callable('smarty_function_html_options')) include '/home/dartdem2/public_html/lib/smarty/libs/plugins/function.html_options.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>DSD DART: Search Results</title>
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
    <form name="fieldsForm" action="index.php?cmd=handleGroup" method="post" >
        <input type="hidden" name="action" value="bulk_action">
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
            <tr>
                <td>
                    <div align="left">
                        <br>
                        <div align="left">
                            <font size="4" color="#cc0000">DART Search Results - here is what we found</font><br>
                            <a href="index.php?cmd=search"><button style="width:300px">New Search</button></a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        <br>
                                          
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td width="100%">
                                    <table width="100%" cellpadding="1" cellspacing="1" border="0" class="listtable">
                                        
                                        <tr class="listhead">
                                            <td width="2%"></td>     
                                            <?php if ($_smarty_tpl->getVariable('showEdit')->value){?>
                                            <td></td>     
                                            <?php }?>
                                             <td align="center" nowrap>
                                                <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.lname&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">&nbsp;Name&nbsp;</a></td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.studentid&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">Student Number</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.alaskaid&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">AK Student ID</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.site &dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">School Site</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.fname&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">Time Frame</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.grade&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">Testing Grade</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=bday&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">Age</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.status &dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">Status&nbsp;</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.sped&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">SpEd Status&nbsp;</a></div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=student.gpa &dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">GPA&nbsp;</a></div>
                                            </td>
                                            
                                            <td align="center" nowrap>
                                                <div align="center">
                                                    <a href="index.php?cmd=searchResults&sql=<?php echo $_smarty_tpl->getVariable('currentSearch')->value;?>
&sort=<?php echo $_smarty_tpl->getVariable('sort')->value;?>
&dir=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
&start=<?php echo $_smarty_tpl->getVariable('start')->value;?>
&end=<?php echo $_smarty_tpl->getVariable('end')->value;?>
&total=<?php echo $_smarty_tpl->getVariable('total')->value;?>
">&nbsp;Action&nbsp;</a>
                                                </div>
                                            </td>
                                             
                                        </tr>
                                        <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('students')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['student']->iteration=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
 $_smarty_tpl->tpl_vars['student']->iteration++;
?>
                                            <?php if (!($_smarty_tpl->tpl_vars['student']->iteration % 2)){?>
                                        <tr bgcolor=#f4f7fd>
                                            <?php }else{ ?>
                                        <tr bgcolor=#E5E5E5>
                                            <?php }?>
                                            <td align="center" nowrap><input type="checkbox" name="studentID[]" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" class="radio"></td>
                                            <?php if ($_smarty_tpl->getVariable('showEdit')->value){?>
                                            <td style="text-align:center">
                                                <a href="index.php?cmd=StudentEdit&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
">
                                                    <img alt="EditStudent" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/user_edit_16.png" title="Edit student's information" style="padding:2px; vertical-align: middle" />
                                                </a>
                                            </td>
                                            <?php }?>
                                            <td nowrap>
                                                <a href="index.php?cmd=toggleStudent&p1=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['student']->value['lname'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['fname'];?>

                                                </a>
                                            </td>
                                            <td>
                                                <div align="center">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>

                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
						<?php echo $_smarty_tpl->tpl_vars['student']->value['alaskaid'];?>

                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value['site'];?>

                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                <?php echo $_smarty_tpl->getVariable('yearDisplay')->value;?>

                                                </div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value['grade'];?>

                                                </div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
						<?php echo smarty_modifier_age($_smarty_tpl->tpl_vars['student']->value['bday']);?>

                                                </div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
                                                <?php if ($_smarty_tpl->getVariable('showStudentStatusLink')->value){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['student']->value['status']=="Active"){?>
                                                         <font color="#009966">Active</font>
                                                     <?php }else{ ?>
                                                          <font color=red>Inactive</font>
                                                    <?php }?>
                                                <?php }else{ ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['student']->value['status']=="Active"){?>
                                                    <font color="#009966">Active</font>
                                                     <?php }else{ ?>
                                                    <font color=red>Inactive</font>
                                                    <?php }?>
                                                <?php }?>
                                                </div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
						<?php echo $_smarty_tpl->tpl_vars['student']->value['sped'];?>

                                                </div>
                                            </td>
                                            <td align="center">
                                                <div align="center">
						<?php echo $_smarty_tpl->tpl_vars['student']->value['GPA'];?>

                                                </div>
                                            </td>
                                            <td align="center" nowrap>
                                                <div align="center">
                                                     <?php if ($_smarty_tpl->tpl_vars['student']->value['status']=="Active"){?>
                                                        
                                                    <a href="index.php?cmd=toggleStudent&p1=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
"> Details >> </a> 
                                                    <a href="index.php?cmd=StudentEdit&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" > Edit >> </a>
                                                     <a href="http://www.bssd.org/transfer_form.shtml" target=_blank>Deactivate</a>
                                                    <?php }else{ ?>
                                                      
                                                   <a href="index.php?cmd=toggleStudent&p1=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
"> Details >> </a> 
                                                   <a href="index.php?cmd=StudentEdit&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" > Edit >></a>
                                                    <a href="http://www.bssd.org/enrollment_form.shtml" target=_blank>Enroll</a>
                                                     <?php }?>
                                                </div>
                                            </td>
                                                                               
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td valign="middle" nowrap>
                                                <div align="left">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                &nbsp;<a href="javascript: ;" onclick="setCheckboxes('fieldsForm', true); return false;" class="action">Check All</a>&nbsp;/&nbsp;<a href="javascript: ;" onclick="setCheckboxes('fieldsForm', false); return false;" class="action">UnCheck All</a>
                                                                <i> &nbsp;&nbsp; with selected &nbsp;&nbsp;</i>
                                                            </td>
                                                            <td>
                                                                <input type=submit name=Go value=Go onClick='javascript: return checkChecks();'>
                                                            </td>
                                                            <td>
                                                                <select name=cmd2>
                                                                    <option value=Export>Export</option>
                                                                    <option value=Group>Group</option>
                                                                     <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('showExportOptions')->value),$_smarty_tpl);?>

                                                                </select>
                                                            </td>
                                                            <td>
                                                                Start Date
                                                                <input type=text name=startdate size=10 value=<?php echo $_smarty_tpl->getVariable('qstart')->value;?>
>
                                                            </td>
                                                            <td>
                                                                End Date
                                                                <input type=text name=enddate  size=10 value=<?php echo $_smarty_tpl->getVariable('qend')->value;?>
>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </td>
                                            <td align="right"></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="back_url" value="">
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </form>

    <div align=left>
        <table width = 100% border=0 cellpadding = 0 cellspacing = 0 valign=bottom>
            <tr><td colspan=2></td></tr><tr><td>
                    <form method="POST" action="index.php?cmd=searchResults" name='displaylimit'>
                        <input type=hidden name=start value=1 />
                        <input type=hidden name=continue value=yes />
                        <input type=hidden name=sql value="<?php echo $_smarty_tpl->getVariable('urlSQL')->value;?>
" />
                        <input type=hidden name=total value=<?php echo $_smarty_tpl->getVariable('total')->value;?>
 />
                        <input type=text size=3 name=limit value=<?php echo $_smarty_tpl->getVariable('limit')->value;?>
 style="width:30px" />
                        <input type=submit name=submit value="Display Results" />
                    </form>
                </td> 
                <td>Name:</td>
                <td>
                    <form action=index.php?cmd=saveSearchGroup method=post>
                        <input type=text name=name size=10>
                        <select name=type><option value=self>Self</option></select>
                        <input type=hidden name=sql value="<?php echo $_smarty_tpl->getVariable('urlSQL')->value;?>
">
                        <input type=submit name=button value='Save Smart Group'>
                    </form>
                </td>
                <td align=right>
                    <table border=0>
                        <tr>
                            <td>DART Search Results: </td>
                            <td>
                               <?php echo $_smarty_tpl->getVariable('start')->value;?>
 to <?php echo $_smarty_tpl->getVariable('end')->value;?>
 from <?php echo $_smarty_tpl->getVariable('total')->value;?>

                            </td> 
                            <br>
                            <td>
                                <form method="POST" action="index.php?cmd=searchResults" name='prevForm'>
                                    <input type=hidden name=start value=<?php echo $_smarty_tpl->getVariable('prevstart')->value;?>
>
                                    <input type=hidden name=continue value=yes>
                                    <input type=hidden name=sql value="<?php echo $_smarty_tpl->getVariable('urlSQL')->value;?>
">
                                    <input type=hidden name=total value=<?php echo $_smarty_tpl->getVariable('total')->value;?>
>
                                    <input type=hidden name=limit value=<?php echo $_smarty_tpl->getVariable('limit')->value;?>
>
                                    <input type=hidden name=sort value=<?php echo $_smarty_tpl->getVariable('sort')->value;?>
>
                                     <input type=hidden name=dir value=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
>
                                     <td valign="middle">  <a href="javascript:prevSubmit()" > Prev</a> </td>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="index.php?cmd=searchResults" name='nextForm'>
                                    <input type=hidden name=start value=<?php echo $_smarty_tpl->getVariable('nextstart')->value;?>
>
                                    <input type=hidden name=continue value=yes>
                                    <input type=hidden name=sql value="<?php echo $_smarty_tpl->getVariable('urlSQL')->value;?>
">
                                    <input type=hidden name=total value=<?php echo $_smarty_tpl->getVariable('total')->value;?>
>
                                    <input type=hidden name=limit value=<?php echo $_smarty_tpl->getVariable('limit')->value;?>
>
                                    <input type=hidden name=sort value=<?php echo $_smarty_tpl->getVariable('sort')->value;?>
>
                                     <input type=hidden name=dir value=<?php echo $_smarty_tpl->getVariable('dir')->value;?>
>
                                    <td valign="middle">  <a href="javascript:nextSubmit()" font-weight="bold" size=2>Next</a> </td>
                                </form>
                            </td>
                          
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <br>
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
            
<script type="text/javascript" src="js/searchResults.js"></script>

        </body>


    </html>



