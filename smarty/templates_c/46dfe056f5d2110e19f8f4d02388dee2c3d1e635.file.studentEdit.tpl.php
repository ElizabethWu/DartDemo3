<?php /* Smarty version Smarty-3.0.8, created on 2012-07-03 05:49:42
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/studentEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6604786894ff2f8760008a8-37899094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46dfe056f5d2110e19f8f4d02388dee2c3d1e635' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/studentEdit.tpl',
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
  'nocache_hash' => '6604786894ff2f8760008a8-37899094',
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
        <title>DSD DART: Edit Student Information</title>
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



                        
<div style="margin:0 auto; width:900px;">
    <form name=toggle method=post action=index.php?cmd=saveAdvEditStudentInfo>
        <input type=hidden name=id value=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
>
        <input type=hidden name=loc>
        <table border="0" cellpadding="0" cellspacing="2" width="100%">
            <tr>
                <td>
                    <div align="left">
                        <br />
                        <font color="#cc0000" size="4" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                        Add/Edit Student </font><font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">- <?php echo (($_smarty_tpl->getVariable('student')->value['fname']).(' ')).($_smarty_tpl->getVariable('student')->value['lname']);?>
 
                        </font>
                        <br />
                        <a id="page_help" href="#" onclick="" style="font-size: 8pt; color: #006FEB">
                            <img alt="help" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/help_16.png" style="vertical-align: middle"/> About this page
                        </a>
                    </div>

                    <blockquote>

                        <div id="page_modal_help" style="display:none">
                            <font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">This screen adds a new student to DART.  You begin here for students who have not ever been in DART before.  If you are looking for a former BSSD student, always 
                            <a title="Search DART" href="index.php?cmd=search"><b>search</b></a> for them first in our database.<i> </i>If a student exists in the system, just activate them, and assign them to the correct school. Field names in red are required, and those in black are optional.</font>
                        </div>

                    </blockquote>
                </td>
            </tr>
            <tr>

                <td>
                    <div align="center">
                        <table border="0" cellpadding="2" cellspacing="2" >
                            <tbody>
                                <tr>
                                    <td colspan="6" bgcolor="#ccffff">
                                        <div align="right">
                                            <b><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Account Basics</font></b></div>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" valign="bottom"><div class="notewarning"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i><b>Note:</b>  Student names in DART must match either birth certificate, or legal document showing change of name. Unofficial adoption, divorce, or temporary guardianship arrangements do not change the legal name of a student. Do <u>not</u> use nicknames.</i></font></div></td>
                                </tr>
                                <tr>

                                    <td valign="bottom" nowrap="nowrap" width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Last Name:</b></font></td>
                                    <td valign="bottom" width="182">
                                        <input type=hidden name=new_lname value=empty><input type=hidden name=old_lname value='<?php echo $_smarty_tpl->getVariable('student')->value['lname'];?>
'>
                                        <input type=text name=lname value='<?php echo $_smarty_tpl->getVariable('student')->value['lname'];?>
' onChange='changeValue("lname", this.value)' size=20>
                                    </td>
                                    <td colspan="4">
                                        <div align="left">
                                        </div>
                                        <?php if ($_smarty_tpl->getVariable('student')->value['status']=="Active"){?>
                                            <font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                                            <b>Student Active: </b>
                                            </font>
                                            <a href='' onClick='popUp("./index.php?cmd=StudentExit&id=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
", 800, 600);return(false);'>
                                                Make Inactive
                                            </a>
                                        <?php }else{ ?>
                                            <font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                                            <b>Student Inactive: </b>
                                            </font>
                                            <a href="" onClick="popUp('./index.php?cmd=StudentEnter&id=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
', 800, 600);return(false);">
                                                Make Active</a>
                                            <?php }?>
					 | <a href='' onClick='popUp("./index.php?cmd=StudentShowDates&id=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
", 400, 400);return(false);' >Show Dates</a>
                                    </td>
                                </tr>
                                <tr>

                                    <td nowrap="nowrap" width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>First Name:</b></font></td>
                                    <td width="182">
                                        <input type=hidden name=new_fname value=empty /><input type=hidden name=old_fname value='<?php echo $_smarty_tpl->getVariable('student')->value['fname'];?>
' />
                                        <input type=text name=fname value='<?php echo $_smarty_tpl->getVariable('student')->value['fname'];?>
' onChange='changeValue("fname", this.value)' size=20 />

                                    </td>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Middle Name:</b></font></td>
                                    <td nowrap width="15%">
                                        <input type=hidden name=new_mname value=empty><input type=hidden name=old_mname value='<?php echo $_smarty_tpl->getVariable('student')->value['mname'];?>
'>
                                        <input type=text name=mname value='<?php echo $_smarty_tpl->getVariable('student')->value['mname'];?>
' onChange='changeValue("mname", this.value)' size=20>
                                    </td>
                                    <td nowrap width="45"></td>
                                    <td nowrap width="15%"></td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap" width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Mailing Address:</b></font></td>
                                    <td width="182">
                                        <input type=hidden name=new_maddr value=empty><input type=hidden name=old_maddr value='<?php echo $_smarty_tpl->getVariable('student')->value['maddr'];?>
'>
                                        <input type=text name=mmadr value='<?php echo $_smarty_tpl->getVariable('student')->value['maddr'];?>
' onChange='changeValue("maddr", this.value)' size=20>
                                    </td>
                                    <td width="15%"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Physical Address:</b></font></td>
                                    <td width="15%">
                                        <input type=hidden name=new_addr value=empty><input type=hidden name=old_addr value='<?php echo $_smarty_tpl->getVariable('student')->value['addr'];?>
'>
                                        <input type=text name=addr value='<?php echo $_smarty_tpl->getVariable('student')->value['addr'];?>
' onChange='changeValue("addr", this.value)' size=20>                                    
                                    </td>
                                    <td colspan="2" nowrap bgcolor="#ffcccc"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i>&lt;== If Different</i></font></td>
                                </tr>
                                <tr>

                                    <td nowrap="nowrap" width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Village / Town:</b></font></td>
                                    <td width="182">
                                        <input type=hidden name=new_village value=empty><input type=hidden name=old_village value='<?php echo $_smarty_tpl->getVariable('student')->value['village'];?>
'>
                                        <input type=text name=village value='<?php echo $_smarty_tpl->getVariable('student')->value['village'];?>
' onChange='changeValue("village", this.value)' size=20>
                                    </td>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Zip Code:</b></font></td>
                                    <td width="15%">
                                        <input type=hidden name=new_zip value=empty><input type=hidden name=old_zip value='<?php echo $_smarty_tpl->getVariable('student')->value['zip'];?>
'>
                                        <input type=text name=zip value='<?php echo $_smarty_tpl->getVariable('student')->value['zip'];?>
' onChange='changeValue("zip", this.value)' size=20>

                                    </td>
                                    <td nowrap width="45"></td>
                                    <td nowrap width="15%"></td>
                                </tr>
                                <tr>

                                    <td nowrap="nowrap" width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Email Address:</b></font></td>
                                    <td width="250">
                                        <input type=hidden name=new_email value=empty><input type=hidden name=old_email value='<?php echo $_smarty_tpl->getVariable('student')->value['email'];?>
'>
                                        <input type=text name=email value='<?php echo $_smarty_tpl->getVariable('student')->value['email'];?>
' onChange='changeValue("email", this.value)' size=20>

                                        <font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i>&lt;== Only District</i></font></td>

                                    <td nowrap width="45"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Phone:</b></font></td>
                                    <td nowrap width="15%">
                                        <input type=hidden name=new_phone value=empty><input type=hidden name=old_phone value='<?php echo $_smarty_tpl->getVariable('student')->value['phone'];?>
'>
                                        <input type=text name=phone value='<?php echo $_smarty_tpl->getVariable('student')->value['phone'];?>
' onChange='changeValue("phone", this.value)' size=20>

                                    </td>
                                </tr>

                                <tr>
                                    <td nowrap="nowrap" width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Username:</b></font></td>
                                    <td>
                                        <input type=hidden name=new_user value=empty><input type=hidden name=old_user value='<?php echo $_smarty_tpl->getVariable('student')->value['user'];?>
'>
                                        <input type=text name=user value='<?php echo $_smarty_tpl->getVariable('student')->value['user'];?>
' onChange='changeValue("user", this.value)' size=20>           
                                    </td>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Password:</b></font></td>
                                    <td width="15%">
                                        ***********
                                    </td>
                                    <td nowrap width="45"></td>
                                    <td nowrap width="15%"></td>
                                </tr>

                                <tr>
                                    <td colspan="6" nowrap="nowrap" bgcolor="#ccffff">
                                        <div align="right">
                                            <b><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Student Data Required</font></b></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>BSSD School Site:</b></font></td>
                                    <td width="182">
                                        <?php echo $_smarty_tpl->getVariable('student')->value['site'];?>

                                    </td>
                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Status:</b></font></td>
                                    <td width="15%">
                                        <input type=hidden name=new_status value=empty><input type=hidden name=old_status value='<?php echo $_smarty_tpl->getVariable('student')->value['status'];?>
'>
                                        <select name=status onChange='changeValue("status", this.value)' >
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('statusOptions')->value,'selected'=>$_smarty_tpl->getVariable('student')->value['status']),$_smarty_tpl);?>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Date of Birth:</b></font></td>
                                    <td nowrap width="182">
                                        <input type=hidden name=new_bday value=empty><input type=hidden name=old_bday value='<?php echo $_smarty_tpl->getVariable('student')->value['bday'];?>
'>
                                        <input type=text name=bday value='<?php echo $_smarty_tpl->getVariable('student')->value['bday'];?>
' onChange='changeValue("bday", this.value)' size=20>  

                                        <font size="1" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">YYYY-MM-DD</font></td>

                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Gender:</b></font></td>
                                    <td width="15%">
                                        <div align="left">
                                            <input type=hidden name=new_gender value=empty><input type=hidden name=old_gender value='<?php echo $_smarty_tpl->getVariable('student')->value['gender'];?>
'>
                                            <select name=gender onChange='changeValue("gender", this.value)' >
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('genderOptions')->value,'selected'=>$_smarty_tpl->getVariable('student')->value['gender']),$_smarty_tpl);?>

                                            </select>
                                        </div>
                                    </td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Alaska Student ID:</b></font></td>
                                    <td width="182">
                                        <input type=hidden name=new_alaskaid value=empty><input type=hidden name=old_alaskaid value='<?php echo $_smarty_tpl->getVariable('student')->value['alaskaid'];?>
'>
                                        <input type=text name=alaskaid value='<?php echo $_smarty_tpl->getVariable('student')->value['alaskaid'];?>
' onChange='changeValue("alaskaid", this.value)' size=20> 
                                    </td>

                                    <td nowrap width="15%">
                                        <div align="left">
                                            <font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>PowerSchool ID:</b></font></div>
                                    </td>
                                    <td width="15%">
                                        <input type=hidden name=new_psid value=empty><input type=hidden name=old_psid value='<?php echo $_smarty_tpl->getVariable('student')->value['psid'];?>
'>
                                        <input type=text name=psid value='<?php echo $_smarty_tpl->getVariable('student')->value['psid'];?>
' onChange='changeValue("psid", this.value)' size=20> 
                                    </td>
                                    <td colspan="2" bgcolor="#ffcccc">
                                        <div align="left">
                                            <font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i>&lt;== If Applicable</i></font></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap width="15%">
                                        <font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                                        <b>Testing Level:</b>
                                        </font>
                                    </td>
                                    <td width="182">
                                        <input type=hidden name=new_grade value=empty><input type=hidden name=old_grade value='<?php echo $_smarty_tpl->getVariable('student')->value['grade'];?>
'>
                                        <select name=grade onChange='changeValue("grade", this.value)' >
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('testinglevelOptions')->value,'selected'=>$_smarty_tpl->getVariable('student')->value['grade']),$_smarty_tpl);?>

                                        </select>
                                    </td>
                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Special Education?:</b></font></td>
                                    <td width="15%">
                                        <?php echo $_smarty_tpl->getVariable('student')->value['sped'];?>

                                    </td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Ethnicity:</b></font></td>
                                    <td width="182">
                                        <input type=hidden name=new_ethnicity value=empty><input type=hidden name=old_ethnicity value='<?php echo $_smarty_tpl->getVariable('student')->value['ethnicity'];?>
'>
                                        <select name=ethnicity onChange='changeValue("ethnicity", this.value)' >
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('ethnicityOptions')->value,'selected'=>$_smarty_tpl->getVariable('student')->value['ethnicity']),$_smarty_tpl);?>

                                        </select>
                                    </td>
                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"></font></td>
                                    <td width="15%">
                                        &nbsp;
                                    </td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td colspan="6" bgcolor="#ccffff">
                                        <div align="right">

                                            <b><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Guardian &amp; Family Information</font></b></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Siblings at School?</b></font></td>
                                    <td valign="top" width="182">
                                        <input type=hidden name=new_siblings value=empty><input type=hidden name=old_siblings value='<?php echo $_smarty_tpl->getVariable('student')->value['siblings'];?>
'>
                                        <select name=siblings onChange='changeValue("siblings", this.value)' >
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('siblingOptions')->value,'selected'=>$_smarty_tpl->getVariable('student')->value['siblings']),$_smarty_tpl);?>

                                        </select>
                                    </td>

                                    <td colspan="4" bgcolor="#ffcccc"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i>&lt;== Number of other students <u>in this school</u> this student lives with</i></font></td>
                                </tr>
                                <tr>
                                    <td width="15%"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Names of Others:</b></font></td>
                                    <td colspan="3" valign="top">
                                        <input type=hidden name=new_siblingsnames value=empty><input type=hidden name=old_siblingsnames value='<?php echo $_smarty_tpl->getVariable('student')->value['siblingsnames'];?>
'>
                                        <input type=text name=siblingsnames value='<?php echo $_smarty_tpl->getVariable('student')->value['siblingsnames'];?>
' onChange='changeValue("siblingsnames", this.value)' size=75>

                                    </td>
                                    <td colspan="2" bgcolor="#ffcccc"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i>&lt;== If Applicable</i></font></td>

                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <div class="notewarning">
                                            <i><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                                                <b>Note: </b>The full names of the parent(s) or guardian(s) must be recorded for each
                                                student, unless student is over 18 years old. If the student is living with a relative
                                                or in another home, the names and addresses of the responsible adult with whom the student
                                                is living must be recorded here.
                                                </font>
                                            </i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap width="15%">
                                        <font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">
                                        <b>Parent or Guardian:</b>
                                        </font>
                                    </td>
                                    <td valign="top" width="182">
                                        <input type=hidden name=new_parent value=empty><input type=hidden name=old_parent value='<?php echo $_smarty_tpl->getVariable('student')->value['parent'];?>
'>
                                        <input type=text name=parent value='<?php echo $_smarty_tpl->getVariable('student')->value['parent'];?>
' onChange='changeValue("parent", this.value)' size=20>                                     
                                    </td>

                                    <td nowrap>
                                        <div align="left">
                                            <font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Resides With Student:</b></font></div>
                                    </td>
                                    <td valign="top">
                                        <input type=hidden name=new_parentwstudent value=empty><input type=hidden name=old_parentwstudent value='<?php echo $_smarty_tpl->getVariable('student')->value['parentwstudent'];?>
'>
                                        <select name=siblings onChange='changeValue("siblings", this.value)' >
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('parentwstudentOptions')->value,'selected'=>$_smarty_tpl->getVariable('student')->value['parentwstudent']),$_smarty_tpl);?>

                                        </select>
                                    </td>
                                    <td width="45"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Phone:</b></font></td>
                                    <td width="15%">
                                        <input type=hidden name=new_parentphone value=empty><input type=hidden name=old_parentphone value='<?php echo $_smarty_tpl->getVariable('student')->value['parentphone'];?>
'>
                                        <input type=text name=parentphone value='<?php echo $_smarty_tpl->getVariable('student')->value['parentphone'];?>
' onChange='changeValue("parentphone", this.value)' size=20> 
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%">
                                        <div align="left">

                                            <font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Mailing Address:</b></font></div>
                                    </td>
                                    <td valign="top" width="182">
                                        <input type=hidden name=new_parentmaddr value=empty><input type=hidden name=old_parentmaddr value='<?php echo $_smarty_tpl->getVariable('student')->value['parentmaddr'];?>
'>
                                        <input type=text name=parentmaddr value='<?php echo $_smarty_tpl->getVariable('student')->value['parentmaddr'];?>
' onChange='changeValue("parentmaddr", this.value)' size=20> 
                                    </td>
                                    <td><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Physical Address:</b></font></td>
                                    <td>
                                        <input type=hidden name=new_parentaddr value=empty><input type=hidden name=old_parentaddr value='<?php echo $_smarty_tpl->getVariable('student')->value['parentaddr'];?>
'>
                                        <input type=text name=parentaddr value='<?php echo $_smarty_tpl->getVariable('student')->value['parentaddr'];?>
' onChange='changeValue("parentaddr", this.value)' size=20> 
                                    </td>
                                    <td colspan="2" bgcolor="#ffcccc"><font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><i>&lt;== If Different</i></font></td>
                                </tr>

                                <tr>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Village / Town:</b></font></td>
                                    <td valign="top" width="182">
                                        <input type=hidden name=new_parentvillage value=empty><input type=hidden name=old_parentvillage value='<?php echo $_smarty_tpl->getVariable('student')->value['parentvillage'];?>
'>
                                        <input type=text name=parentvillage value='<?php echo $_smarty_tpl->getVariable('student')->value['parentvillage'];?>
' onChange='changeValue("parentvillage", this.value)' size=20>
                                    </td>
                                    <td><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Zip Code:</b></font></td>
                                    <td valign="top">
                                        <input type=hidden name=new_parentzip value=empty><input type=hidden name=old_v value='<?php echo $_smarty_tpl->getVariable('student')->value['parentzip'];?>
'>
                                        <input type=text name=parentzip value='<?php echo $_smarty_tpl->getVariable('student')->value['parentzip'];?>
' onChange='changeValue("parentzip", this.value)' size=20>
                                    </td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>

                                <tr>
                                    <td width="15%"><font size="2" color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Comments / Notes:</b></font></td>
                                    <td rowspan="4" colspan="3" valign="top">
                                        <input type=hidden name=new_snotes value=empty><input type=hidden name=old_snotes value=$student.snotes>
                                        <textarea name=snotes onChange='changeValue("snotes", this.value)' rows=6 cols=75 ><?php echo $_smarty_tpl->getVariable('student')->value['snotes'];?>
</textarea>

                                    </td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td width="15%">

                                        <div align="center">
                                        </div>
                                    </td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td width="15%"></td>
                                    <td width="45"></td>

                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td width="15%"></td>
                                    <td width="45"></td>
                                    <td width="15%"></td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <div align="center">
                                            <br>
                                            <input name="cmdSearch" value="Save &amp; Exit" type="submit" style="width:240px; height:50px">
                                            <input name="cmdSearch" value="Cancel" type="submit" style="width:120px; height:40px"></div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </form>

    <?php if ($_smarty_tpl->getVariable('showStudentLevelInfo')->value){?>
        <hr>
        <form><input type=button value="Add All Levels" onClick="window.location='index.php?cmd=handleLevel&id=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
&type=addall';"></form>
        <table border=1><tr>
                <td>Click To Add Subject</td>
                <?php  $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('subjects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subject']->key => $_smarty_tpl->tpl_vars['subject']->value){
?>
                    <td>
                        <a href=index.php?cmd=handleLevel&id=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
&sub=<?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
&type=add>&nbsp; <?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
 &nbsp;</a>
                    </td>
                <?php }} ?>
            </tr>
        </table>
        <br>
        <form name="toggle" method="POST" action="index.php?cmd=saveLevels">
            <input type=hidden name=id value=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
>
            <input type=hidden name=loc>
            Edit or Remove Levels
            <table border=1>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, null);?>
                <tr>
                    <?php  $_smarty_tpl->tpl_vars['studentLevel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('studentLevels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['studentLevel']->key => $_smarty_tpl->tpl_vars['studentLevel']->value){
?>
                        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable((($_smarty_tpl->tpl_vars['studentLevel']->value['subject']).('_')).($_smarty_tpl->tpl_vars['studentLevel']->value['level']), null, null);?>
                        <td>
                            <table>
                                <tr>
                                    <th>
                                        <a href=index.php?cmd=handleLevel&id=<?php echo $_smarty_tpl->getVariable('student')->value['studentid'];?>
&sub=<?php echo $_smarty_tpl->tpl_vars['studentLevel']->value['subject'];?>
&lvl=<?php echo $_smarty_tpl->tpl_vars['studentLevel']->value['level'];?>
&type=delete 
                                           onClick='javascript:return confirm_delete("You are about to delete the level. Click OK to continue")'>
                                            <img alt="delete" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/delete_16.png" style="vertical-align: middle" title="Remove level"/></a>
                                        <?php echo $_smarty_tpl->tpl_vars['studentLevel']->value['subject'];?>
 (<?php echo $_smarty_tpl->tpl_vars['studentLevel']->value['level'];?>
)
                                    </th>
                                </tr>
                                <tr>
                                    <td style="text-align: center">
                                        <input type=hidden name=new_<?php echo $_smarty_tpl->getVariable('name')->value;?>
 value=empty>
                                        <select name="<?php echo $_smarty_tpl->getVariable('name')->value;?>
" onChange='changeValue("<?php echo $_smarty_tpl->getVariable('name')->value;?>
", this.value)' style="width:50px" >
                                            <option value=""></option>
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['studentLevel']->value['subOptions'],'selected'=>$_smarty_tpl->tpl_vars['studentLevel']->value['level']),$_smarty_tpl);?>

                                        </select>&nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <?php if ($_smarty_tpl->getVariable('i')->value%10==0&&$_smarty_tpl->getVariable('i')->value>0){?> 
                        </tr>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
                <?php }} ?>
                <?php if ($_smarty_tpl->getVariable('i')->value%10!=0){?>
                    </tr>
                <?php }?>
            </table>
            <br>
            <input type=submit name=submit value='Save Level Information'>
        </form>

    <?php }?>

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
            
<script type="text/javascript" src="js/studentEdit.js"></script>
<script type="text/javascript" src="js/jquery/jquery.simplemodal.1.4.1.min.js"></script>

        </body>


    </html>



