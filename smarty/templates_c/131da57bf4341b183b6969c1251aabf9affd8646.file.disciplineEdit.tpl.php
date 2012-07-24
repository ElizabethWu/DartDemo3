<?php /* Smarty version Smarty-3.0.8, created on 2012-07-02 20:02:31
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/disciplineEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13899278654e27e30daba221-03842985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '131da57bf4341b183b6969c1251aabf9affd8646' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/disciplineEdit.tpl',
      1 => 1311234673,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13899278654e27e30daba221-03842985',
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



                        
<div style="width:1024px; margin: 0 auto">
	Edit Discipline: <?php echo $_smarty_tpl->getVariable('dispID')->value;?>

    <br />
    <a href="?cmd=disciplineList&studentid=<?php echo $_smarty_tpl->getVariable('studentid')->value;?>
">List Discipline</a>
    <table border="0" cellpadding="2" cellspacing="2" width="100%">
        <tbody>
            <tr>
                <td align="left">
                    <br />
                    <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="4">Discipline Log Entry </font>
                    <font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">- <?php echo $_smarty_tpl->getVariable('studentname')->value;?>
</font>
                    <br />
                    <h3><?php echo (($tmp = @$_smarty_tpl->getVariable('msg')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</h3>
                    <div align="right">
                        <table border="0" cellpadding="0" cellspacing="2">
                            <tbody>
                                <tr>
                                    <td nowrap="nowrap" align="right">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="4">"Just the facts..."</font>
                                        <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <a title="Dragnet Series - Wikipedia" href="http://en.wikipedia.org/wiki/Dragnet_%28drama%29" target="_blank">.</a>
                                        </font>
                                        <br />
                                        <p>
                                            <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
												Sergeant Joe Friday, 
                                            <a title="Dragnet Series - Wikipedia" href="http://en.wikipedia.org/wiki/Dragnet_%28drama%29" target="_blank">Dragnet</a>
                                            <br />
                                            <br />
                                            <b><font color="#ff0033">Note:</font></b>
												Some required information is only visible for Special Education students
                                            </font>
                                        </p>
                                    </td>
                                    <td align="center" nowrap="nowrap" valign="top">
                                        <div align="right">
                                            <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                                            <a href="http://en.wikipedia.org/wiki/Dragnet_%28drama%29">
                                                <img src="https://dart.bssd.org/images/facts_sm.gif" alt="" align="right" border="0" height="114" width="91" />
                                            </a>
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <blockquote>
                        <div align="left">
                            <div class="noteimportant">
                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
								All discipline events are entered here.  This includes both relatively minor 
								infractions, as well as more serious ones. Although some of this data is used 
								for state and federal reporting, the majority of it is <b>not used </b>
								outside the district, but is important for us so that students get the 
								assistance they need to succeed.  Please be as accurate and non-judgemental as 
								possible.  Focus  on the facts in your responses. 
                                </font>
                            </div>
                        </div>
                    </blockquote>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        <form action="?cmd=disciplineEdit&disciplineid=<?php echo $_smarty_tpl->getVariable('dispID')->value;?>
" method="post">
                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                <tbody>
                                    <tr>
                                        <td colspan="4" align="center">
                                            <input type=hidden name=disciplineid value="<?php echo $_smarty_tpl->getVariable('dispID')->value;?>
">
                                            <font color="#000000" face="Arial,Helvetica">
                                            <b>
                                                <br>
                                            </b>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" bgcolor="#ccffff">
                                            <div align="right">
                                                <b>
                                                    <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Enter Discipline Log Data</font>
                                                </b>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap" width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Incident Date:</b>
                                            </font>
                                        </td>
                                        <td width="197">
                                            <div align="left">
                                                <input name="i_incidentdate" value="<?php echo $_smarty_tpl->getVariable('incidentdate')->value;?>
" size="20" type="text">
                                            </div>
                                        </td>
                                        <td width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b><?php echo (($tmp = @$_smarty_tpl->getVariable('disabilityLabel')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</b>
                                            </font>
                                        </td>
                                        <td nowrap="nowrap" width="15%" align="left">
                                            <a href="%28EmptyReference%21%29">
                                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><?php echo (($tmp = @$_smarty_tpl->getVariable('disabilityCode')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</font>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Current Log Entries:</b>
                                            </font>
                                        </td>
                                        <td width="197">
                                            <font color="#cc0000" size="2">
                                            <b> </b>
                                            </font>
                                            <a href="<?php echo $_smarty_tpl->getVariable('logentriesLink')->value;?>
"><?php echo $_smarty_tpl->getVariable('logentries')->value;?>
</a>
                                        </td>
                                        <td nowrap="nowrap" width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b><?php echo (($tmp = @$_smarty_tpl->getVariable('daysAvailableLabel')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</b>
                                            </font>
                                        </td>
                                        <td width="15%">
                                            <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><?php echo (($tmp = @$_smarty_tpl->getVariable('daysAvailableNote')->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>ISS Days:</b>
                                            </font>
                                        </td>
                                        <td width="197">
                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><?php echo $_smarty_tpl->getVariable('issDays')->value;?>
 days <u>before</u> today</font>
                                </td>
                                <td nowrap="nowrap" width="15%">
                                    <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                    <b>Supension Days:</b>
                                    </font>
                                </td>
                                <td width="15%" align="left">
                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><?php echo $_smarty_tpl->getVariable('suspensionDays')->value;?>
 days <u>before</u> today</font>
                                </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap" width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Non-Weapon Incident:</b>
                                        </font>
                                    </td>
                                    <td width="197">
                                        <?php echo smarty_function_html_options(array('name'=>"i_nonweapon",'id'=>"nonweapon",'options'=>$_smarty_tpl->getVariable('nonweaponMenu')->value,'selected'=>$_smarty_tpl->getVariable('nonweapon')->value),$_smarty_tpl);?>

                                    </td>
                                    <td nowrap="nowrap" width="15%">
                                        <div align="left">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Weapon Incident:</b>
                                            </font>
                                        </div>
                                    </td>
                                    <td width="15%">
                                        <?php echo smarty_function_html_options(array('name'=>"i_weapon",'id'=>"weapon",'options'=>$_smarty_tpl->getVariable('weaponMenu')->value,'selected'=>$_smarty_tpl->getVariable('weapon')->value),$_smarty_tpl);?>

                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap" width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Number of Victims:</b>
                                        </font>
                                    </td>
                                    <td width="197">
                                        <?php echo smarty_function_html_options(array('name'=>"i_victimno",'id'=>"victimno",'options'=>$_smarty_tpl->getVariable('victimnoMenu')->value,'selected'=>$_smarty_tpl->getVariable('victimno')->value),$_smarty_tpl);?>

                                    </td>
                                    <td width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Victim Type:</b>
                                        </font>
                                    </td>
                                    <td width="15%">
                                        <?php echo smarty_function_html_options(array('name'=>"i_victimtype",'id'=>"victimtype",'options'=>$_smarty_tpl->getVariable('victimMenu')->value,'selected'=>$_smarty_tpl->getVariable('victimtype')->value),$_smarty_tpl);?>

                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap" width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Police Involved?:</b>
                                        </font>
                                    </td>
                                    <td width="197">
                                        <?php echo smarty_function_html_options(array('name'=>"i_police",'id'=>"police",'options'=>$_smarty_tpl->getVariable('policeMenu')->value,'selected'=>$_smarty_tpl->getVariable('police')->value),$_smarty_tpl);?>

                                    </td>
                                    <td bgcolor="#33cc33" nowrap="nowrap" width="15%">
                                        <div align="center">
                                            <font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Start Date</b>
                                            </font>
                                        </div>
                                    </td>
                                    <td rowspan="4" nowrap="nowrap">
                                        <div align="left">
                                            <img src="<?php echo $_smarty_tpl->getVariable('picture')->value;?>
" alt="" align="left" border="0" height="105" width="95">
                                            <br>
                                            <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Guardian Contact</b>
                                            <br />
                                            <?php echo $_smarty_tpl->getVariable('guardian')->value;?>

                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Consequence:</b>
                                        </font>
                                    </td>
                                    <td width="197">
                                        <?php echo smarty_function_html_options(array('name'=>"i_consequence",'id'=>"consequence",'options'=>$_smarty_tpl->getVariable('consequenceMenu')->value,'selected'=>$_smarty_tpl->getVariable('consequence')->value),$_smarty_tpl);?>

                                    </td>
                                    <td bgcolor="#33cc33" width="15%">
                                        <input name="i_startdate" value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
" size="20" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap" width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Length in School Days:</b>
                                        </font>
                                    </td>
                                    <td width="197">
                                        <?php echo smarty_function_html_options(array('name'=>"i_lengthdays",'id'=>"lengthdays",'options'=>$_smarty_tpl->getVariable('lengthMenu')->value,'selected'=>$_smarty_tpl->getVariable('lengthdays')->value),$_smarty_tpl);?>

                                    </td>
                                    <td bgcolor="red" width="15%">
                                        <div align="center">
                                            <font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>End Date</b>
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Status:</b>
                                        </font>
                                    </td>
                                    <td width="197">
                                        <?php echo smarty_function_html_options(array('name'=>"i_dstatus",'id'=>"dstatus",'options'=>$_smarty_tpl->getVariable('statusMenu')->value,'selected'=>$_smarty_tpl->getVariable('dstatus')->value),$_smarty_tpl);?>

                                        <br />
                                    </td>
                                    <td bgcolor="red" width="15%">
                                        <input name="i_enddate" value="<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" size="20" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                    </td>
                                    <td valign="top">
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                        <b>Comments / Notes:</b>
                                        </font>
                                    </td>
                                    <td rowspan="4" colspan="2" valign="top">
                                        <textarea name="i_notes" rows="6" cols="50"><?php echo $_smarty_tpl->getVariable('notes')->value;?>
</textarea>
                                    </td>
                                    <td rowspan="4">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        <div align="center">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <!-- SpedEd -->
                                <?php if ($_smarty_tpl->getVariable('spedEd')->value){?>
                                    <tr>
                                        <td colspan="4" bgcolor="#ccffff">
                                            <div align="right">
                                                <b>
                                                    <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Required Special Education Data </font>
                                                </b>
                                                <b> </b>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Educational Services:</b>
                                            </font>
                                            <font color="#000000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <strong>
                                                <br>
                                            </strong>
                                            </font>
                                        </td>
                                        <td valign="top" width="197">
                                            <?php echo smarty_function_html_options(array('name'=>"i_eduservice",'id'=>"eduservice",'options'=>$_smarty_tpl->getVariable('serviceMenu')->value,'selected'=>$_smarty_tpl->getVariable('eduservice')->value),$_smarty_tpl);?>

                                        </td>
                                        <td width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>IEP Team Meet?:</b>
                                            </font>
                                        </td>
                                        <td width="15%">
                                            <?php echo smarty_function_html_options(array('name'=>"i_iepmeet",'id'=>"iepmeet",'options'=>$_smarty_tpl->getVariable('iepMenu')->value,'selected'=>$_smarty_tpl->getVariable('iepmeet')->value),$_smarty_tpl);?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Related to Disability?:</b>
                                            </font>
                                            <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <br>
                                            </font>
                                        </td>
                                        <td valign="top" width="197">
                                            <?php echo smarty_function_html_options(array('name'=>"i_relateddisability",'id'=>"relateddisability",'options'=>$_smarty_tpl->getVariable('disabilityMenu')->value,'selected'=>$_smarty_tpl->getVariable('relateddisability')->value),$_smarty_tpl);?>

                                        </td>
                                        <td width="15%">
                                            <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>Date of Meeting:</b>
                                            </font>
                                        </td>
                                        <td width="15%">
                                            <input name="i_meetdate" value="<?php echo $_smarty_tpl->getVariable('meetdate')->value;?>
" size="20" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap" width="15%">
                                            <div align="center">
                                                <font color="#330066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                                <b>Special Ed Questions?</b>
                                                </font>
                                                <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                                <b>
                                                    <br>
                                                </b>
                                                </font>
                                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                                <br>
                                                <a href="mailto:rconcilus@bssd.org">
                                                    <b>Contact Rebecca!</b>
                                                </a>
                                                <br>
                                                <br>
                                                </font>
                                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="1">
                                                <i>

									She'd rather help you now<br>


									 than testify in court!!!</i>
                                                </font>
                                            </div>
                                        </td>
                                        <td rowspan="2" colspan="3">
                                            <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                            <b>
                                                <font color="red">Important Note:</font>
                                            </b> A "<i>
                                                <b>
                                                    <a title="Alaska EED Special Education Handbook" href="http://www.eed.state.ak.us/tls/SPED/Handbook05/part4.html#sec12" target="_blank">Manifestation Determination</a>
                                                </b>
                                            </i>" must be held for any student that is being suspended for 7-10 consecutive days, or if the the proposed suspension goes over 10 days of cumulative suspension time for the current school year.<br>
                                            <br>

								In addition, if the the incident is found by the IEP team to be related to the student's disability, the student <i>
                                                <b>
                                                    <a title="Alaska EED Special Education Handbook" href="http://www.eed.state.ak.us/tls/SPED/Handbook05/part4.html#sec12" target="_blank">can't be suspended</a>
                                                </b>
                                            </i> for that incident, must conduct a "Functional Behavior Analysis", and create or review a behavior plan.<br>
                                            </font>
                                            <div align="left">
                                                <ul>
                                                    <li type="disc">
                                                        <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
                                                        <a title="Alaska EED Special Education Handbook" href="http://www.eed.state.ak.us/tls/SPED/Handbook05/part4.html#sec12" target="_blank">Alaska EED Special Education Regulations - Student Discipline</a>
                                                        </font>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap" width="15%">
                                        </td>
                                    </tr>
                                <?php }?>
                                <!-- SpedEd -->
                                <tr>
                                    <td width="15%">
                                    </td>
                                    <td colspan="3">
                                        <div align="center">
                                            <br>
                                            <input name="gobutton" value="Save Log Entry" type="submit">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
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



