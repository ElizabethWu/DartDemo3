<?php /* Smarty version Smarty-3.0.8, created on 2011-10-10 14:02:35
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/showscoresEditInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18103947834e936b7ba40977-80954032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35805f0d37d75760815ad71d4c937c10d62abcab' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/showscoresEditInfo.tpl',
      1 => 1309202352,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1310525876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18103947834e936b7ba40977-80954032',
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



                        

<a href=index.php?cmd=showscores&p1=<?php echo $_smarty_tpl->getVariable('listid')->value;?>
>Back to Group</a> |
<a href=index.php?cmd=showscoresEditInfo&listid=<?php echo $_smarty_tpl->getVariable('listid')->value;?>
&subcmd=addtab>Add New Tab</a>
<br /><br />

<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tabid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
 $_smarty_tpl->tpl_vars['tabid']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>

	<?php echo smarty_function_html_options(array('name'=>'foo','values'=>$_smarty_tpl->getVariable('values')->value,'output'=>$_smarty_tpl->getVariable('output')->value,'selected'=>$_smarty_tpl->tpl_vars['tab']->value['selected'],'onChange'=>"javascript:onChangeOrder('".($_smarty_tpl->tpl_vars['tabid']->value)."',this.value,'".($_smarty_tpl->getVariable('listid')->value)."');"),$_smarty_tpl);?>

	<input type=text name=grp_tab-tabid-<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
-tabname value='<?php echo $_smarty_tpl->tpl_vars['tab']->value['tabname'];?>
'
				onChange=javascript:onChangeValue('grp_tab-tabid-<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
-tabname',this.value);>
	<a href=index.php?cmd=showscoresEditInfo&listid=<?php echo $_smarty_tpl->getVariable('listid')->value;?>
&subcmd=addinfo&tabid=<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
>
		Add New Info To Tab
	</a> |
	<a href=index.php?cmd=showscoresEditInfo&listid=<?php echo $_smarty_tpl->getVariable('listid')->value;?>
&subcmd=deltab&tabid=<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
 onclick="return(confirmMsg('Really Delete This Tab'));">
		Delete Tab
	</a>
	<br />

	<table >
		<tr style='background-color:lightgrey; border:0px;'>
			<th>Kind</th>
			<th>Order</th>
			<th>Value</th>
			<th>Width</th>
			<th>Height</th>
			<th></th>
		</tr>
	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['infoid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
 $_smarty_tpl->tpl_vars['infoid']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
		<tr>
			<td><!-- Kind -->
				<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->getVariable('kindMenu')->value,'selected'=>$_smarty_tpl->tpl_vars['info']->value['kind'],'onChange'=>"javascript:onChangeValue('grp_info-infoid-".($_smarty_tpl->tpl_vars['infoid']->value)."-kind',this.value);"),$_smarty_tpl);?>

			</td>
			<td><!-- Order -->
				<?php echo smarty_function_html_options(array('name'=>'foo','values'=>$_smarty_tpl->tpl_vars['info']->value['values'],'output'=>$_smarty_tpl->tpl_vars['info']->value['output'],'selected'=>$_smarty_tpl->tpl_vars['info']->value['selected'],'onChange'=>"javascript:onChangeInfoOrder('".($_smarty_tpl->tpl_vars['infoid']->value)."',this.value,'".($_smarty_tpl->getVariable('listid')->value)."');"),$_smarty_tpl);?>

			</td>
			<td><!-- Value -->
				<input type=text name=grp_info-infoid-<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>
-value value='<?php echo $_smarty_tpl->tpl_vars['info']->value['value'];?>
'
					onChange="javascript:onChangeValue('grp_info-infoid-<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>
-value',this.value);">
			</td>
			<td><!-- Width -->
				<input type=text name=grp_info-infoid-<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>
-width value='<?php echo $_smarty_tpl->tpl_vars['info']->value['width'];?>
'
					onChange="javascript:onChangeValue('grp_info-infoid-<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>
-width',this.value);" size=5>
			</td>
			<td><!-- Height -->
				<input type=text name=grp_info-infoid-<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>
-height value='<?php echo $_smarty_tpl->tpl_vars['info']->value['height'];?>
'
					onChange="javascript:onChangeValue('grp_info-infoid-<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>
-height',this.value);" size=5>
			</td>
			<td><!-- Delete -->
				<a href=index.php?cmd=showscoresEditInfo&listid=<?php echo $_smarty_tpl->getVariable('listid')->value;?>
&subcmd=delinfo&infoid=<?php echo $_smarty_tpl->tpl_vars['infoid']->value;?>

				onclick="return(confirmMsg('Really Delete This Info'));">
					Delete
				</a>
			</td>
		</tr>		
	<?php }} ?>
	</table>
	<br /><br />
<?php }} ?>


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
            
<script language="JavaScript" type="text/javascript" src="js/showscoresEditInfo.js"></script>
<script language="JavaScript" type="text/javascript" src="lib/jquery-min.js"></script>

        </body>


    </html>



