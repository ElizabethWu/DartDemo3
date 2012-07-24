<?php /* Smarty version Smarty-3.0.8, created on 2011-07-20 02:04:17
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/attendanceCalEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1879391544e26a8212b54e4-57437875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab17ba2ee0916f7c05b26f22e4138519ca34ba2b' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/attendanceCalEdit.tpl',
      1 => 1311145894,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1310525876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879391544e26a8212b54e4-57437875',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/dartdem2/public_html/lib/smarty/libs/plugins/function.html_options.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>DSD DART: <?php echo $_smarty_tpl->getVariable('pageTitle')->value;?>
</title>
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



                        
<div style="width:1024px; margin: auto; padding-bottom:30px;">
	<table border="0" cellpadding="0" cellspacing="2" width="100%">
		<tr>
			<td>
				<div style="text-align:left">
					<br />
					<font color="#cc0000" size="4" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
						Attendance Adjusment 
					</font>
					<font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
					- <?php echo $_smarty_tpl->getVariable('StudentName')->value;?>
 
					</font>
					<br />
				</div>
				<blockquote>
					<div style="text-align:left">
						<div class="noteimportant">
							<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
							This screen is used for adjusting a student's Attendance Record page. After entering your new code, the page will return to a refreshed and recalculated view of the Attendance Record you were working on.The chart below is written in plain English to to help you set the correct code.
							</font>
							<br />
							<br />
						</div>
					</div>
				</blockquote>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align:center">
					<table border="0" cellpadding="2" cellspacing="2" width="100%">
						<tbody>
							<tr>
								<td colspan="3" bgcolor="#ccffff" align="right">
									<font class="big" size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
										<b>Change Attendance Code <?php echo $_smarty_tpl->getVariable('editmonth')->value;?>
/<?php echo $_smarty_tpl->getVariable('editday')->value;?>
/<?php echo $_smarty_tpl->getVariable('year')->value;?>
</b>
									</font>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<table width="468" border="0" cellspacing="2" cellpadding="0">
										<tr>
											<td>
												&nbsp;
											</td>
											<td align="right">
												<table border="0" cellspacing="2" cellpadding="2">
													<tr>
														<td colspan="2" nowrap align="center">
															<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
																<font size="2" color="red" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
																	<b>Attendance Code Change</b>
																</font>
															</font>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table border="1" cellspacing="2" cellpadding="2">
										<tbody>
											<tr>
												<td nowrap width="25" align="center">
													<b>
														<font size="1" color="white" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">.</font>
													</b>
												</td>
												<td nowrap align="center">
													<b>
														<font size="1" color="#ff0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
															Code List
														</font>
													</b>
												</td>
												<td nowrap align="center">

													<b>
														<font size="1" color="#ff0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
															Present
														</font>
													</b>
												</td>
												<td nowrap>
													<div align="center">
														<b>
															<font size="1" color="#ff0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
																Absent
															</font>
														</b>
													</div>
												</td>
											</tr>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>	
											<tr>
												<td nowrap width="25" align="center" <?php if ($_smarty_tpl->getVariable('row')->value->Code!="P"){?>bgcolor="red"<?php }?>>
													<b>
														<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" <?php if ($_smarty_tpl->getVariable('row')->value->Code!="P"){?>color="white"<?php }?>>
															<?php echo $_smarty_tpl->getVariable('row')->value->Code;?>

														</font>
													</b>
												</td>
												<td nowrap>
													<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><?php echo $_smarty_tpl->getVariable('row')->value->Description;?>
</font>
												</td>
												<td nowrap>
													<div align="center">
														<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
															<b><?php echo (($tmp = @$_smarty_tpl->getVariable('row')->value->Present)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</b>
														</font>
													</div>

												</td>
												<td nowrap align="center">
													<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
														<b><?php echo (($tmp = @$_smarty_tpl->getVariable('row')->value->Absent)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</b>
													</font>
													</div>
												</td>
											</tr>
											<?php }} ?>
										</tbody>
									</table>
								</td>
								<td>&nbsp;</td>
								<td>
									<form action="index.php" method="GET">
										<input type="hidden" name="cmd" value="AttendanceCalendar">
										<input type="hidden" name="year" value="<?php echo $_smarty_tpl->getVariable('year')->value;?>
">
										<input type="hidden" name="student" value="<?php echo $_smarty_tpl->getVariable('student')->value;?>
">
										<input type="hidden" name="editmonth" value="<?php echo $_smarty_tpl->getVariable('editmonth')->value;?>
">
										<input type="hidden" name="editday" value="<?php echo $_smarty_tpl->getVariable('editday')->value;?>
">
										<table border="1" cellspacing="2" cellpadding="2">
											<tr>
												<th>
												</th>
												<th>Attendance Code</th>
												<th>Site Attended</th>
											</tr>
											<tr>
												<td align="left">
													<b>AM Period</b>
												</td>
												<td>
														<?php echo smarty_function_html_options(array('name'=>"editcode0",'options'=>$_smarty_tpl->getVariable('codeMenuAM')->value,'selected'=>$_smarty_tpl->getVariable('codeAM')->value),$_smarty_tpl);?>

												</td>
												<td>
														<?php echo smarty_function_html_options(array('name'=>"editsite0",'options'=>$_smarty_tpl->getVariable('siteMenuAM')->value,'selected'=>$_smarty_tpl->getVariable('siteAM')->value),$_smarty_tpl);?>

												</td>
											</tr>
											<tr>
												<td align="left">
													<b>PM Period</b>
												</td>
												<td>
														<?php echo smarty_function_html_options(array('name'=>"editcode1",'options'=>$_smarty_tpl->getVariable('codeMenuPM')->value,'selected'=>$_smarty_tpl->getVariable('codePM')->value),$_smarty_tpl);?>

												</td>
												<td>
														<?php echo smarty_function_html_options(array('name'=>"editsite1",'options'=>$_smarty_tpl->getVariable('siteMenuPM')->value,'selected'=>$_smarty_tpl->getVariable('sitePM')->value),$_smarty_tpl);?>

												</td>
											</tr>
											<tr>
												<td colspan="3" align="center">
													<input type="submit" value="Save Change"> <input type=button onClick="javascript:window.location='?cmd=AttendanceCalendar&student=<?php echo $_smarty_tpl->getVariable('student')->value;?>
&year=<?php echo $_smarty_tpl->getVariable('CurrentYear')->value;?>
';" value='Cancel'>
												</td>
											</tr>
										</table>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</table>
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



