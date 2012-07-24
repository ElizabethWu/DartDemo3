<?php /* Smarty version Smarty-3.0.8, created on 2011-07-12 14:22:53
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentNavLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14814250834e1cc93d067762-68147539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047c2df9fc37c574389eca284f17cc008ec8473e' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/comp/studentNavLinks.tpl',
      1 => 1310442573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14814250834e1cc93d067762-68147539',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/Smarty/plugins/function.html_options.php';
?>

<select name="reportMenu" onChange='window.location=this.value'>
    <option value=''>Choose Action</option> 
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('studentReports')->value->getLinks(),'output'=>$_smarty_tpl->getVariable('studentReports')->value->getNames()),$_smarty_tpl);?>


</select>