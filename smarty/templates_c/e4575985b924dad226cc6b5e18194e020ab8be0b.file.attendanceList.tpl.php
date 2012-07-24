<?php /* Smarty version Smarty-3.0.8, created on 2011-07-19 10:53:17
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/attendanceList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2919442324e25d29d8a0867-25973526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4575985b924dad226cc6b5e18194e020ab8be0b' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/attendanceList.tpl',
      1 => 1311099377,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1310525876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2919442324e25d29d8a0867-25973526',
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
            
<link rel="stylesheet" type="text/css" href="js/jquery.datepick.package/jquery.datepick.css" />
<link rel="stylesheet" type="text/css" href="js/extjs/resources/css/ext-all.css" />



            
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



                        
<table border="0" width="100%">
	<tr>
		<td align="left">
			<font color="#cc0000" size="4" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Group Attendance Entry </font>
			<font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">- <?php echo $_smarty_tpl->getVariable('listName')->value;?>
</font>
		</td>
	</tr>
	<tr>
		<td>
			<a id="page_help" href="#" onclick="" style="font-size: 8pt; color: #006FEB">
				<img alt="help" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/help_16.png" style="vertical-align: middle"/> About this page
			</a>

			<blockquote>
				<div id="page_modal_help" style="display:none">
					<p><font size="3"><b>Group Attendance</b></font></p>
					<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
						<p>
						Attendance is taken in batches. Select the checkbox next to all of the 
						names that will be marked in this batch, and then select the correct 
						code at the bottom of the screen. This screen will refresh, and the 
						next batch of codes can be entered.
						</p>
					</font>
				</div>
			</blockquote>
		</td>
	</tr>
	<tr>
		<td>
			<div align="right" style="background-color:#ccffff; width:800px;">
				<font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
					<form id="selectDateForm" action=index.php method="get">
						<input type="hidden" name="cmd" value="AttendanceList" />
						<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
" />
						<input type="hidden" name="period" value="<?php echo $_smarty_tpl->getVariable('period')->value;?>
" />
							<?php echo smarty_function_html_options(array('name'=>"month",'id'=>"month",'options'=>$_smarty_tpl->getVariable('monthMenu')->value,'selected'=>$_smarty_tpl->getVariable('month')->value),$_smarty_tpl);?>

							<?php echo smarty_function_html_options(array('name'=>"day",'id'=>"day",'options'=>$_smarty_tpl->getVariable('dayMenu')->value,'selected'=>$_smarty_tpl->getVariable('day')->value),$_smarty_tpl);?>

						<input name="year" id="year" value="<?php echo $_smarty_tpl->getVariable('year')->value;?>
" size="5" type="text" />
						<input type="hidden" name="date" id="date" value="<?php echo $_smarty_tpl->getVariable('year')->value;?>
-<?php echo $_smarty_tpl->getVariable('month')->value;?>
-<?php echo $_smarty_tpl->getVariable('day')->value;?>
"/>
						<div style="display: none;">
							<a id="calImg" style="cursor: pointer;" class="trigger">Select Date</a>
						</div>
						<input type="submit" />
					</form>
				</font>
			</div>
			<br />
			<div align="center" style="width:800px;">
				<font size="4" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Keeping a List &amp; Checking it Twice...</font>
			</div>
			<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
				<b>Absent:</b> <?php echo (($tmp = @$_smarty_tpl->getVariable('absent')->value)===null||$tmp==='' ? 0 : $tmp);?>
 ::
				<b>Present:</b> <?php echo $_smarty_tpl->getVariable('present')->value;?>
 ::
				<b>Today's Rate:</b> <?php echo $_smarty_tpl->getVariable('rate')->value;?>
%
			</font>
			<br />
			<form name="fieldsForm" action="index.php?cmd=AttendanceListRecord" method="post" >
				<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
" />
				<input type="hidden" name="month" value="<?php echo $_smarty_tpl->getVariable('month')->value;?>
" />
				<input type="hidden" name="year" value="<?php echo $_smarty_tpl->getVariable('year')->value;?>
" />
				<input type="hidden" name="day" value="<?php echo $_smarty_tpl->getVariable('day')->value;?>
" />
				<input type="hidden" name="period" value="<?php echo $_smarty_tpl->getVariable('period')->value;?>
" />
				<input type="hidden" name="periodName" value="<?php echo $_smarty_tpl->getVariable('periodname')->value;?>
" />
				<input type="hidden" name="imageURL" value="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
" />
				<input type="hidden" name="CurrentYear" value="<?php echo $_smarty_tpl->getVariable('CurrentYear')->value;?>
" />
				<div id="attendanceList"></div>

				<table border="0">
					<tr>
						<td width="500" align="left">
							<div class="notewarning">
								<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
									Discipline-related attendance codes can only be adjusted through the Discipline Log screens. Click the code to view.
								</font>
							</div>
						</td>
						<td width="145" align="center" nowrap>
							<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2" color="red">
								<b>Attendance Code Entry</b>
							</font>
							<?php echo smarty_function_html_options(array('name'=>"selectCode",'options'=>$_smarty_tpl->getVariable('codeMenu')->value),$_smarty_tpl);?>

						</td>
						<td width="145">
							<div align="center">
								<input name="cmd2" onclick="javascript: return checkChecks();" value="Make it So!" type="submit" />
							</div>
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>

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
            
<script type="text/javascript" src="js/jquery.datepick.package/jquery.datepick.js"></script>
<script type="text/javascript" src="js/extjs/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery/jquery.simplemodal.1.4.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/view/Student.js"></script>
<script language="JavaScript" type="text/javascript" src="js/attendanceList.js"></script>

        </body>


    </html>



