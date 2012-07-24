<?php /* Smarty version Smarty-3.0.8, created on 2011-07-26 09:57:21
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9858371414e2f0001f119e7-23099971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a34dd68ec03aeaa74a4bf986feef7dd8df21de' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/header.tpl',
      1 => 1311702865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9858371414e2f0001f119e7-23099971',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="header">
    <div style="width:auto; display:inline; height: auto; float:left; margin-right: 10px ">
        <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
<?php echo $_smarty_tpl->getVariable('logo')->value;?>
" alt="Logo"/>
    </div>
    <div style="display:inline;height:auto; vertical-align: middle">
        <div style="font-size: 20pt; color:white;">
            <?php echo $_smarty_tpl->getVariable('districtName')->value;?>

        </div>
        <div style="color:white;">
            <?php echo $_smarty_tpl->getVariable('districtPhrase')->value;?>

        </div>
    </div>
</div>
