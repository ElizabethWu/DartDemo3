<?php /* Smarty version Smarty-3.0.8, created on 2011-07-11 22:42:09
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/leftSideMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175781324e1becc10071c1-19231348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4acb78ab1fd878fd6f6d1d64a235a230e5314f0' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/leftSideMenu.tpl',
      1 => 1310452910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175781324e1becc10071c1-19231348',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<br><b><font color="#0066ff">DART Info<br></font></b>

 <?php if ($_smarty_tpl->getVariable('showReports')->value){?>
 <?php }?>

 <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
<a href="index.php?cmd=bigRed">Big Red Button</a><br>
 <?php }?>

<?php if ($_smarty_tpl->getVariable('showMassImport')->value){?>
<a href="index.php?cmd=uploadInput">Mass Import</a><br/>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['moduleLink'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('moduleLinks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['moduleLink']->key => $_smarty_tpl->tpl_vars['moduleLink']->value){
?>
<?php echo $_smarty_tpl->tpl_vars['moduleLink']->value;?>

<?php }} ?>
