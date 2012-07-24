<?php /* Smarty version Smarty-3.0.8, created on 2012-07-05 20:44:30
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/districtrep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12052484604ff66d2e5e6f51-54184644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c83f160e4239f984d7bd7577b694a5df6c4a2b1' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/districtrep.tpl',
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
  'nocache_hash' => '12052484604ff66d2e5e6f51-54184644',
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
        <title>DSD DART: District Improvement Plan</title>
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



                        
<table border="0" cellpadding="0" cellspacing="2">
    <tr>
        <td width="60%">
            <div align="left">
                <br/>
                <font color="#cc0000" size="4"
                      face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                    District Improvement Plan: <?php echo (($_smarty_tpl->getVariable('report')->value->year).("-")).((substr(($_smarty_tpl->getVariable('report')->value->year+1),2,2)));?>
  School Year
                </font>
            </div>
            <blockquote>
                <div align="left">
                    <div class="noteimportant">
                        <font size="2"
                              face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                            All 15 schools in the Bering Strait are required to do Site School Improvement Plans in DART,
                            and adjust their goals each quarter. Individual BSSD teachers also use the DART SIP Module to create classroom level plans.
                            <br/>
                            <br/>
                            The following District Improvement Plan data has been entered by BSSD District Office Program managers and staff,
                            and summarizes their efforts for this school year. This is meant to meet the reporting requirements of the Alaska
                            Department of Education and Early Development.
                        </font>
                    </div>
                </div>
            </blockquote>
        </td>
        <td width="40%">
            <div align="center">
                <img src="http://dart.bssd.org/images/eed_logo.gif" alt="" 
                     height="168" width="182" border="0">
                <img src="http://dart.bssd.org/images/BSSD-logo_168.gif" alt=""
                     height="168" width="162" border="0">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div align="left">
                <table border="0" cellpadding="2" cellspacing="2" width="1000">
                    <tbody>
                        <tr>
                            <td colspan="2" bgcolor="#ccffff">
                                <div align="left">
                                    <font size="3" color="#336666" face="Arial">
                                        <b>Summary of District Improvement Plan</b>
                                    </font>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>
</table>
<div align="center">
    <table width="550" border="0" cellspacing="2" cellpadding="0">
        <tr>
            <td nowrap bgcolor="#ffff99" width="50%">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>Subjects in Order of Strength</b>
                    </font>
                </div>
            </td>
            <td nowrap bgcolor="#ffff99" width="50%">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>Strongest &amp; Weakest Grade Levels</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td width="50%">
                <font face="Arial" size="2">
                            <?php echo $_smarty_tpl->getVariable('report')->value->subjectsInOrderOfStrength;?>

                </font>
            </td>

            <td width="50%">
                <font face="Arial" size="2">
                                <?php echo $_smarty_tpl->getVariable('report')->value->strongestWeakestGrades;?>

                </font>
            </td>
        </tr>
    </table>
</div>
<div align="left">
    <p>
        <font size="3" color="#336666" face="Arial">
            <b>Specific Areas of Emphasis</b>
        </font><br/>
    </p>
</div>
<div align="center">
    <table border=1>
        <?php  $_smarty_tpl->tpl_vars['emphasisArea'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('report')->value->emphasisAreas; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['emphasisArea']->key => $_smarty_tpl->tpl_vars['emphasisArea']->value){
?>
        <tr>
            <td class=sipsubheading bgcolor="#ffff99">
                <font size="2" face="Arial">
                    <b><?php echo $_smarty_tpl->getVariable('emphasisArea')->value->area;?>
:</b>
                </font>
            </td>
            <td>
                <font size="3" face="Arial">
                    <?php echo $_smarty_tpl->getVariable('emphasisArea')->value->value;?>

                </font>
            </td>
        </tr>
        <?php }} ?>
    </table>
</div>

<div align="left">
    <p>
        <font size="3" color="#336666" face="Arial">
            <b>State Questions and Responses</b>
        </font>
    </p>
    <p>
        <font size="2" face="Arial">
            <b>1) Check each cell in the following table to identify
                the areas in which the district did NOT meet AYP:</b>
        </font>
    </p>
    <p>
        <font size="2" face="Arial">Each marked cell in the following
            table identifies the areas in which the district did
            <u>NOT</u> meet AYP:&nbsp;
        </font>
    </p>
    <div align="center">
        <table width="600" border="0" cellspacing="2" cellpadding="0">
            <tr>
                <td colspan="3" bgcolor="#ffff99">
                </td>
                <td bgcolor="#ffff99">
                    <div align="center">
                        <font size="2" face="Arial">
                            <b>All Students</b>
                        </font>
                    </div>
                </td>
                <td bgcolor="#ffff99">
                    <div align="center">
                        <font size="2" face="Arial">
                            <b>Ethnic Groups</b>
                        </font>
                    </div>
                </td>
                <td bgcolor="#ffff99">
                    <div align="center">
                        <font size="2" face="Arial">
                            <b>SWD</b>
                        </font>
                    </div>
                </td>
                <td bgcolor="#ffff99">
                    <div align="center">
                        <font size="2" face="Arial">
                            <b>LEP</b>
                        </font>
                    </div>
                </td>
                <td bgcolor="#ffff99">
                    <div align="center">
                        <font size="2" face="Arial">
                            <b>Low-Income</b>
                        </font>
                    </div>
                </td>
            </tr>
                        <?php  $_smarty_tpl->tpl_vars['notMetAYP'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('report')->value->notMetAYPs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['notMetAYP']->key => $_smarty_tpl->tpl_vars['notMetAYP']->value){
?>
            <tr>
                <td colspan="3">
                    <font size="2" face="Arial">
                        <b><?php echo $_smarty_tpl->getVariable('notMetAYP')->value->name;?>
</b>
                    </font>
                </td>
                <td>
                    <div align="center">
                        <font size="2" face="Arial">
                            <b>
                                            <?php echo $_smarty_tpl->getVariable('notMetAYP')->value->allStudents;?>

                            </b>
                        </font>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <font size="2" face="Arial">
                            <b><?php echo $_smarty_tpl->getVariable('notMetAYP')->value->ethnicGroups;?>
</b>
                        </font>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <font size="2" face="Arial">
                            <b><?php echo $_smarty_tpl->getVariable('notMetAYP')->value->SWD;?>
</b>
                        </font>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <font size="2" face="Arial">
                            <b><?php echo $_smarty_tpl->getVariable('notMetAYP')->value->LEP;?>
</b>
                        </font>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <font size="2" face="Arial">
                            <b><?php echo $_smarty_tpl->getVariable('notMetAYP')->value->lowIncome;?>
</b>
                        </font>
                    </div>
                </td>
            </tr>
                        <?php }} ?>
        </table>
    </div>
    <p>
        <font size="2" face="Arial">
            <b>2) Describe why the district&rsquo;s prior plans have
                not succeeded in improving student achievement.</b>
        </font>
    </p>
</div>
<div align="center">
    <table width="750" border="1" cellspacing="2" cellpadding="0">
        <tr>
            <td bgcolor="#ffff99">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>District Response to Question 2</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="left">
                    <font size="2" face="Arial">
                                    <?php echo $_smarty_tpl->getVariable('report')->value->stateQ2Response->response;?>

                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffff99">
                <div align="center">

                    <font size="2" face="Arial">
                        <b>Links to Supporting Evidence Online for Response</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('report')->value->stateQ2Response->links;?>

                </font>
            </td>
        </tr>
    </table>
</div>
<div align="left">
    <div align="left">
        <p><font size="2" face="Arial">
                <b>3) Describe the process used to notify all parents
                    of the district status and of their opportunities
                    to be involved in addressing the issues that caused
                    the district to be identified for improvement.
                    Please provide a copy of the notification parents received.</b>
            </font>
        </p>
    </div>
</div>
<div align="center">
    <table width="750" border="1" cellspacing="2" cellpadding="0">
        <tr>
            <td bgcolor="#ffff99">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>District Response to Question 3</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="left">
                    <font size="2" face="Arial">
                                    <?php echo $_smarty_tpl->getVariable('report')->value->stateQ3Response->response;?>

                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffff99">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>Links to Supporting Evidence Online for Response</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('report')->value->stateQ3Response->links;?>

                </font>
            </td>
        </tr>
    </table>
</div>
<div align="left">
    <div align="left">
        <div align="left">
            <p><font size="2" face="Arial">
                    <b>4) Describe any technical assistance, if any, to be provided to the
                        district in developing or implementing the plan.</b>
                </font>
            </p>
        </div>
    </div>
</div>
<div align="center">
    <table width="750" border="1" cellspacing="2" cellpadding="0">
        <tr>
            <td bgcolor="#ffff99">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>District Response to Question 4</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="left">
                    <font size="2" face="Arial">
                                    <?php echo $_smarty_tpl->getVariable('report')->value->stateQ4Response->response;?>

                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffff99">
                <div align="center">
                    <font size="2" face="Arial">
                        <b>Links to Supporting Evidence Online</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('report')->value->stateQ4Response->links;?>

                </font>
            </td>
        </tr>
    </table>
</div>

<div align="left">
    <p>
        <font size="3" color="#336666" face="Arial">
            <b>Goals and Action Plans</b>
        </font>
    </p>
            <?php  $_smarty_tpl->tpl_vars['GAPlan'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('report')->value->GAPlans; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['GAPlan']->key => $_smarty_tpl->tpl_vars['GAPlan']->value){
?>
    <table class="Table11" border="0" cellspacing="0" cellpadding="0">
        <colgroup>
            <col width="1059" />
        </colgroup>
        <tr class="Table111">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; ">
                <div align="right">
                    <font size="3" color="#336666" face="Arial">
                        <b>Emphasis Area ::</b>
                    </font><font size="3" color="red" face="Arial">
                        <b><?php echo $_smarty_tpl->getVariable('GAPlan')->value->emphasisArea;?>
</b>
                    </font>
                </div>
            </td>
        </tr>
        <tr class="Table111">
            <td class="Table11_A1" style="text-align:left;width:9.5368in;" bgcolor="#ffff99">
                <p class="P9">
                    <font size="2" face="Arial">
                        <b>District Meaurable Goal</b>
                    </font>
                </p>
            </td>
        </tr>
        <tr class="Table112">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; ">
                <br/>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('GAPlan')->value->districtMeasurableGoal;?>

                </font>
            </td>
        </tr>
        <tr class="Table112">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; " bgcolor="#ffff99">
                <p class="P7">
                    <b><font size="2" face="Arial">
                            <span class="T12">
                                Current Performance Level on SBAs
                            </span>
                        </font>
                    </b>
                </p>
            </td>
        </tr>
        <tr class="Table113">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; ">
                <br>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('GAPlan')->value->currentSBA;?>

                </font>
            </td>
        </tr>
        <tr class="Table113">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; "
                bgcolor="#ffff99">
                <b><font size="2" face="Arial">
                        <span class="T12">
                            Performance Target
                        </span>
                    </font>
                </b>
            </td>
        </tr>
        <tr class="Table113">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; ">
                <br>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('GAPlan')->value->performanceTarget;?>

                </font>
            </td>
        </tr>
        <tr class="Table113">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; "
                bgcolor="#ffff99">
                <p class="P10">
                    <font size="2" face="Arial">
                        <b>Scientifically based research to support each strategy listed below.
                            Can include references or summaries of relevant research:</b>
                    </font>
                </p>
            </td>
        </tr>
        <tr class="Table113">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; ">
                <br>
                <font size="2" face="Arial">
                                <?php echo $_smarty_tpl->getVariable('GAPlan')->value->researchSupport;?>

                </font>
            </td>
        </tr>
        <tr class="Table113">
            <td class="Table11_A1" style="text-align:left;width:9.5368in; ">
                <div align="center">
                    <font size="3" color="#336666" face="Arial"><b><?php echo $_smarty_tpl->getVariable('GAPlan')->value->emphasisArea;?>
 Action Planning</b></font></div>
            </td>

        </tr>
    </table>
    <table class="Table12" width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr class="Table121">
            <td class="Table12_A1" style="text-align:left;" bgcolor="#ffff99" width="50%">
                <div align="center">
                    <font size="2" face="Arial"><b>Smart Plans</b></font></div>
            </td>
            <td class="Table12_E1" style="text-align:left;" bgcolor="#ffff99" width="50%">
                <div align="center">
                    <font size="2"><font face="Arial"><b>Evaluation</b></font></font></div>
            </td>
        </tr>
                <?php  $_smarty_tpl->tpl_vars['actionPlan'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('GAPlan')->value->actionPlans; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['actionPlan']->key => $_smarty_tpl->tpl_vars['actionPlan']->value){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['actionPlan']->value['action'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['actionPlan']->value['eval'];?>
</td>
        </tr>
                <?php }} ?>

    </table><br>

            <?php }} ?>
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



