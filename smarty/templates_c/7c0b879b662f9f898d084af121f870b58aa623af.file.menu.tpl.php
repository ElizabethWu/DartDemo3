<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 09:23:24
         compiled from "/Applications/MAMP/htdocs/dartdemo2_v2.0/lib/../smarty/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:775253034500eda0c0909a5-14932538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c0b879b662f9f898d084af121f870b58aa623af' => 
    array (
      0 => '/Applications/MAMP/htdocs/dartdemo2_v2.0/lib/../smarty/templates/menu.tpl',
      1 => 1342712762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775253034500eda0c0909a5-14932538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul id="menu">
    <li><a href="index.php?cmd=home">
            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/home_page_16.png" alt="" style="margin-right: 4px" />Home</a><!-- Begin Home Item -->

        <div class="dropdown_2columns">

            <div class="col_2">
                <h3>Welcome <?php echo $_smarty_tpl->getVariable('currentUserName')->value;?>
 </h3>
            </div>

            <div class="col_2" style="border-bottom: 1px solid #666666; margin-bottom:5px;">
                <ul class=vert >
                    <?php if ($_smarty_tpl->getVariable('showDashboard')->value){?>
                        <li style="padding-bottom:5px;">
                            <a href="index.php?cmd=Dashboard">
                                <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/table_chart_16.png" alt="Edit Profile" />   Dashboard</a>
                        </li>
                    <?php }?>
                    <li style="padding-bottom:5px;">
                        <a href="index.php?cmd=editProfile">
                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/change_password_16.png" alt="Edit Profile" />   Change password</a>
                    </li>
                </ul>
            </div>

            <div class="col_2">
                <ul>
                    <li>
                        <a href="index.php?cmd=logout">
                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/door_out_32.png" alt="Log Out" />   Log Out</a>
                    </li>
                    <li style="padding-top:10px;">
                        <a href="mailto:dart@bssd.org" target=_blank>
                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/pencil_16.png" alt="Log Out" />   Mail feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li><a href="#" class="drop">Groups</a>
        <div class="dropdown_2columns">

            <div class="col_3">
                <?php if ($_smarty_tpl->getVariable('showManageGroups')->value){?>
                    <p >
                        <a style="CIPplay:inline;margin-right:15px" href="index.php?cmd=newlist">
                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/group_add_32.png" alt="Edit Group" />
                            New Group</a>
                        <a style="display:inline" href="index.php?cmd=editlist">
                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/group_edit_32.png" alt="Edit Group" />Edit Groups</a>
                    </p>
                    <p class="line" style="border-bottom: 1pt solid #666666;"><p>
                    <?php }?>

            </div>

            <div class="col_1" >
                <p class="black_box">My Shared Groups</p>
                <ul class style="max-height: 200px; overflow:auto">
                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('myGroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
                        <li><a href=index.php?cmd=showscores&p1=<?php echo $_smarty_tpl->tpl_vars['group']->value['listid'];?>
><?php echo $_smarty_tpl->tpl_vars['group']->value['listname'];?>
</a></li>
                    <?php }} ?>
                </ul>
            </div>

            <div class="col_1" >
              <!--  <p class="black_box">Private Groups <?php echo $_smarty_tpl->getVariable('currentMySite')->value;?>
</p>  -->
                <p class="black_box"> Shared Groups</p>
                <ul style="max-height: 200px; overflow:auto">
                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sharedGroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
                        <li><a href=index.php?cmd=showscores&p1=<?php echo $_smarty_tpl->tpl_vars['group']->value['listid'];?>
><?php echo $_smarty_tpl->tpl_vars['group']->value['listname'];?>
</a></li>
                    <?php }} ?>
                </ul>
            </div>
            <?php if ((($tmp = @$_smarty_tpl->getVariable('privateSharedGroups')->value)===null||$tmp==='' ? '' : $tmp)){?>

                <div class="col_1" >
                    <p class="black_box">Private Shared</p>
                    <ul style="max-height: 200px; overflow:auto">
                        <ul >
                            <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('privateSharedGroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
                                <li><a href=index.php?cmd=showscores&p1=<?php echo $_smarty_tpl->tpl_vars['group']->value['listid'];?>
><?php echo $_smarty_tpl->tpl_vars['group']->value['listname'];?>
</a></li>
                            <?php }} ?>
                        </ul>
                    </ul>

                </div>
            <?php }?>
        </div>
    </li>

    <li><a href="#">Students</a>
        <div class="dropdown_3columns">
            <div class="col_3">
                <ul class="vert">

                    <?php if ($_smarty_tpl->getVariable('showSearch')->value){?>
                        <li>
                            <a href="index.php?cmd=search">
                                <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/google_custom_search_32.png" alt="" />
                                Search for Students
                            </a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('showProgress')->value){?>
                        <li>
                            <a href="index.php?cmd=progress&site=$currentMySite">
                                <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/chart_up_color_32.png" alt="" />
                                Progress
                            </a>
                        </li>
                    <?php }?>

                    <li>
                        <a href="index.php?cmd=uploadInput">
                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/table_import_32.png" alt="" />
                            Import data
                        </a>
                    </li>
                </ul>
            </div>

            <?php if ($_smarty_tpl->getVariable('showTranscriptOptions')->value){?>
                <div class="col_1">
                    <h3>Transcripts</h3>
                    <ul>
                        <li>
                            <a href="index.php?cmd=transcriptsDefine">
                                <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/document_copies_16.png" alt="" />
                                Define
                            </a>
                        </li>
                        <li>
                            <a href="index.php?cmd=editTranscripts">
                                <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/vcard_edit_16.png" alt="" />
                                Edit
                            </a>
                        </li>
                    </ul>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('showReports')->value){?>
                <div class="col_1">
                    <h3>Reports</h3>
                    <ul>
                        <?php if ($_smarty_tpl->getVariable('showOfficialReport')->value){?>
                            <li>
                                <a href="index.php?cmd=reportsInd">
                                    <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/document_copies_16.png" alt="" />
                                    Report Center
                                </a> 
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('showDrillDown')->value){?>
                            <li>
                                <a href="index.php?cmd=pivot">
                                    Drill Down
                                </a>
                            </li>
                        <?php }?>
                        
                    </ul>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->getVariable('showStudentManagement')->value){?>
                <div class="col_1">
                    <h3>Manage</h3>
                    <ul>
                        <li>
                            <a href="index.php?cmd=studentEnrollmentForm">
                                <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/user_add_16.png" alt="" />
                                Add Student
                            </a>
                        </li>
                        <li>
                            <a href="index.php?cmd=studentTransferForm">
    <!--                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/vcard_edit_16.png" alt="" />-->
                                Drop/Transfer
                            </a>
                        </li>
                        <li>
                            <a href="schedule_form.shtml">
    <!--                            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/vcard_edit_16.png" alt="" />-->
                                Level Change
                            </a>
                        </li>
                    </ul>
                </div>
            <?php }?>
        </div>
    </li>

    <?php if ($_smarty_tpl->getVariable('showUsers')->value||$_smarty_tpl->getVariable('showHistory')->value){?>
        <li><a href="#" class="drop">Admin</a>
            <div class="dropdown_4columns">
                <div class="col_1">

                    <h3>Users</h3>
                    <ul class="vert">
                        <?php if ($_smarty_tpl->getVariable('showUsers')->value){?>
                            <li>
                                <a href="index.php?cmd=userAdmin&site=<?php echo $_smarty_tpl->getVariable('currentMySite')->value;?>
&status=Active">
                                    <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/group_16.png" alt="" />
                                    Manage <?php echo $_smarty_tpl->getVariable('currentMySite')->value;?>

                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('showHistory')->value){?>
                            <li>
                                <a href="index.php?cmd=historylogin">
                                    Login History
                                </a>
                            </li>
                            <li>
                                <a href="index.php?cmd=history">
                                    Toggle History
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="col_1">
                    <h3>Dictionaries</h3>
                    <ul>
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=createlevels">
                                    Courses
                                </a>
                            </li>
                            <li>
                                <a href="elective_form.shtml">
                                    Electives
                                </a>
                            </li>
                        <?php }?>
                       
                        <?php if ($_smarty_tpl->getVariable('showEditSchools')->value){?>
                            <li>
                                <a href="index.php?cmd=sitesView">
                                    District Schools
                                </a>
                            </li>
                        <?php }?>
                     
                        <?php if ($_smarty_tpl->getVariable('showAPS')->value){?>
                            <li>
                                <a href="index.php?cmd=gradTesting">
                                    APS Data Entry
                                </a>
                            </li>
                        <?php }?>
                        
                        
                        <?php if ($_smarty_tpl->getVariable('showEditSchoolCal')->value){?>
                            <li>
                                <a href="index.php?cmd=SchoolCalendar&site=DIO&year=<?php echo $_smarty_tpl->getVariable('currentYear')->value;?>
">
                                    School Calendar
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <?php if ($_smarty_tpl->getVariable('showEditNotes')->value&&$_smarty_tpl->getVariable('showEditReportNotes')->value){?>
                    <div class="col_1">
                        <h3>Notes</h3>
                        <ul>
                            <?php if ($_smarty_tpl->getVariable('showEditReportNotes')->value){?>
                                <li>
                                    <a href="index.php?cmd=editRepNotes">
                                        <img align="absmiddle"
                                             src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/note_16.png" alt=""/>
                                        Report Notes
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('showEditNotes')->value){?>
                                <li>
                                    <a href="index.php?cmd=editNotes">
                                        <img align="absmiddle"
                                             src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/note_16.png" alt=""/>
                                        Site Notes
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                <?php }?>
                
                    <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                    <div class="col_1">
                        <h3>Master System Setup</h3>
                        <ul>
                        <?php if ($_smarty_tpl->getVariable('editPathways')->value){?>
                            <li>
                                <a href="index.php?cmd=pathwayEdit">
                                    Edit Pathways
                                </a>
                            </li>
                        <?php }?>
                       
                        <?php if ($_smarty_tpl->getVariable('showEditStandards')->value){?>
                            <li>
                                <a href="index.php?cmd=editStandards">
                                    Edit Standards
                                </a>
                            </li>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=editgs">
                                    Edit Grades
                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=edittestlevel">
                                    Grade Levels
                                </a>
                            </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=pathwayEditElectives">
                                     Pathways Electives
                                </a>
                            </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=gpaEdit">
                                     Edit GPA
                                </a>
                            </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=editTable">
                                    Edit Table
                                </a>
                            </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=groupEdit">
                                    Edit Group
                                </a>
                            </li>
                        <?php }?>
                        
                        
                        
                        </ul>
                    </div>
                <?php }?>
                
                
                <div class="col_1">
                    <h3>Other</h3>
                    <ul>
                        <?php if ($_smarty_tpl->getVariable('showRedButton_Grd_Test')->value){?>
                            <li>
                                <a href="index.php?cmd=InternalError">
                                    <img align="absmiddle"
                                         src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/bug_16.png" alt=""/>
                                    Internal Error
                                </a>
                            </li>


                            <li>
                                <a href="index.php?cmd=bigRed">

                                    Close current year
                                </a>
                            </li>
                        <?php }?>   
                    </ul>
                </div>
            </div>
        </li>
    <?php }?>

    <li><a href="#" class="drop">Modules</a>
        <div class="dropdown_4columns">
            <div class="col_1">
                <h3>SIP</h3>
                <ul>
                    <?php if ($_smarty_tpl->getVariable('showSIP')->value){?>
                        <li>
                            <a href=index.php?module=sip&cmd=siphome>Home</a>
                        </li>
                    <?php }?>
                    <li>
                        <a href="index.php?cmd=districtrep">District Plan</a>
                    </li>
                    <li>
                        <a href="index.php?cmd=siterep">School Plan</a>
                    </li>
                    <li>
                        <a href="index.php?cmd=teacherrep">Teacher Plan</a>
                    </li>

                </ul>
            </div>
              
             <?php if ($_smarty_tpl->getVariable('showDEWIS')->value){?>
                <div class="col_1">
                    <h3> Rti Tracking</h3>
                    <ul>
                      <?php if ($_smarty_tpl->getVariable('ViewDewis')->value){?>
                        <li>
                            <a href=index.php?cmd=dewisList&kind=Rti>View Students </a>
                        </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->getVariable('EditDewis')->value){?>                        
                         <li>
                            <a href=index.php?cmd=dewisStudentEdit>Edit Student Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisTestEdit>Edit Test Cut Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisImportTest>Import Test Data</a>
                        </li>
                        <?php }?>
                        
                    </ul>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->getVariable('showDEWIS')->value){?>
                <div class="col_1">
                    <h3> DEWIS Tracking</h3>
                    <ul>
                      <?php if ($_smarty_tpl->getVariable('ViewDewis')->value){?>
                        <li>
                            <a href=index.php?cmd=dewisList&kind=dewis>View Students </a>
                        </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->getVariable('EditDewis')->value){?>                        
                         <li>
                            <a href=index.php?cmd=dewisStudentEdit>Edit Student Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisTestEdit>Edit Test Cut Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisImportTest>Import Test Data</a>
                        </li>
                        <?php }?>
                        
                    </ul>
                </div>
            <?php }?>
         
             <?php if ($_smarty_tpl->getVariable('showSPED')->value){?>
                <div class="col_1">
                    <h3> Special Ed</h3>
                    <ul>
                        <li>
                            <a href=index.php?module=sped&cmd=spedlist>List</a>
                        </li>
                        <li>
                            <a href=index.php?module=sped&cmd=spedhistory>History</a>
                        </li>
                    </ul>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('showDiscipline')->value){?>
                           <div class="col_1">
                                <h3> Discipline</h3>
                            <ul>
                                    <li>
                                <a href="index.php?cmd=disciplineAll&sort=incidentdate&dir=DESC">
                                    All Discipline Events
                                </a>
                            </li> 
                            </ul>
                                    </div>
                        <?php }?>
                        
            <?php if ($_smarty_tpl->getVariable('showSFA')->value){?>
                <div class="col_1">
                    <h3> SFA</h3>
                    <ul>
                        <li>
                            <a href='index.php?module=sfa&cmd=sfahome'>Home</a>
                        </li>
                        <li>
                            <a target="_blank" href='sfa/sri.html'>SRI Sheet</a>
                        </li>
                    </ul>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('showTesting')->value){?>
                <div class="col_1">
                    <h3> Testing</h3>
                    <ul>
                        <li>
                            <a href=index.php?module=testing&cmd=testingHome>Home</a>
                        </li>
                    </ul>
                </div>
            <?php }?>
        </div>
    </li>

    <li class="menu_item">
        <div style="float:left;">
                 
            <input id="quickSearch" type="text" title="Quick student search"value='<?php echo (($tmp = @$_smarty_tpl->getVariable('currentStudentName')->value)===null||$tmp==='' ? '' : $tmp);?>
'/>
            <input id="qs_StudentID" type="hidden" value='<?php echo (($tmp = @$_smarty_tpl->getVariable('currentStudentID')->value)===null||$tmp==='' ? '' : $tmp);?>
' />
        </div>
        
        <div id="qs_navDIV" style="float:left; vertical-align: middle; height:22px; 
             <?php if ((($tmp = @$_smarty_tpl->getVariable('currentStudentID')->value)===null||$tmp==='' ? '' : $tmp)==''){?> 
             <?php }?>">
            
            &nbsp;&nbsp;
            <?php if ((($tmp = @$_smarty_tpl->getVariable('currentStudentID')->value)===null||$tmp==='' ? '' : $tmp)!=''){?>
                <?php $_template = new Smarty_Internal_Template("comp/studentNavLinks.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
            <?php }?>
        </div>
    </li>

    <!--stuff on the right hand-->
    <li class="menu_right"><a href="#">
            <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/help_16.png" alt="" />DART</a>

        <div class="dropdown_1column align_right">
            <p>
                <a href="http://wiki.bssd.org/index.php/DART_System#DART_Support">
                    <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/support_32.png" alt=""/>Support</a>
            </p>
            <p>
                <a href="http://wiki.bssd.org/index.php/DART_System#Getting_Involved_with_the_DART_Project">
                    <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/contact_email_32.png" alt=""/>Contact</a>
            </p>
            <p>
                <a href="http://wiki.bssd.org/index.php/DART_System">
                    <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
/icons/information_32.png" alt=""/>Project Info</a>
            </p>

        </div>
    </li>
    <li class="menu_right menu_item" style="color:white; margin-right:2px;">
        <img align="absmiddle" src="<?php echo $_smarty_tpl->getVariable('imageURL')->value;?>
icons/session_idle_time.png" alt="" />
        <span id="timeout"></span>
    </li>
</ul>
