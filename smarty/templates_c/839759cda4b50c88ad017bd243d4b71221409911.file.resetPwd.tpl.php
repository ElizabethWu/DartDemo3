<?php /* Smarty version Smarty-3.0.8, created on 2012-07-05 11:34:55
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/resetPwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17126666024ff5ec5f78d699-35016069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '839759cda4b50c88ad017bd243d4b71221409911' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/resetPwd.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17126666024ff5ec5f78d699-35016069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Language" content="en-us" />
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
		<title>
			Password Recovery
		</title>
		<link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
favicon.ico" />
		<link rel="stylesheet" href="css/dart.css" type="text/css" />
		
			<!--        <link rel="stylesheet" href="menu.css" type="text/css" media="screen" />-->
			<!--[if IE 6]>
			<link type='text/css' href='css/dart_ie.css' rel='stylesheet' media='screen' />
			<![endif]-->
		
	</head>
	<body>
		<div id="wrapper">
			<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			<div id="container" style="width: 1024px; margin: auto; padding-bottom:30px;">
				<div  style="text-align:left">
					<br />
					<div style="text-align:left">
						<font size="4" color="#cc0000">Reset DART Password</font>
						<br />
						<br />
					</div>
				</div>
				<div align=center>
					<br />
					<br />
					<font size="4" color="#cc0000">
					Change Password :: <?php echo (($tmp = @$_smarty_tpl->getVariable('username')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>

					</font>
					<br />
					<form name="resetPwd" action="#" method ="POST">
						<table border="1" cellspacing="2" cellpadding="3">
							<tr>
								<td colspan=2 bgcolor=lightpink>
									<font size="2" color="#cc0000"><b><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</b></font>
								</td>
							</tr>
							<tr>
								<td>
									<font size="2"><b>New Password:</b></font>
								</td>
								<td>
									<input type="password" name="pwd1" size="40" maxlength="20"/>
								</td>
							</tr>
							<tr>
								<td>
									<font size="2"><b>New Password Retype:</b>
									</font>
								</td>
								<td>
									<input type="password" name="pwd2" size="40" maxlength="20"/>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="Update" value="Update" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div class="clearfooter"></div>
		</div>
		<div id="footer">
			<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
	</body>
</html>
