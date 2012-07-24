<?php /* Smarty version Smarty-3.0.8, created on 2012-07-10 19:39:30
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/toggleSubjectLevel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6509438134e279ed2c4ed71-35173412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f67bcf7e38b7c891c9ebf0ae8308f2150d6d5e20' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/toggleSubjectLevel.tpl',
      1 => 1311099377,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
    'cb39d66bdc8e7086729c696d8ca9769c5c78de0a' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/comp/toggle.tpl',
      1 => 1312012356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6509438134e279ed2c4ed71-35173412',
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
	<form name="toggle" method="post" action=index.php?cmd=saveToggle>
		<input type="hidden" name="loc" />
		<input type="hidden" name="listID" value=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
 />
		<input type="hidden" name="sub" value=<?php echo $_smarty_tpl->getVariable('sub')->value;?>
 />
		<input type="hidden" name="lvl" value=<?php echo $_smarty_tpl->getVariable('lvl')->value;?>
 />
		<div align='left'>
			<br/>
			<font size='4'><?php echo $_smarty_tpl->getVariable('stdcount')->value;?>
 Student(s) - <?php echo $_smarty_tpl->getVariable('subName')->value;?>
 <?php echo $_smarty_tpl->getVariable('lvl')->value;?>
 - <?php echo $_smarty_tpl->getVariable('listName')->value;?>
 Group<br/></font>
			<a id="page_help" href="#" onclick="" style="font-size: 8pt; color: #006FEB">
				<img alt="help" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/help_16.png" style="vertical-align: middle"/> About this page
			</a>

			<blockquote>
				<div id="page_modal_help" style="display:none">
					<p><font size="3"><b>Individual View - All Content Areas</b></font></p>
					<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
						<p>
						This screen shows the current status of these students in this
						content area.  Toggle the appropriate indicator, and enter comments as
						needed. Make sure you &quot;Save Changes&quot; for the entire page from
						either the pull down menu, or the button at the bottom of the page.  The
						time and date stamp of your entry for this student will be added.
						</p>
						<ul>
							<li type='circle'>
								<font size='2'><b>Note:</b>  Roll over each standard number to read
								its short name!</font>
							</li>
						</ul>
					</font>
					<p><font size="3"><b>Weighted List of Standards Needed</b></font></p>
					<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
						<p>
						Here is a &quot;weighted list&quot; of the common relative
						weaknesses of this group of students. The more students is this group that
						show any standard as having no toggled status, Emerging status, or Developing
						status, the larger the name of the standard is in the list. This means that
						the largest short standard names are the most common relative weaknesses of
						the group.
						</p>
					</font>
				</div>
			</blockquote>
			<font size='2'>
				<?php echo smarty_function_html_options(array('name'=>"pullDownMenu",'options'=>$_smarty_tpl->getVariable('menuData')->value,'selected'=>'','onChange'=>"handleSelection(this.value)"),$_smarty_tpl);?>

			</font>
			<br/>
			<!--<font size='4'>Shared Standard Needs - <?php echo $_smarty_tpl->getVariable('subName')->value;?>
 <?php echo $_smarty_tpl->getVariable('lvl')->value;?>
 - <?php echo $_smarty_tpl->getVariable('listName')->value;?>
<br/><br/></font>-->
			<p><font size='4' color='#cc0000'>Weighted List of Standards &amp; Assessments Needed</font>
			<font size='2'>: </font></p>
		</div>
		<div class="notetarget">
		<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('weightedStd')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['link'];?>
" target="_blank"><span class="<?php echo $_smarty_tpl->tpl_vars['w']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['span'];?>
</span></a> ::
		<?php }} ?>
		</div>

		<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
?>
		<a name="<?php echo $_smarty_tpl->tpl_vars['student']->value['anchor'];?>
"></a>
		<b><font color='#cc0000' class="big">
				<a href=index.php?cmd=toggleStudent&p1=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentID'];?>
><?php echo $_smarty_tpl->tpl_vars['student']->value['text'];?>
</a>
				<a href=index.php?cmd=updateSingleLevelScore&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentID'];?>
&subject=<?php echo $_smarty_tpl->getVariable('sub')->value;?>
&level=<?php echo $_smarty_tpl->getVariable('lvl')->value;?>

				   onMouseOver="return escape('Update score for saved values. NOTE: THIS WILL RESET ANY TOGGLE/COMMENT CHANGES NOT SAVED.')">.</a>
				- <font color=#cc0000><?php echo $_smarty_tpl->tpl_vars['student']->value['progress'];?>
</font>
			</font></b><br/>
		<b><?php echo $_smarty_tpl->getVariable('subName')->value;?>
 <?php echo $_smarty_tpl->getVariable('lvl')->value;?>
 Students
			<?php echo smarty_function_html_options(array('name'=>"pullDownMenu",'options'=>$_smarty_tpl->getVariable('menuData')->value,'selected'=>'','onChange'=>"handleSelection(this.value)"),$_smarty_tpl);?>

		</b><br />
		<b>Last Change:</b> <?php echo $_smarty_tpl->tpl_vars['student']->value['change'];?>
 -
		<a href=index.php?cmd=history&student=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentID'];?>
&subject=<?php echo $_smarty_tpl->getVariable('sub')->value;?>
&lvl=<?php echo $_smarty_tpl->getVariable('lvl')->value;?>
>History</a>

			<?php $_smarty_tpl->tpl_vars['Display'] = new Smarty_variable($_smarty_tpl->tpl_vars['student']->value['display'], null, null);?>
			<?php $_smarty_tpl->tpl_vars['gradeSymbols'] = new Smarty_variable($_smarty_tpl->tpl_vars['student']->value['gradeSymbols'], null, null);?>
			<?php $_smarty_tpl->tpl_vars['studentID'] = new Smarty_variable($_smarty_tpl->tpl_vars['student']->value['studentID'], null, null);?>
			<?php $_template = new Smarty_Internal_Template('comp/toggle.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '6509438134e279ed2c4ed71-35173412';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-10 19:39:31
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/toggle.tpl" */ ?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/dartdem2/public_html/lib/smarty/libs/plugins/function.html_options.php';
?><table border=1>
<!-- Standards -->
	<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->getVariable('width')->value-1, null, null);?>
	<?php while ($_smarty_tpl->getVariable('start')->value<$_smarty_tpl->getVariable('totalStd')->value){?>
		<?php $_smarty_tpl->tpl_vars['max'] = new Smarty_variable($_smarty_tpl->getVariable('totalStd')->value-$_smarty_tpl->getVariable('start')->value, null, null);?> 
		<tr rowspan=2 bgcolor=<?php echo $_smarty_tpl->getVariable('color1')->value;?>
>
			<th rowspan=2><?php echo $_smarty_tpl->getVariable('sub')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lvl')->value;?>
)<?php if ($_smarty_tpl->getVariable('levelName')->value!=''){?><br /><?php echo $_smarty_tpl->getVariable('levelName')->value;?>
<?php }?></th>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - ($_smarty_tpl->getVariable('start')->value) : $_smarty_tpl->getVariable('start')->value-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),$_smarty_tpl->getVariable('max')->value);
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getVariable('start')->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php $_smarty_tpl->tpl_vars['std'] = new Smarty_variable($_smarty_tpl->getVariable('standards')->value[$_smarty_tpl->tpl_vars['i']->value], null, null);?>
			<th width=<?php echo $_smarty_tpl->getVariable('cellwidth')->value;?>
 onMouseOver="return escape('<?php echo $_smarty_tpl->getVariable('std')->value['description'];?>
')">
				<a href=<?php echo $_smarty_tpl->getVariable('std')->value['link'];?>
><?php echo $_smarty_tpl->getVariable('std')->value['std'];?>
</a>
			</th>
		<?php }} ?>
		</tr>
		<tr>
		<?php if ($_smarty_tpl->getVariable('Display')->value=='edit'){?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - ($_smarty_tpl->getVariable('start')->value) : $_smarty_tpl->getVariable('start')->value-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),$_smarty_tpl->getVariable('max')->value);
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getVariable('start')->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php $_smarty_tpl->tpl_vars['stdID'] = new Smarty_variable($_smarty_tpl->getVariable('standards')->value[$_smarty_tpl->tpl_vars['i']->value]['std'], null, null);?>
				<?php $_smarty_tpl->tpl_vars['std'] = new Smarty_variable($_smarty_tpl->getVariable('student')->value['standards'][$_smarty_tpl->getVariable('stdID')->value], null, null);?>
				<td>
					<input type=hidden name="old_<?php echo $_smarty_tpl->getVariable('std')->value['name'];?>
" value="<?php echo $_smarty_tpl->getVariable('std')->value['value'];?>
" />
					<input type=hidden name="ch_<?php echo $_smarty_tpl->getVariable('std')->value['name'];?>
" value=empty />
					<?php echo smarty_function_html_options(array('name'=>($_smarty_tpl->getVariable('std')->value['name']),'options'=>$_smarty_tpl->getVariable('gradeSymbols')->value,'selected'=>$_smarty_tpl->getVariable('std')->value['selected'],'onChange'=>"changeValue('".($_smarty_tpl->getVariable('std')->value['name'])."',this.value)"),$_smarty_tpl);?>

				</td>
			<?php }} ?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - ($_smarty_tpl->getVariable('start')->value) : $_smarty_tpl->getVariable('start')->value-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),$_smarty_tpl->getVariable('max')->value);
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getVariable('start')->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php $_smarty_tpl->tpl_vars['stdID'] = new Smarty_variable($_smarty_tpl->getVariable('standards')->value[$_smarty_tpl->tpl_vars['i']->value]['std'], null, null);?>
				<?php $_smarty_tpl->tpl_vars['std'] = new Smarty_variable($_smarty_tpl->getVariable('student')->value['standards'][$_smarty_tpl->getVariable('stdID')->value], null, null);?>
				<td align=center>&nbsp;<?php echo $_smarty_tpl->getVariable('std')->value['symbol'];?>
&nbsp;</td>
			<?php }} ?>
		<?php }?>
		</tr>
		<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable($_smarty_tpl->getVariable('end')->value+1, null, null);?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->getVariable('end')->value+$_smarty_tpl->getVariable('width')->value, null, null);?><?php if ($_smarty_tpl->getVariable('end')->value>$_smarty_tpl->getVariable('totalStd')->value){?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->getVariable('totalStd')->value-1, null, null);?><?php }?>
	<?php }?>
	</table>
	<table border= 1>

	<!-- Overall -->
	<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->getVariable('width')->value-1, null, null);?>
	<?php while ($_smarty_tpl->getVariable('start')->value<$_smarty_tpl->getVariable('totalOver')->value+$_smarty_tpl->getVariable('n_sum')->value){?>
		<?php $_smarty_tpl->tpl_vars['max'] = new Smarty_variable($_smarty_tpl->getVariable('totalOver')->value-$_smarty_tpl->getVariable('start')->value, null, null);?> 
		<tr rowspan=2 bgcolor=<?php echo $_smarty_tpl->getVariable('color1')->value;?>
>
			<th rowspan=2><?php echo $_smarty_tpl->getVariable('sub')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lvl')->value;?>
)<?php if ($_smarty_tpl->getVariable('levelName')->value!=''){?><br /><?php echo $_smarty_tpl->getVariable('levelName')->value;?>
<?php }?></th>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - ($_smarty_tpl->getVariable('start')->value) : $_smarty_tpl->getVariable('start')->value-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),$_smarty_tpl->getVariable('max')->value);
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getVariable('start')->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->getVariable('overall')->value[$_smarty_tpl->tpl_vars['i']->value], null, null);?>
			<th width=<?php echo $_smarty_tpl->getVariable('cellwidth')->value;?>
 onMouseOver="return escape('<?php echo $_smarty_tpl->getVariable('over')->value['description'];?>
')"><?php echo $_smarty_tpl->getVariable('over')->value['std'];?>
</th>
		<?php }} ?>
		<?php if ($_smarty_tpl->getVariable('end')->value>=$_smarty_tpl->getVariable('totalOver')->value-1){?> 
			<!-- Summary -->
			<?php  $_smarty_tpl->tpl_vars['sum'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sumID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('summary')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sum']->key => $_smarty_tpl->tpl_vars['sum']->value){
 $_smarty_tpl->tpl_vars['sumID']->value = $_smarty_tpl->tpl_vars['sum']->key;
?>
				<th width=<?php echo $_smarty_tpl->getVariable('cellwidth')->value;?>
 onMouseOver="return escape('<?php echo $_smarty_tpl->tpl_vars['sum']->value['description'];?>
')"><?php echo $_smarty_tpl->tpl_vars['sum']->value['label'];?>
</th>
			<?php }} ?>
		<?php }?>
		</tr>
		<tr>
		<?php if ($_smarty_tpl->getVariable('Display')->value=='edit'){?>
			<!-- Overall -->
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - ($_smarty_tpl->getVariable('start')->value) : $_smarty_tpl->getVariable('start')->value-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),$_smarty_tpl->getVariable('max')->value);
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getVariable('start')->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php $_smarty_tpl->tpl_vars['overID'] = new Smarty_variable($_smarty_tpl->getVariable('overall')->value[$_smarty_tpl->tpl_vars['i']->value]['std'], null, null);?>
				<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->getVariable('student')->value['overall'][$_smarty_tpl->getVariable('overID')->value], null, null);?>
				<td>
					<input type=hidden name="old_<?php echo $_smarty_tpl->getVariable('over')->value['name'];?>
" value="<?php echo $_smarty_tpl->getVariable('over')->value['value'];?>
" />
					<input type=hidden id="ch_<?php echo $_smarty_tpl->getVariable('over')->value['name'];?>
" name="ch_<?php echo $_smarty_tpl->getVariable('over')->value['name'];?>
" value=empty />
					<?php echo smarty_function_html_options(array('name'=>($_smarty_tpl->getVariable('over')->value['name']),'options'=>$_smarty_tpl->getVariable('gradeSymbols')->value,'selected'=>$_smarty_tpl->getVariable('over')->value['selected'],'onChange'=>"changeValue('".($_smarty_tpl->getVariable('over')->value['name'])."',this.value)"),$_smarty_tpl);?>

				</td>
			<?php }} ?>

			<?php if ($_smarty_tpl->getVariable('end')->value>=$_smarty_tpl->getVariable('totalOver')->value-1){?> 
				<!-- Summary -->
				<?php  $_smarty_tpl->tpl_vars['sum'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sumID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('summary')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sum']->key => $_smarty_tpl->tpl_vars['sum']->value){
 $_smarty_tpl->tpl_vars['sumID']->value = $_smarty_tpl->tpl_vars['sum']->key;
?>
					<?php $_smarty_tpl->tpl_vars['student_sum'] = new Smarty_variable($_smarty_tpl->getVariable('student')->value['summary'][$_smarty_tpl->tpl_vars['sumID']->value], null, null);?>
					<td>
						<input type=hidden name=old_<?php echo $_smarty_tpl->getVariable('student_sum')->value['name'];?>
 value=<?php echo $_smarty_tpl->getVariable('student_sum')->value['value'];?>
 />
						<input type=hidden id=ch_<?php echo $_smarty_tpl->getVariable('student_sum')->value['name'];?>
 name=ch_<?php echo $_smarty_tpl->getVariable('student_sum')->value['name'];?>
 value=empty />
						<?php echo smarty_function_html_options(array('name'=>($_smarty_tpl->getVariable('student_sum')->value['name']),'options'=>$_smarty_tpl->tpl_vars['sum']->value['options'],'selected'=>$_smarty_tpl->getVariable('student_sum')->value['value'],'onChange'=>"changeValue('".($_smarty_tpl->getVariable('student_sum')->value['name'])."', this.value)"),$_smarty_tpl);?>

					</td>
				<?php }} ?>
			<?php }?>
		<?php }else{ ?>
			<!-- Overall -->
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - ($_smarty_tpl->getVariable('start')->value) : $_smarty_tpl->getVariable('start')->value-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),$_smarty_tpl->getVariable('max')->value);
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getVariable('start')->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php $_smarty_tpl->tpl_vars['overID'] = new Smarty_variable($_smarty_tpl->getVariable('overall')->value[$_smarty_tpl->tpl_vars['i']->value]['std'], null, null);?>
				<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->getVariable('student')->value['overall'][$_smarty_tpl->getVariable('overID')->value], null, null);?>
				<td align=center>&nbsp;<?php echo $_smarty_tpl->getVariable('over')->value['symbol'];?>
&nbsp;</td>
			<?php }} ?>
			<?php if ($_smarty_tpl->getVariable('end')->value>=$_smarty_tpl->getVariable('totalOver')->value-1){?> 
				<!-- Summary -->
				<td align=center>&nbsp;<?php echo $_smarty_tpl->getVariable('student')->value['summary']['qpi']['value'];?>
&nbsp;</td>
				<td align=center>&nbsp;<?php echo $_smarty_tpl->getVariable('student')->value['summary']['ase']['value'];?>
&nbsp;</td>
				<td align=center>&nbsp;<?php echo $_smarty_tpl->getVariable('student')->value['summary']['prog']['value'];?>
&nbsp;</td>
			<?php }?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable($_smarty_tpl->getVariable('end')->value+1, null, null);?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->getVariable('end')->value+$_smarty_tpl->getVariable('width')->value, null, null);?>
		<?php if ($_smarty_tpl->getVariable('end')->value>=$_smarty_tpl->getVariable('totalOver')->value-1){?> 
			<?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable($_smarty_tpl->getVariable('totalOver')->value+$_smarty_tpl->getVariable('n_sum')->value, null, null);?>
		<?php }?>
		</tr>
	<?php }?>
</table>
<input type=hidden name="old_<?php echo $_smarty_tpl->getVariable('student')->value['comment']['comment_id'];?>
" value="<?php echo $_smarty_tpl->getVariable('student')->value['comment']['esc_comment'];?>
" />
<input type=hidden id="ch_<?php echo $_smarty_tpl->getVariable('student')->value['comment']['comment_id'];?>
" name="ch_<?php echo $_smarty_tpl->getVariable('student')->value['comment']['comment_id'];?>
" value=empty />
<font size="2"><b>Teacher Comments:</b></font><br/>
<?php if ($_smarty_tpl->getVariable('Display')->value=='edit'){?>
<textarea name="comment_<?php echo $_smarty_tpl->getVariable('studentID')->value;?>
" rows="8" cols="80" wrap="physical" onChange='changeValue("<?php echo $_smarty_tpl->getVariable('student')->value['comment']['comment_id'];?>
",this.value )'><?php echo $_smarty_tpl->getVariable('student')->value['comment']['value'];?>
</textarea><br/>
<?php }else{ ?>
<?php echo $_smarty_tpl->getVariable('student')->value['comment']['value'];?>
&nbsp;<br/><br/>
<?php }?>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/toggle.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
		<?php }} ?>
		<?php if ($_smarty_tpl->getVariable('totalDisplay')->value=='edit'){?>
		<input type="reset" value="reset" />
		<input type="button" onClick='handleSelection("#save_changes")' value='save all changes' />
		<?php }?>
	</form>
	<br/>* Placing mouse over standard number will display standards descriptions.
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
            
<script type="text/javascript" src="js/jquery/jquery.simplemodal.1.4.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/toggle.js"></script>
<script language="JavaScript" type="text/javascript" src="js/wz_tooltip.js"></script>

        </body>


    </html>



