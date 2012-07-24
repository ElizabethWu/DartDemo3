<?php /* Smarty version Smarty-3.0.8, created on 2012-07-03 10:01:17
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/editlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2787611584ff3336dd2b2e7-72632619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af881fc5c2891d3f07363040a9d7b3a7907c8264' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/editlist.tpl',
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
  'nocache_hash' => '2787611584ff3336dd2b2e7-72632619',
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



                        
<div style="width:1024px; margin: 0 auto">
	<table width=80%  border="0" cellpadding="5" cellspacing="0">
		<tr>
			<td colspan="5">
				<form name="editList" action="index.php" method="get">
					<input type="hidden" name="cmd" value="editlist" />
					<?php echo smarty_function_html_options(array('name'=>"p1",'options'=>$_smarty_tpl->getVariable('listMenu')->value,'selected'=>$_smarty_tpl->getVariable('listID')->value,'onChange'=>"submit()"),$_smarty_tpl);?>

					Select to edit list
				</form>
			</td>
		</tr>
		<tr>
			<td>Group Name:</td>
			<td>
				<form style="margin-bottom:0;" name="updateName" method="post" action="index.php?cmd=updateListName">
					<input type="hidden" name="p1" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
" />
					<input type="text" name="p2" maxlength="16" size="18" value="<?php echo $_smarty_tpl->getVariable('listname')->value;?>
" />
					<input name="save" type="submit" value="Rename Group" />
					<input type="submit" onClick="return confirm_delete('<?php echo $_smarty_tpl->getVariable('listID')->value;?>
');" value="Delete Group" />
				</form>
			</td>
			<td nowrap>&nbsp;&nbsp;Type: </td>
			<td>
				<form style="margin-bottom:0;" name="updateType" method="post" action="index.php?cmd=updateListType">
					<input type="hidden" name="p1" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
" />
					<input type="hidden" name="userid" value="<?php echo $_smarty_tpl->getVariable('currentUserID')->value;?>
" />
					<?php echo smarty_function_html_options(array('name'=>"p2",'options'=>$_smarty_tpl->getVariable('typeMenu')->value,'selected'=>$_smarty_tpl->getVariable('type')->value,'onChange'=>"submit()"),$_smarty_tpl);?>

				</form>
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>

		<?php if ($_smarty_tpl->getVariable('listKind')->value!="search"){?>
		<tr>
			<td colspan="5">
				<form name="studentform" id="studentform" method="post" action="index.php?cmd=updatelist">
					<input type="hidden" name="previoussearch" value="0" />
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
" />
					<table align="center" border="0" cellpadding="5" cellspacing="0">
						<tr>
							<td valign="top">
								<?php echo $_smarty_tpl->getVariable('showcount')->value;?>
  Current Group Members
							</td>
							<td>&nbsp;</td>
							<td valign="top">
								<?php echo $_smarty_tpl->getVariable('potentialCount')->value;?>
 Potential Group Members
							</td>
						</tr>
						<tr>
							<td valign="top">
								<?php echo smarty_function_html_options(array('name'=>"removeselect[]",'size'=>"20",'id'=>"removeselect",'multiple'=>"multiple",'onFocus'=>"studentSelected('removeselect')",'options'=>$_smarty_tpl->getVariable('membersMenu')->value),$_smarty_tpl);?>

							</td>
							<td valign="top">
								<br />
								<input name="add" type="submit" id="add" value="&larr;" />
								<br />
								<input name="remove" type="submit" id="remove" value="&rarr;" />
								<br />
							</td>
							<td valign="top">
								<?php echo smarty_function_html_options(array('name'=>"addselect[]",'size'=>"20",'id'=>"addselect",'multiple'=>"multiple",'onFocus'=>"studentSelected('addselect')",'options'=>$_smarty_tpl->getVariable('potentialMenu')->value),$_smarty_tpl);?>

								<br />
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
		<?php }else{ ?>
		<tr>
			<td colspan="5">
				<h2>Search List</h2>
			</td>
		</tr>
		<?php }?>
		<tr>
			<td align="center" colspan="5">
				<table border="0">
					<tr>
						<td>
						<?php if ($_smarty_tpl->getVariable('showSFA')->value){?>
							<form name="exportlist" id="exportlist" method="post" action="index.php?cmd=exportlist&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
&type=sfa">
								<input name="export" type="submit" id="export" value="SFA Export" />
							</form>
						<?php }else{ ?>&nbsp;<?php }?>
						</td>
						<td>
							<form name="exportlist" id="exportlist" method="post" action="index.php?cmd=exportlist&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
">
								<input name="export" type="submit" id="export" value="Export" />
							</form>
						</td>
						<td>
							<form name="duplist" id="duplist" method="post" action="index.php?cmd=duplist&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
">
								<input name="dup" type="submit" id="dup" value="Duplicate" />
							</form>
						</td>
					</tr>
					<tr>
						<td colspan="3">
						<?php if ($_smarty_tpl->getVariable('showExport')->value){?>
							<br />
							<b>Export Presets</b>
							<br />
							<form action="index.php?cmd=handleGroup" method="post">
								<input type="hidden" name="cmd" value="handleGroup">
								<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
">
								<table>
									<tr>
										<td>
											<input type="text" name="startdate" size="10" value="<?php echo $_smarty_tpl->getVariable('qstart')->value;?>
">
										</td>
										<td>
											<input type="text" name="enddate"  size="10" value="<?php echo $_smarty_tpl->getVariable('qend')->value;?>
">
										</td>
										<td>
											<?php echo smarty_function_html_options(array('name'=>"cmd2",'options'=>$_smarty_tpl->getVariable('exportMenu')->value),$_smarty_tpl);?>

										</td>
										<td>
											<input type="submit" name="Go" value="Go" />
										</td>
									</tr>
								</table>
							</form>
						<?php }else{ ?>&nbsp;<?php }?>
						</td>
					</tr>
				</table>
				<?php if ($_smarty_tpl->getVariable('showAttendance')->value){?>
				<hr />
				<form name="myform" action="index.php" method="GET">
					<div align="center">
						<input type="hidden" name="cmd" value="editlist" />
						<input type="hidden" name="p1" value="<?php echo $_smarty_tpl->getVariable('listID')->value;?>
" />
						<b>Attendance Period</b>
						<br />
						<input type="checkbox" name="am" value="1" <?php if ($_smarty_tpl->getVariable('am')->value){?>checked="checked"<?php }?> /> am
							   <input type="checkbox" name="pm" value="1" <?php if ($_smarty_tpl->getVariable('pm')->value){?>checked="checked"<?php }?> /> pm
							   <br />
						<b>Users With Access</b>
						<br />
							<?php echo smarty_function_html_options(array('name'=>"test[]",'size'=>"10",'id'=>"test",'multiple'=>"multiple",'options'=>$_smarty_tpl->getVariable('userMenu')->value,'selected'=>$_smarty_tpl->getVariable('currentUserIDs')->value),$_smarty_tpl);?>

						<br />
						<input type="submit" value="Make Official Attendance List" name="attSubmit" />
						<br />
						<br />
						<b>Curent Users Who Share The List</b>
						<br />
						<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currentUserNames')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
?>
							<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br />
						<?php }} ?>
					</div>
				</form>
				<?php }?>
			</td>
		</tr>
		<tr>
			<td>
				<br />
				<a href="?cmd=gb_edit&subcmd=newgb&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
">New Gradebook</a>
				<br />
				<br />
				GradeBooks
				<br />
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['gid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gradebooks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
 $_smarty_tpl->tpl_vars['gid']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

					<a href=?cmd=gb&gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
>View</a>
					<a href=?cmd=gb_edit&gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
>Edit</a>
					<br />
				<?php }} ?>
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
            
<script language="JavaScript" type="text/javascript" src="js/editlist.js">
</script>

        </body>


    </html>



