<?php /* Smarty version Smarty-3.0.8, created on 2012-07-05 20:29:44
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4998809214e25d4ef4cd7a8-67434783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe194c8a575480003907b0a77f47f0a533caaed7' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/dashboard.tpl',
      1 => 1311099377,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4998809214e25d4ef4cd7a8-67434783',
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



                        
<div style="width:1024px; margin: auto; padding-bottom:30px;" align="center">
	<form name=ptime method=get action="index.php">
		<input type=hidden name=cmd value=Dashboard />
		<input type=hidden name=year value=<?php echo $_smarty_tpl->getVariable('year')->value;?>
 />
		<input type=hidden name=quarter value=<?php echo $_smarty_tpl->getVariable('quarter')->value;?>
 />
		<table>
			<tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<td>
					<?php echo smarty_function_html_options(array('name'=>($_smarty_tpl->tpl_vars['key']->value),'options'=>$_smarty_tpl->tpl_vars['value']->value['menu'],'selected'=>$_smarty_tpl->tpl_vars['value']->value['selected'],'onChange'=>"submit()"),$_smarty_tpl);?>

				</td>
			<?php }} ?>
			</tr>
		</table>
	</form>
	<table width="90%" border="0" cellspacing="0" cellpadding="2">
		<tr>
			<td colspan="2">&nbsp;</td>
			<td style="white-space: nowrap" align="center">
				<b>
					<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2" color="#0000cc">
						<?php echo $_smarty_tpl->getVariable('menus')->value['year']['menu'][$_smarty_tpl->getVariable('year')->value];?>
 <?php echo $_smarty_tpl->getVariable('menus')->value['quarter']['menu'][$_smarty_tpl->getVariable('quarter')->value];?>

					</font>
				</b>
			</td>
			<td>&nbsp;</td>
			<td colspan="2" style="white-space: nowrap" align="right">
				<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="1">
					<b>Today is: </b><?php echo $_smarty_tpl->getVariable('currdatedisplay')->value;?>

				</font>
			</td>
		</tr>
		<!-- ATTENDANCE -->
		<?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable($_smarty_tpl->getVariable('sections')->value['Attendance'], null, null);?>
		<tr>
			<td colspan="6" style="white-space: nowrap" bgcolor="#ffffcc"  align="left">
				<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
					<b>Attendance</b>
				</font>
			</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('section')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value!=''){?>
				<td style="white-space: nowrapp" align="right">
					<font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
						<b><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
:</b>
					</font>
				</td>
				<td style="white-space: nowrap">
					<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
						<a href=index.php?cmd=AttendanceDrillDown&type=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&site=<?php echo $_smarty_tpl->getVariable('site')->value;?>
&<?php echo $_smarty_tpl->tpl_vars['value']->value['param'];?>
>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>

						</a>
					</font>
				</td>
				<?php }else{ ?><td colspan="2">&nbsp;</td><?php }?>
			<?php }} ?>
		</tr>
		<?php }} ?>
		<!-- DISCIPLINE -->
		<?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable($_smarty_tpl->getVariable('sections')->value['Discipline'], null, null);?>
		<tr>
			<td colspan="6" style="white-space: nowrap" bgcolor="#ffffcc"  align="left">
				<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
					<b>Discipline</b>
				</font>
			</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('disciplineLabels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('section')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<td style="white-space: nowrapp" align="right">
				<font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
					<b><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
:</b>
				</font>
			</td>
			<td style="white-space: nowrap">
				<font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
					<?php echo $_smarty_tpl->tpl_vars['data']->value['value'][$_smarty_tpl->tpl_vars['type']->value];?>

				</font>
			</td>
			<?php }} ?>
		</tr>
		<?php }} ?>
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



