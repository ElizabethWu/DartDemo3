<?php /* Smarty version Smarty-3.0.8, created on 2011-07-17 04:27:01
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/sped/spedhistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13857216414e13583795a7f9-90304367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85c15c3a277380d820c8a433addd065df499614' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/sped/spedhistory.tpl',
      1 => 1309556764,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1310525876,
      2 => 'file',
    ),
    '68a4a3aeb683e66f361f7d9c7bd5d129f8374f36' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/comp/pagination.tpl',
      1 => 1309556763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13857216414e13583795a7f9-90304367',
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



                        
Entire History<br />
<a href=index.php?cmd=history>Page</a> |
<a href=index.php?cmd=count>Count Screen</a><br /><br />
<?php if ($_smarty_tpl->getVariable('Display')->value!='none'){?>
<form action=index.php method=get>
	<input type=hidden name=module value=sped>
	<input type=hidden name=cmd value=<?php echo $_smarty_tpl->getVariable('cmd')->value;?>
 />
	Start:
	<input id=startdate type=text name=startdate value='<?php echo $_smarty_tpl->getVariable('searchParameters')->value['startdate'];?>
' />
	<input id=startOutput type=hidden name=startOutput value='<?php echo $_smarty_tpl->getVariable('searchParameters')->value['startOutput'];?>
' />
	End:
	<input id=enddate type=text name=enddate value='<?php echo $_smarty_tpl->getVariable('searchParameters')->value['enddate'];?>
' />
	<input id=endOutput type=hidden name=endOutput value='<?php echo $_smarty_tpl->getVariable('searchParameters')->value['endOutput'];?>
' />
	Site:
	<?php echo smarty_function_html_options(array('name'=>"site",'options'=>$_smarty_tpl->getVariable('siteMenu')->value,'selected'=>$_smarty_tpl->getVariable('searchParameters')->value['site']),$_smarty_tpl);?>

	<?php echo smarty_function_html_options(array('name'=>"user",'options'=>$_smarty_tpl->getVariable('userMenu')->value,'selected'=>$_smarty_tpl->getVariable('searchParameters')->value['user']),$_smarty_tpl);?>

	<br />
	<?php echo smarty_function_html_options(array('name'=>"student",'options'=>$_smarty_tpl->getVariable('studentMenu')->value,'selected'=>$_smarty_tpl->getVariable('searchParameters')->value['student']),$_smarty_tpl);?>

	<input type=submit name=submit />
</form>
<?php }?>
<br />
<table border=1>
	<tr>
		<th>Timestamp</th>
		<th>Type</th>
		<th>User</th>
		<th>Site</th>
		<th>Value</th>
		<th>StudentID</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('history')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['h']->value['timestamp'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['h']->value['type'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['h']->value['user'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['h']->value['site'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['h']->value['value'];?>
</td>
		<td nowrap><?php echo $_smarty_tpl->tpl_vars['h']->value['studentName'];?>
<br />(<?php echo $_smarty_tpl->tpl_vars['h']->value['studentID'];?>
)</td>
	</tr>
	<?php }} ?>
</table>
<?php $_template = new Smarty_Internal_Template('comp/pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '13857216414e13583795a7f9-90304367';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2011-07-17 04:27:01
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/pagination.tpl" */ ?>
<?php if ($_smarty_tpl->getVariable('total')->value==0){?>
<p>No results</p>
<?php }else{ ?>
<table>
	<tr>
		<td>
			Total: <?php echo $_smarty_tpl->getVariable('total')->value;?>

			Viewing <?php echo $_smarty_tpl->getVariable('searchParameters')->value['start']+1;?>
 -
			<?php echo $_smarty_tpl->getVariable('final')->value;?>

			<?php if (!isset($_smarty_tpl->tpl_vars['searchParameters']) || !is_array($_smarty_tpl->tpl_vars['searchParameters']->value)) $_smarty_tpl->createLocalArrayVariable('searchParameters', null, null);
$_smarty_tpl->tpl_vars['searchParameters']->value['start'] = $_smarty_tpl->getVariable('prevstart')->value;?>
			<a href=index.php?cmd=<?php echo $_smarty_tpl->getVariable('cmd')->value;?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('searchParameters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if ($_smarty_tpl->tpl_vars['value']->value!=''){?>&<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?><?php }} ?>>Prev</a>
			<?php if (!isset($_smarty_tpl->tpl_vars['searchParameters']) || !is_array($_smarty_tpl->tpl_vars['searchParameters']->value)) $_smarty_tpl->createLocalArrayVariable('searchParameters', null, null);
$_smarty_tpl->tpl_vars['searchParameters']->value['start'] = $_smarty_tpl->getVariable('nextstart')->value;?>
			<a href=index.php?cmd=<?php echo $_smarty_tpl->getVariable('cmd')->value;?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('searchParameters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if ($_smarty_tpl->tpl_vars['value']->value!=''){?>&<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?><?php }} ?>>Next</a>
		</td>
		<td>
			<form method=get action=index.php>
				<input type=hidden name='cmd' value='<?php echo $_smarty_tpl->getVariable('cmd')->value;?>
' />
				<?php if (!isset($_smarty_tpl->tpl_vars['searchParameters']) || !is_array($_smarty_tpl->tpl_vars['searchParameters']->value)) $_smarty_tpl->createLocalArrayVariable('searchParameters', null, null);
$_smarty_tpl->tpl_vars['searchParameters']->value['start'] = 0;?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('searchParameters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['name']->value=='limit'){?>
						<input type=text name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 size=4 value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' />
					<?php }else{ ?>
						<input type=hidden name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' />
					<?php }?>
				<?php }} ?>
				<input type=submit value='Display Limit' />
			</form>
		</td>
	</tr>
</table>
<?php }?>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/pagination.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>

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
            
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.datepick.package/jquery.datepick.js"></script>
<script language="JavaScript" type="text/javascript" src="js/sped/spedhistory.js"></script>

        </body>


    </html>



