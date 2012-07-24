<?php /* Smarty version Smarty-3.0.8, created on 2012-07-03 15:02:57
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/editStandards.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6025357354ff37a2142fa55-47289350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be94298b88e0c1f3d1c40f0839134fe4f20d8f1d' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/editStandards.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
    'a97a836b5204fd065749968d314366522939d768' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/comp/editSubjectButtons.tpl',
      1 => 1311145894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6025357354ff37a2142fa55-47289350',
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
	<font color="red"><?php echo (($tmp = @$_smarty_tpl->getVariable('msg')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</font>
	<?php $_template = new Smarty_Internal_Template('comp/editSubjectButtons.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '6025357354ff37a2142fa55-47289350';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-03 15:02:57
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/editSubjectButtons.tpl" */ ?>
	<table cellpadding="0" cellspacing="0" border="0" width="90%">
		<tr>
			<td align="right" width="20%">
				<input type="button" value="Create Subjects" onclick="javascript: window.location = 'index.php?cmd=createsubject';" style="width: 100%;" />
			</td>
			<td align="right" width="20%">
				<input type="button" value="Create Levels" onclick="javascript: window.location = 'index.php?cmd=createlevels';" style="width: 100%;" />
			</td>
			<td align="left" width="20%">
				<input type="button" value="Edit Standard" onclick="javascript: window.location = 'index.php?cmd=editStandards';" style="width: 100%;" />
			</td>
			<td align="right" width="20%">
				<input type="button" value="Create, Delete, and Rename" onclick="javascript: window.location = 'index.php?cmd=standardManipulation';" style="width: 100%;" />
			</td>
			<td align="right" width="20%">
				<input type="button" value="Edit Quarters" onclick="javascript: window.location = 'index.php?cmd=editQuarter';" style="width: 100%;" />
			</td>
		</tr>
	</table>
	<br />
	<br />
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/editSubjectButtons.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
	<form action="index.php" method="get">
		<input type="hidden" name="cmd" value="editStandards" />
		<?php echo smarty_function_html_options(array('name'=>"subject",'options'=>$_smarty_tpl->getVariable('subjectMenu')->value,'selected'=>$_smarty_tpl->getVariable('subject')->value),$_smarty_tpl);?>

		<?php echo smarty_function_html_options(array('name'=>"level",'options'=>$_smarty_tpl->getVariable('levelMenu')->value,'selected'=>$_smarty_tpl->getVariable('level')->value),$_smarty_tpl);?>

		<input type="submit" value="Go To Standards">
	</form>
	<form name="std" action="?cmd=editStandards&subject=<?php echo $_smarty_tpl->getVariable('subject')->value;?>
&level=<?php echo $_smarty_tpl->getVariable('level')->value;?>
" method="post">
		<input name="change" type="hidden" />
		<table border="1" width="600px">
			<tr>
				<th>Ord</th>
				<th>Standard</th>
				<th>Type</th>
				<th>Shortname</th>
				<th>Description</th>
				<th>Link</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['std'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('standards')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['std']->key => $_smarty_tpl->tpl_vars['std']->value){
?>
			<tr valign="top">
				<td><input name="ord[]" value="<?php echo $_smarty_tpl->getVariable('std')->value->order;?>
" size="3></td">
				<td><?php echo $_smarty_tpl->getVariable('subject')->value;?>
.<?php echo $_smarty_tpl->getVariable('level')->value;?>
.<?php echo $_smarty_tpl->getVariable('std')->value->std;?>

					<input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->getVariable('std')->value->Identifier;?>
">
					<input type="hidden" name="subject[]" value="<?php echo $_smarty_tpl->getVariable('std')->value->subject;?>
">
					<input type="hidden" name="level[]" value="<?php echo $_smarty_tpl->getVariable('std')->value->level;?>
">
					<input type="hidden" name="std[]" value="<?php echo $_smarty_tpl->getVariable('std')->value->std;?>
">
				</td>
				<td>
					<?php ob_start();?><?php echo $_smarty_tpl->getVariable('std')->value->type;?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('name'=>"type[]",'options'=>$_smarty_tpl->getVariable('typeMenu')->value,'selected'=>$_tmp1),$_smarty_tpl);?>

				</td>
				<td><textarea cols=<?php echo $_smarty_tpl->getVariable('c')->value;?>
 rows=<?php echo $_smarty_tpl->getVariable('r')->value;?>
 name="shortname[]"><?php echo $_smarty_tpl->getVariable('std')->value->shortname;?>
</textarea></td>
				<td><textarea cols=<?php echo $_smarty_tpl->getVariable('c')->value;?>
 rows=<?php echo $_smarty_tpl->getVariable('r')->value;?>
 name="description[]"><?php echo $_smarty_tpl->getVariable('std')->value->description;?>
</textarea></td>
				<td><textarea cols=<?php echo $_smarty_tpl->getVariable('c')->value;?>
 rows=<?php echo $_smarty_tpl->getVariable('r')->value;?>
 name="link[]"><?php echo $_smarty_tpl->getVariable('std')->value->link;?>
</textarea></td>
			</tr>
			<?php }} ?>
		</table>
		<input type="submit" name="button" value="Save">
		<input type="reset" name="button" value="Reset Values" />
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



