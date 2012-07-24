<?php /* Smarty version Smarty-3.0.8, created on 2012-07-02 13:46:23
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/showscores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4221914974ff216af5d5ec3-16031222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50170202ae8f98d17753e1577e1a5facc1857a37' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/showscores.tpl',
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
  'nocache_hash' => '4221914974ff216af5d5ec3-16031222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

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



                        
<style>
    .hidden { display: none; }
    .unhidden { display: inline; }
</style>
<input type="hidden" name="listName" value="<?php echo $_smarty_tpl->getVariable('listName')->value;?>
" />
<input type="hidden" name="imageURL" value="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
" />
<div style="width:1024px;">
	<div align="left">
		<br/>
		<font size="4">Overview - All Content Areas - <?php echo $_smarty_tpl->getVariable('listName')->value;?>
 Group</font>
		<br />
		<a id="page_help" href="#" onclick="" style="font-size: 8pt; color: #006FEB">
			<img alt="help" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/help_16.png" style="vertical-align: middle"/> About this page
		</a>

		<blockquote>
			<div id="page_modal_help" style="display:none">
				<p><font size="3"><b>Weighted List of Standards Needed</b></font></p>
				<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><p>
					Here is a &quot;weighted list&quot; of the common relative
					weaknesses of this group of students from <i>all of their content areas</i>.
					The more students is this group that show any standard as having no toggled
					status, Emerging status, or Developing status, the larger the name
					of the standard is in the list. This means that the largest short standard
					names are the most common relative weaknesses of the group.</p>
				</font>
				<br />
				<p><font size="3"><b>Overview - All Content Areas</b></font></p>
				<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
					<!--- Roll over each content area code to read it!</font><br />-->
					- Click on the Level Number in any Content Area to view the <i>students in this group at that level</i>.<br />
					- Click on the name of the student to see<i> his or her standards progress in all content areas</i>.<br />
					- Click on any Content Area to <i>re-sort the view by Content Area &amp; Level Number</i>.<br />
				</font>
			</div>
		</blockquote>
		<br/><br/>
		<p><font size="4" color="#cc0000">Weighted List of Standards Needed</font>
			<font size="2">: </font></p>

		<!-- Weighted List of Standards -->
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

	</div>
	<b>Student count - <?php echo $_smarty_tpl->getVariable('stdcount')->value;?>
</b><br/>
	<a href='index.php?cmd=editlist&p1=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
'>Edit Group</a> |
	<a href='index.php?cmd=showscoresEditInfo&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
'>Edit Tab</a>
	<?php if ($_smarty_tpl->getVariable('att_am')->value||$_smarty_tpl->getVariable('att_pm')->value){?> Take attendance:
	<?php if ($_smarty_tpl->getVariable('att_am')->value){?><a href=index.php?cmd=AttendanceList&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
&period=0>AM</a><?php }?>
	<?php if ($_smarty_tpl->getVariable('att_am')->value&&$_smarty_tpl->getVariable('att_pm')->value){?>|<?php }?>
	<?php if ($_smarty_tpl->getVariable('att_pm')->value){?><a href=index.php?cmd=AttendanceList&listid=<?php echo $_smarty_tpl->getVariable('listID')->value;?>
&period=1>PM</a><?php }?>
	<?php }?>
	<br/>
	<a href="javascript:turnOn('home');">Home</a>

	<!-- Custom tabs -->
	<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tabs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
		| <a href=javascript:turnOn('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</a>
	<?php }} ?>
	<br/>
	<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tabs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
	<div id="tab<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="hidden">
		<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t']->value['subtabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
?>
			<?php if ($_smarty_tpl->tpl_vars['s']->value['kind']=='iframe'){?>
			<iframe width='<?php echo $_smarty_tpl->tpl_vars['s']->value['width'];?>
' height='<?php echo $_smarty_tpl->tpl_vars['s']->value['height'];?>
' src='<?php echo $_smarty_tpl->tpl_vars['s']->value['value'];?>
'></iframe>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['s']->value['value'];?>

			<?php }?>
		<br />
		<?php }} ?>
	</div>
	<?php }} ?>
</div>
<div style="margin-bottom:30px;">
	<div id="tabhome" class="unhidden"></div>
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
            
<script type="text/javascript" src="js/extjs/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery/jquery.simplemodal.1.4.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/view/Student.js"></script>
<script language="JavaScript" type="text/javascript" src="js/wz_tooltip.js"></script>
<script language="JavaScript" type="text/javascript" src="js/showScores.js"></script>

        </body>


    </html>



