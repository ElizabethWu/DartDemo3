<?php /* Smarty version Smarty-3.0.8, created on 2012-07-17 16:33:38
         compiled from "/home/dartdem2/public_html/lib/../smarty/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:634795700500604624aabe0-16900727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc1b300397a802a74a6b6228db217ba00989f0c' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/search.tpl',
      1 => 1342571609,
      2 => 'file',
    ),
    'cbe5ee31e6cd19b1bd944579e413a1e2e3260755' => 
    array (
      0 => '/home/dartdem2/public_html/lib/../smarty/templates/layout.tpl',
      1 => 1341264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634795700500604624aabe0-16900727',
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
        <title>DSD DART: Search Students</title>
<!--        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
        <script type="text/javascript"
        src="js/jquery/jquery-1.6.2.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">
            <link rel="stylesheet" type="text/css"
                  href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" />

            <link rel="stylesheet" href="css/dart.css" type="text/css" media="screen" />
            
<link rel="stylesheet" href="js/jquery/jquery.multiselect.css" type="text/css" media="screen" >




            
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



                        
<style type="text/css">
    select.singleSelect {
        width:155px;
    }

    input.text {
        width:155px;
    }

</style>

<div align="center" style="width:900px; margin:0 auto">
    <div align="left">
        <font size="4" color="#cc0000">DART System Search</font><br>
    </div>
    <form id="searchForm" method="POST" action="index.php?cmd=searchResults" name='search'>
       
        <table width="100%" border="0" cellspacing="2" cellpadding="0" >
            <tr>
                <td>
                    <div style="text-align: center">
                        <input id="submitBtn" class="jq" type="submit" name="cmdSearch" value="Search" style="width:300px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="left">

                        <table width="100%" border="0" cellspacing="2" cellpadding="0">
                            <tr>
                                <td colspan="6" bgcolor="#ccffff">
                                    <div align="right" style="float:right;">
                                        <b>Specify User Variables</b>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td nowrap width="15%">
                                    <font size="2"><b>Time Frame:</b></font>
                                </td>
                                <td width="12%">
                                    <select class="singleSelect" name="tframe" style="width:155px">
                                        <option value="#" selected>Current Quarter</option>
                                        <option value="all">All Time Frames</option>
                                    </select>
                                </td>
                                <td width="15%"><font size="2"><b>Status:</b></font></td>
                                <td width="15%">
                                    <select class="singleSelect" name="status" style="width:155px">
                                        
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="">Both</option>
                                    </select>
                                </td>
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>Last Name:</b></font>
                                </td>
                                <td width="12%">
                                    <input type="text" name="lname" class="text">
                                </td>
                                <td colspan="3">Students who are currently in school are "Active". All others are considered "Inactive".  </td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%"><font size="2"><b>First Name:</b></font></td>
                                <td width="12%"><input type="text" name="fname"  class="text"></td>
                                <td width="15%"><font size="2" color="#cc0000"><b>Gender:</b></font></td>
                                <td width="15%">
                                    <select class="singleSelect" name="gender">
                                        <option value="" selected>Male or Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </td>
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%"><font size="2" color="#cc0000"><b>Student Number:</b></font></td>
                                <td width="12%"><input type="text" name="studentnumber"  class="text"></td>
                                <td width="15%"><font size="2" color="#cc0000"><b>Suspensions:</b></font></td>
                                <td width="15%">
                                    <select name="suspension" class="singleSelect" >
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('suspensionList')->value,'selected'=>''),$_smarty_tpl);?>

                                    </select>
                                </td>
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%"><font size="2" color="#cc0000"><b>Student ID:</b></font></td>
                                <td width="12%"><input type="text" name="aid" class="text"></td>
                                <td width="15%" valign = top rowspan = 4>
                                    <font size="2" color="#cc0000"><b>Grade Level:</b></font><br>
                                </td>
                                <td width="15%" valign = top rowspan = 4>
                                    <select name="grade[]" multiple="multiple" size="5">
                                        <option value="" selected>All Testing Levels</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('testingLevels')->value),$_smarty_tpl);?>

                                    </select>
                                </td>													
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td nowrap width="15%"><font size="2" color="#cc0000"><b>PowerSchool ID:</b></font></td>
                                <td width="12%"><input type="text" name="psid" class="text"></td>
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%"><font size="2" color="#cc0000"><b>Age:</b></font></td>
                                <td width="12%">
                                    <select name="age" class="singleSelect">
                                        <option value="" selected>All Ages</option>
                                        <option value="18">18+</option>
                                        <option value="17">17</option>
                                        <option value="16">16</option>
                                        <option value="15">15</option>
                                        <option value="14">14</option>
                                        <option value="13">13</option>
                                        <option value="12">12</option>
                                        <option value="11">11</option>
                                        <option value="10">10</option>
                                        <option value="9">09</option>
                                        <option value="8">08</option>
                                        <option value="7">07</option>
                                        <option value="6">06</option>
                                        <option value="5">05</option>
                                        <option value="4">04</option>
                                        <option value="3">03</option>
                                    </select>
                                </td>
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%"><font size="2" color="#cc0000"><b>Attendance </b></font></td>
                                <td width="12%">
                                    <select name="attendance" class="singleSelect">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('attendanceRates')->value,'selected'=>''),$_smarty_tpl);?>

                                    </select>
                                </td>
                                <td width="15%"></td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td width="15%"><font size="2" color="#cc0000"><b>Eligibility:</b></font></td>
                                <td width="12%">
                                    <select name="Eligibility" class="singleSelect">
                                        <option value="" selected>Select Eligibility</option>
                                        <option value="Eligible">Eligible</option>
                                        <option value="Not Eligible - Academic">Not Eligible - Academic</option>
                                        <option value="Not Eligible - Attendance">Not Eligible - Attendance</option>
                                        <option value="Not Eligible - Behavior">Not Eligible - Behavior</option>
                                        <option value="Not Eligible - Transfer">Not Eligible - Transfer</option>
                                    </select>
                                    <br>
                                </td>
                                <td width="15%" valign = top><font size="2" color="#cc0000"><b>SpEd Status:</b></font></td>

                                <td width="15%">
                                    <select name="sped" class="singleSelect">
                                        <option value="" selected>All</option>
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </td><td>
                                    <font size="2" color="#cc0000" ><b>LEP Status</b></font>
                                </td><td>
                                   <select name="LEPstatus" class="singleSelect">
                                        <option value="" selected>None</option>
                                        <option value="L1">L1</option>
                                        <option value="LP">LP</option>
                                        <option value="LT">LT</option>
                                        <option value="M1">M1</option>
                                        <option value="M2">M2</option>
                                        <option value="X">Not Identified</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" bgcolor="#ccffff">
                                    <div align="right">
                                        <b>Specify Learning Variables</b></div>
                                </td>
                            </tr>
                            <tr>
                                <td  width="15%"><font size="2" color="#cc0000"><b>Location:</b></font><font face="verdana" size="1" color="#000000"><strong><br>
                                        </strong> (To choose multiple items hold the Apple or CTRL key while selecting.)
                               </font>
                                </td>
                               
                                <td valign="top" width="12%">
                                    <select name="locationids[]" multiple="multiple"  size=5>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('sitelist')->value,'selected'=>''),$_smarty_tpl);?>

                                    </select>
                                </td>
                               
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>Subject Area:</b></font><br><font face="verdana" size="1" color="#000000"><strong>
                                        </strong> (To choose multiple items hold the Apple or CTRL key while selecting.)
                               </font>
                                </td>
                                
                                <td width="12%"><select name="areas[]" multiple="multiple"  size=5>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('coreSubjectList')->value,'selected'=>''),$_smarty_tpl);?>

                                    </select></td>
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>Course Number:</b></font><br><font face="verdana" size="1" color="#000000"><strong>
                                        </strong> (To choose multiple items hold the Apple or CTRL key while selecting.)
                               </font>
                                </td>
                                <td width="15%">
                                    <select name="level[]" multiple="multiple"  size=5>
                                         <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('Level')->value),$_smarty_tpl);?>
</option>
                                    </select>
                                </td>
                                </tr>
                                <tr>
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>Standard Overall:</b></font><br>
                                </td>
                                <td width="15%"><select name="overall[]" multiple="multiple"  size=5>
                                        <option selected value="">All Toggles</option>
                                        <option value="EMG">EMG</option>
                                        <option value="DEV">DEV</option>
                                        <option value="PRO">PRO</option>
                                        <option value="ADV">ADV</option>
                                        <option value="blank">None</option>
                                    </select></td>
                           
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>QPI:</b></font><br>
                                </td>
                                <td width="15%"><select name="QPIs[]" multiple="multiple"  size=5>
                                        <option selected value="">All QPIs</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('qpis')->value),$_smarty_tpl);?>

                                    </select><br>
                                    <br>
                                </td>
                                
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>GPA Range:</b></font><br>
                                </td>
                                 <td width="15%"><select name="GPA" multiple="multiple"  size=5>
                                        <option selected value="">All Grades</option>
                                        <option value="4">4.0+</option>
                                        <option value="3">3.0+</option>
                                        <option value="2">2.0+</option>
                                        <option value="1">1.0+</option>
                                    </select></td>
                                
                                
                                
                            </tr>
                            <tr>
                                <td nowrap width="15%"><font size="2" color="#cc0000"><b>Exit Exam Reading:</b></font></td>
                                <td width="12%">
                                    <select name="HSGQEReading" class="singleSelect">
                                        <option value="" selected>Either Y or N</option>
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </td>
                                <td nowrap width="15%"><font size="2" color="#cc0000"><b>Exit Exam Math:</b></font></td>
                                <td width="15%">
                                    <select name="HSGQEMath" class="singleSelect">
                                        <option value="" selected>Either Y or N</option>
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </td>
                                <td nowrap width="15%"><font size="2" color="#cc0000"><b>Exit Exam Writing</b></font></td>
                                <td width="15%">
                                    <select name="HSGQEWriting" class="singleSelect">
                                        <option value="" selected>Either Y or N</option>
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"></td>
                                <td colspan="4">
                                </td>
                                <td width="15%"></td>
                            </tr>
                            <tr>
                                <td colspan="6" style="border-top: solid 1px; padding-top: 10px">
                                    <div style="text-align:center">
                                        <input type="submit" name="cmdSearch" value="Search" style="width:300px" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </form>
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
            


<script type="text/javascript" src="js/jquery/jquery.multiselect.min.js"></script>
<script type="text/javascript" src="js/search.js"></script>

        </body>


    </html>



