<?php /* Smarty version Smarty-3.0.8, created on 2012-07-11 07:12:27
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/studentInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11961511494ffd97db120972-54468630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb7bd54408e06d21f11cd961f815b88b5f1fc90' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/studentInfo.tpl',
      1 => 1342018562,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
    '7c037ddb11d8696651eadedfb2f53a8d492c7fce' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl',
      1 => 1309899837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11961511494ffd97db120972-54468630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_age')) include 'smarty/plugins/modifier.age.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>DSD DART: Student Information</title>
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



                        
<div style="margin:0 auto; width:900px">
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr>
            <td bgcolor="white">
                <div align="left">
                    <br>
                    <div align="left">
                        <a name='toppage'></a>
                        <font size="4" color="#cc0000">
                        Individual Student Profile - Active Account
                        </font><br>
                        <br>

                        <?php $_template = new Smarty_Internal_Template("comp/studentInfo.pulldown.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '11961511494ffd97db120972-54468630';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-11 07:12:27
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>


<select name='cs_popup_name_0' onChange='handleChange(this.value)'>
    <option value='#' selected>Jump to...</option>
    <option value='#toppage'>Top Of Page</option>
    <option value='#account'>Account Information</option>
    <option value='#demo'>Demographics</option>
    <option value='#profile'>Student Learning Profile</option>
    <option value='#levels'>Levels Information</option>
    <option value='#testing'>Testing Information</option>
</select><?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>

                    </div>
                    <div class="noteimportant">
                        This is the page that School Admins or District Admins would use to modify
                        this user's account information, or to make level individual level changes.
                        Multiple user level changes need to be handled through a different screen.
                        Note that most of the fields below &quot;Account Information&quot; can't be
                        directly modified by School Level Administrators. Only District Office users
                        should be able to enter that data, and some of is auto-calculated from other
                        screens. School Level Administrators can view this data, however.  										</div>
                    <table width="75%" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                            <td width="25%">
                                <div align="center">
                                    <img src="<?php echo $_smarty_tpl->getVariable('student')->value['schoolLogoURL'];?>
" alt="" border="0">
                                </div>
                            </td>
                            <td nowrap width="50%">
                                <div align="center">
                                    <font size="4"><?php echo $_smarty_tpl->getVariable('student')->value['name'];?>
 School: <?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
<br>
                                    <br>
                                    </font>
                                    <!--                                <b><font size="2">Last Access: </font></b>
                                                                    <font size="2">05/21/2006 at 3:21 p.m.</font>-->
                                    <br>
                                    <font size="2">
                                    <a href="index.php?cmd=history&student=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
">Account History</a>
                                    </font>
                                </div>
                            </td>
                            <td nowrap width="25%">
                                <div align="center">
                                    <img src="<?php echo $_smarty_tpl->getVariable('student')->value['profilePic'];?>
" alt="<?php echo $_smarty_tpl->getVariable('student')->value['lname'];?>
, <?php echo $_smarty_tpl->getVariable('student')->value['fname'];?>
 - SKK" height="105" width="95" border="0" />
                                    <br>
                                    <form enctype="multipart/form-data" name=upload method=post action=index.php?cmd=upload>
                                        <input type=hidden name=id value=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
 />
                                        <input size=10 type="file" name="pict_file" class="textfield" />
                                        <input type=submit name=activity value=Upload />
                                        <input type=submit name=activity value=Delete />
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a name='account'></a>
                    <font size="4"><?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
 - Account Information </font>
                    <br>

                    <?php $_template = new Smarty_Internal_Template("comp/studentInfo.pulldown.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '11961511494ffd97db120972-54468630';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-11 07:12:27
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>


<select name='cs_popup_name_0' onChange='handleChange(this.value)'>
    <option value='#' selected>Jump to...</option>
    <option value='#toppage'>Top Of Page</option>
    <option value='#account'>Account Information</option>
    <option value='#demo'>Demographics</option>
    <option value='#profile'>Student Learning Profile</option>
    <option value='#levels'>Levels Information</option>
    <option value='#testing'>Testing Information</option>
</select><?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>

                    <br>
                    <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>First Name: </b></font></td>
                            <td width="35%"><font size="2"><?php echo $_smarty_tpl->getVariable('student')->value['fname'];?>
</font></td>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Student ID: </b></font></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%">
                                <font size="2"><b>Middle Name: </b></font>
                            </td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['mname'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%">
                                <font size="2"><b>
                                    <a href="javascript:editValue('Username:','user','<?php echo $_smarty_tpl->getVariable('student')->value['user'];?>
');">Username: </a>
                                </b></font>
                            </td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['user'];?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Last Name: </b></font></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['lname'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Password: </b></font></td>
                            <td width="35%">*******</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">Mailing Address:</font></b></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['addr'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Alaska Student ID:</b></font></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['alaskaid'];?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">Village:</font></b></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['village'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>PowerSchool ID:</b></font></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['psid'];?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">State: </font></b></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['state'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Testing Grade Level: </b></font></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['grade'];?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">Zip Code: </font></b></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['zip'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">Birthdate:</font></b></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['bday'];?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">Phone: </font></b></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['phone'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">Chronological Age: </font></b></td>
                            <td width="35%"><?php echo smarty_modifier_age($_smarty_tpl->getVariable('student')->value['bday']);?>
</td>
                        </tr>
                        <tr>
                            <td nowrap bgcolor="#ccccff" width="15%"><b><font size="2">
                                    <a href="javascript:editValue('Email_Address:','email','<?php echo $_smarty_tpl->getVariable('student')->value['email'];?>
');">email: </a>
                                    </font></b>
                            </td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['email'];?>
</td>
                            <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Latest Enrollment: </b></font></td>
                            <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['latestenroll'];?>
</td>
                        </tr>
                    </table>
                    <div align="left">
                        <br>
                        <a name='demo'></a><font size="4"><?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
 - Demographics </font><font size="4"></font><br>
                        <?php $_template = new Smarty_Internal_Template("comp/studentInfo.pulldown.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '11961511494ffd97db120972-54468630';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-11 07:12:27
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>


<select name='cs_popup_name_0' onChange='handleChange(this.value)'>
    <option value='#' selected>Jump to...</option>
    <option value='#toppage'>Top Of Page</option>
    <option value='#account'>Account Information</option>
    <option value='#demo'>Demographics</option>
    <option value='#profile'>Student Learning Profile</option>
    <option value='#levels'>Levels Information</option>
    <option value='#testing'>Testing Information</option>
</select><?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
                        <br>
                        <table width="100%" border="0" cellspacing="2" cellpadding="0">
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Gender: </b></font></td>
                                <td width="35%"><font size="2"><?php echo $_smarty_tpl->getVariable('student')->value['gender'];?>
</font></td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Ethnicity: </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['ethnicity'];?>
</td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%">
                                    <font size="2"><b>
                                        <a href="javascript:editValue('NSLPEligible:','NSLPEligible','<?php echo $_smarty_tpl->getVariable('student')->value['NSLPEligible'];?>
');">NSLPEligible: </a>
                                    </b></font>
                                </td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['NSLPEligible'];?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Migrant:','migrant','<?php echo $_smarty_tpl->getVariable('student')->value['migrant'];?>
');">Migrant: </a>
                                    </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['migrant'];?>
</td>
                            </tr>
                        </table>
                        <br>
                        <a name='profile'></a><font size="4"><?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
 - Learning Profile </font><br>
                        <?php $_template = new Smarty_Internal_Template("comp/studentInfo.pulldown.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '11961511494ffd97db120972-54468630';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-11 07:12:27
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>


<select name='cs_popup_name_0' onChange='handleChange(this.value)'>
    <option value='#' selected>Jump to...</option>
    <option value='#toppage'>Top Of Page</option>
    <option value='#account'>Account Information</option>
    <option value='#demo'>Demographics</option>
    <option value='#profile'>Student Learning Profile</option>
    <option value='#levels'>Levels Information</option>
    <option value='#testing'>Testing Information</option>
</select><?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
                        <br>
                        <br>
                        <table width="100%" border="0" cellspacing="2" cellpadding="0">
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Attendance Y1: </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['attendance'];?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Last Updated: </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['lastUpdate'];?>
</td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>Suspensions Y1:</b></font></td>
                                <td width="35%"><?php echo (($tmp = @$_smarty_tpl->getVariable('student')->value['suspensions'])===null||$tmp==='' ? '' : $tmp);?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Activities_Eligible:','eligibility','<?php echo $_smarty_tpl->getVariable('student')->value['eligibility'];?>
');">Activities Eligible: </a>
                                    </b></font>
                                </td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['eligibility'];?>
</td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('LEP:','LEP','<?php echo $_smarty_tpl->getVariable('student')->value['LEP'];?>
');">LEP: </a>
                                    </b></font>
                                </td>
                                <td width="35%"><font size="2"><?php echo $_smarty_tpl->getVariable('student')->value['LEP'];?>
</font></td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('LEP_Status:','LEPStatus','<?php echo $_smarty_tpl->getVariable('student')->value['LEPStatus'];?>
');">LEP Status: </a>
                                    </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['LEPStatus'];?>
</td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Indian_Education:','nativeEd','<?php echo $_smarty_tpl->getVariable('student')->value['nativeEd'];?>
');">Indian Education: </a>
                                    </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['nativeEd'];?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Title_I:','titleI','<?php echo $_smarty_tpl->getVariable('student')->value['titleI'];?>
');">Title I: </a>
                                    </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['titleI'];?>
</td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Section_504:','sec504','<?php echo $_smarty_tpl->getVariable('student')->value['sec504'];?>
');">Section 504: </a>
                                    </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['sec504'];?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('SpEd_IEP:','Sp_ED_IEP','<?php echo $_smarty_tpl->getVariable('student')->value['SpED_IEP'];?>
');">SpED_IEP: </a>
                                    </b></font></td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['SpED_IEP'];?>
</td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Related_Services:','relatedServices','<?php echo $_smarty_tpl->getVariable('student')->value['relatedServices'];?>
');">Related Services: </a>
                                    </b></font>
                                </td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['relatedServices'];?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>State &amp; District Testing: </b></font></td>
                                <td width="35%"><select name="selectName" size="1">
                                        <option value="one">No Testing Accommodations</option>
                                        <option value="two">Accommodations</option>
                                        <option value="three">Modified HSGQE / EOLs</option>
                                        <option value="four">Alternate Assessment</option>
                                        <option value="five">No Statewide / District Testing</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('Behavior_Plan:','behaviorPlan','<?php echo $_smarty_tpl->getVariable('student')->value['behaviorPlan'];?>
');">Behavior Plan: </a>
                                    </b></font>
                                </td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['behaviorPlan'];?>
</td>
                                <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                        <a href="javascript:editValue('G/T_Plan:','GTPlan','<?php echo $_smarty_tpl->getVariable('student')->value['GTPlan'];?>
');">G/T Plan: </a>
                                    </b></font>
                                </td>
                                <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['GTPlan'];?>
</td>
                            </tr>
                        </table>
                        <br>
                        <a name='levels'></a><font size="4"><?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
 - Levels Information<br>
                        </font>
                        <?php $_template = new Smarty_Internal_Template("comp/studentInfo.pulldown.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '11961511494ffd97db120972-54468630';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.8, created on 2012-07-11 07:12:27
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>


<select name='cs_popup_name_0' onChange='handleChange(this.value)'>
    <option value='#' selected>Jump to...</option>
    <option value='#toppage'>Top Of Page</option>
    <option value='#account'>Account Information</option>
    <option value='#demo'>Demographics</option>
    <option value='#profile'>Student Learning Profile</option>
    <option value='#levels'>Levels Information</option>
    <option value='#testing'>Testing Information</option>
</select><?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/dartdem2/public_html/lib/../smarty/templates/comp/studentInfo.pulldown.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
                        <br>
                        <br>
                    </div>
                    <table width="100%" border="1">
                        <tbody>
                            <tr>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Content Area</b></font></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Level</b></font></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Overall</b></font></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>QPI</b></font></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Entered</b></font></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <b>TIL</b></div>
                                </td>
                                <td nowrap bgcolor="#ccccff">
                                    <div align="center">
                                        <font size="2"><b>Status</b></font></div>
                                </td>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['studentScore'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('student')->value['studentScores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['studentScore']->key => $_smarty_tpl->tpl_vars['studentScore']->value){
?>
                                <tr>
                                    <td nowrap><font size="2"><?php echo $_smarty_tpl->tpl_vars['studentScore']->value['sname'];?>
</font></td>
                                    <td nowrap>
                                        <div align="center">
                                            <font size="2"><?php echo $_smarty_tpl->tpl_vars['studentScore']->value['subject'];?>
 <?php echo $_smarty_tpl->tpl_vars['studentScore']->value['level'];?>
</font></div>
                                    </td>
                                    <td nowrap>
                                        <div align="center">
                                            <?php echo $_smarty_tpl->tpl_vars['studentScore']->value['score'];?>

                                        </div>
                                    </td>
                                    <td nowrap>
                                        <div align="center">
                                            <font size="2"><?php echo $_smarty_tpl->tpl_vars['studentScore']->value['qpi'];?>
 </font>
                                        </div>
                                    </td>
                                    <td nowrap>
                                        <div align="center">
                                            <?php echo $_smarty_tpl->tpl_vars['studentScore']->value['entered'];?>

                                        </div>
                                    </td>
                                    <td nowrap>
                                        <div align="center">
                                            <?php echo $_smarty_tpl->tpl_vars['studentScore']->value['til'];?>

                                        </div>
                                    </td>
                                    <td nowrap>
                                        <div align="center">

                                            <form action="#" method="post" name="cs_form_name_5">
                                                <select name="cs_popup_name_5" onchange="CSURLPopupShow(/*CMP*/'cs_form_name_5', /*CMP*/'cs_popup_name_5', '_top');">
                                                    <option value="#" selected>Active</option>
                                                    <option value="http://www.adobe.com">Exit - Next Level</option>
                                                    <option value="http://www.adobe.com">Exit - Adjustment</option>
                                                </select>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td bgcolor="white">
            </td>
        </tr>
        <tr>
            <td bgcolor="white">
                <div align="center">
                    <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                            <td colspan="3"><br>
                                <a name="testing"></a><font size="4"><?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
 - Testing Summary - </font><font size="2"><a href="(EmptyReference!)">Detailed Testing Data</a></font><font size="4"> </font><br>
                                <br>
                                <br>
                                <table width="100%" border="0" cellspacing="2" cellpadding="0">
                                    <tr>
                                        <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b
                                                <a href="javascript:editValue('HSGQE_Reading:','HSGQEReading','<?php echo $_smarty_tpl->getVariable('student')->value['HSGQEReading'];?>
');">Exit Exam Reading: </a>
                                            </b></font></td>
                                        <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['HSGQEReading'];?>
</td>
                                        <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                                <a href="javascript:editValue('Latest_SRI:','SRI','<?php echo $_smarty_tpl->getVariable('student')->value['SRI'];?>
');">SRI: </a>
                                            </b></font></td>
                                        <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['SRI'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                                <a href="javascript:editValue('HSGQE_Writing:','HSGQEWriting','<?php echo $_smarty_tpl->getVariable('student')->value['HSGQEWriting'];?>
');">Exit Exam Writing: </a>
                                            </b></font></td>
                                        <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['HSGQEWriting'];?>
</td>
                                        <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                                <a href="javascript:editValue('STAR_Math:','STAR','<?php echo $_smarty_tpl->getVariable('student')->value['STAR'];?>
');">STAR Math: </a>
                                            </b></font></td>
                                        <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['STAR'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                                <a href="javascript:editValue('HSGQE_Math:','HSGQEMath','<?php echo $_smarty_tpl->getVariable('student')->value['HSGQEMath'];?>
');">Exit Exam Math: </a>
                                            </b></font></td>
                                        <td width="35%"><font size="2"><?php echo $_smarty_tpl->getVariable('student')->value['HSGQEMath'];?>
</font></td>
                                        <td nowrap bgcolor="#ccccff" width="15%"><font size="2"><b>
                                                <a href="javascript:editValue('SAT_ACT_ASVAB:','scores','<?php echo $_smarty_tpl->getVariable('student')->value['scores'];?>
');">SAT_ACT_ASVAB: </a>
                                            </b></font></td>
                                        <td width="35%"><?php echo $_smarty_tpl->getVariable('student')->value['scores'];?>
</td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
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
            
<script type="text/javascript" src="js/studentInfo.js"></script>

        </body>


    </html>



