<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 09:23:24
         compiled from "/Applications/MAMP/htdocs/dartdemo2_v2.0/lib/../smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031396867500eda0c06f963-08323893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6ed139f295aab8347b981f8a0a6d978a10ac28' => 
    array (
      0 => '/Applications/MAMP/htdocs/dartdemo2_v2.0/lib/../smarty/templates/header.tpl',
      1 => 1311688466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031396867500eda0c06f963-08323893',
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
