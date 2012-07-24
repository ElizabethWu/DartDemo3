<ul id="menu">
    <li><a href="index.php?cmd=home">
            <img align="absmiddle" src="{$imageURL}/icons/home_page_16.png" alt="" style="margin-right: 4px" />Home</a><!-- Begin Home Item -->

        <div class="dropdown_2columns">

            <div class="col_2">
                <h3>Welcome {$currentUserName} </h3>
            </div>

            <div class="col_2" style="border-bottom: 1px solid #666666; margin-bottom:5px;">
                <ul class=vert >
                    {if $showDashboard}
                        <li style="padding-bottom:5px;">
                            <a href="index.php?cmd=Dashboard">
                                <img align="absmiddle" src="{$imageURL}/icons/table_chart_16.png" alt="Edit Profile" />   Dashboard</a>
                        </li>
                    {/if}
                    <li style="padding-bottom:5px;">
                        <a href="index.php?cmd=editProfile">
                            <img align="absmiddle" src="{$imageURL}/icons/change_password_16.png" alt="Edit Profile" />   Change password</a>
                    </li>
                </ul>
            </div>

            <div class="col_2">
                <ul>
                    <li>
                        <a href="index.php?cmd=logout">
                            <img align="absmiddle" src="{$imageURL}/icons/door_out_32.png" alt="Log Out" />   Log Out</a>
                    </li>
                    <li style="padding-top:10px;">
                        <a href="mailto:dart@bssd.org" target=_blank>
                            <img align="absmiddle" src="{$imageURL}/icons/pencil_16.png" alt="Log Out" />   Mail feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li><a href="#" class="drop">Groups</a>
        <div class="dropdown_2columns">

            <div class="col_3">
                {if $showManageGroups}
                    <p >
                        <a style="CIPplay:inline;margin-right:15px" href="index.php?cmd=newlist">
                            <img align="absmiddle" src="{$imageURL}/icons/group_add_32.png" alt="Edit Group" />
                            New Group</a>
                        <a style="display:inline" href="index.php?cmd=editlist">
                            <img align="absmiddle" src="{$imageURL}/icons/group_edit_32.png" alt="Edit Group" />Edit Groups</a>
                    </p>
                    <p class="line" style="border-bottom: 1pt solid #666666;"><p>
                    {/if}

            </div>

            <div class="col_1" >
                <p class="black_box">My Shared Groups</p>
                <ul class style="max-height: 200px; overflow:auto">
                    {foreach $myGroups as $group}
                        <li><a href=index.php?cmd=showscores&p1={$group.listid}>{$group.listname}</a></li>
                    {/foreach}
                </ul>
            </div>

            <div class="col_1" >
              <!--  <p class="black_box">Private Groups {$currentMySite}</p>  -->
                <p class="black_box"> Shared Groups</p>
                <ul style="max-height: 200px; overflow:auto">
                    {foreach $sharedGroups as $group}
                        <li><a href=index.php?cmd=showscores&p1={$group.listid}>{$group.listname}</a></li>
                    {/foreach}
                </ul>
            </div>
            {if $privateSharedGroups|default:''}

                <div class="col_1" >
                    <p class="black_box">Private Shared</p>
                    <ul style="max-height: 200px; overflow:auto">
                        <ul >
                            {foreach $privateSharedGroups as $group}
                                <li><a href=index.php?cmd=showscores&p1={$group.listid}>{$group.listname}</a></li>
                            {/foreach}
                        </ul>
                    </ul>

                </div>
            {/if}
        </div>
    </li>

    {*******************************************************************************
********************** Students ************************************************
    *******************************************************************************}

    <li><a href="#">Students</a>
        <div class="dropdown_3columns">
            <div class="col_3">
                <ul class="vert">

                    {*************************************************************
                        Search Students
                    *************************************************************}

                    {if $showSearch}
                        <li>
                            <a href="index.php?cmd=search">
                                <img align="absmiddle" src="{$imageURL}/icons/google_custom_search_32.png" alt="" />
                                Search for Students
                            </a>
                        </li>
                    {/if}
                    {**************************************************************
                        Progress
                    **************************************************************}
                    {if $showProgress}
                        <li>
                            <a href="index.php?cmd=progress&site=$currentMySite">
                                <img align="absmiddle" src="{$imageURL}/icons/chart_up_color_32.png" alt="" />
                                Progress
                            </a>
                        </li>
                    {/if}

                    <li>
                        <a href="index.php?cmd=uploadInput">
                            <img align="absmiddle" src="{$imageURL}/icons/table_import_32.png" alt="" />
                            Import data
                        </a>
                    </li>
                </ul>
            </div>

            {*******************************************************************************
                        Transcript Menu
            *******************************************************************************}

            {if $showTranscriptOptions}
                <div class="col_1">
                    <h3>Transcripts</h3>
                    <ul>
                        <li>
                            <a href="index.php?cmd=transcriptsDefine">
                                <img align="absmiddle" src="{$imageURL}/icons/document_copies_16.png" alt="" />
                                Define
                            </a>
                        </li>
                        <li>
                            <a href="index.php?cmd=editTranscripts">
                                <img align="absmiddle" src="{$imageURL}/icons/vcard_edit_16.png" alt="" />
                                Edit
                            </a>
                        </li>
                    </ul>
                </div>
            {/if}

            {******************************************************************************
                        Reports
            *******************************************************************************}
            {if $showReports}
                <div class="col_1">
                    <h3>Reports</h3>
                    <ul>
                        {******************************************************************************
                                Official Report
                        *******************************************************************************}
                        {if $showOfficialReport}
                            <li>
                                <a href="index.php?cmd=reportsInd">
                                    <img align="absmiddle" src="{$imageURL}/icons/document_copies_16.png" alt="" />
                                    Report Center
                                </a> 
                            </li>
                        {/if}
                        {******************************************************************************
                                Drill Down & Pass
                        *******************************************************************************}
                        {if $showDrillDown}
                            <li>
                                <a href="index.php?cmd=pivot">
                                    {*<img align="absmiddle" src="{$imageURL}/icons/vcard_edit_16.png" alt="" />*}
                                    Drill Down
                                </a>
                            </li>
                        {/if}
                         {******************************************************************************
                                show all disciplines
                        *******************************************************************************}
                        
                    </ul>
                </div>
            {/if}

            {******************************************************************************
                        Manage Students
            *******************************************************************************}

            {if $showStudentManagement}
                <div class="col_1">
                    <h3>Manage</h3>
                    <ul>
                        <li>
                            <a href="index.php?cmd=studentEnrollmentForm">
                                <img align="absmiddle" src="{$imageURL}/icons/user_add_16.png" alt="" />
                                Add Student
                            </a>
                        </li>
                        <li>
                            <a href="index.php?cmd=studentTransferForm">
    <!--                            <img align="absmiddle" src="{$imageURL}/icons/vcard_edit_16.png" alt="" />-->
                                Drop/Transfer
                            </a>
                        </li>
                        <li>
                            <a href="schedule_form.shtml">
    <!--                            <img align="absmiddle" src="{$imageURL}/icons/vcard_edit_16.png" alt="" />-->
                                Level Change
                            </a>
                        </li>
                    </ul>
                </div>
            {/if}
        </div>
    </li>
   {*******************************************************************************
********************** Admin ***************************************************
    *******************************************************************************}

    {if $showUsers || $showHistory}
        <li><a href="#" class="drop">Admin</a>
            <div class="dropdown_4columns">
                <div class="col_1">


                    {*******************************************************************
                        Users
                    *******************************************************************}

                    <h3>Users</h3>
                    <ul class="vert">
                        {if $showUsers}
                            <li>
                                <a href="index.php?cmd=userAdmin&site={$currentMySite}&status=Active">
                                    <img align="absmiddle" src="{$imageURL}/icons/group_16.png" alt="" />
                                    Manage {$currentMySite}
                                </a>
                            </li>
                        {/if}
                        {if $showHistory}
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
                        {/if}
                    </ul>
                </div>
                {*******************************************************************
                        Dictionaries
                *******************************************************************}
                <div class="col_1">
                    <h3>Dictionaries</h3>
                    <ul>
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=createlevels">
                                    Courses
                                </a>
                            </li>
                            <li>
                                <a href="elective_form.shtml">
                                    {*<img align="absmiddle" src="{$imageURL}/icons/vcard_edit_16.png" alt="" />*}
                                    Electives
                                </a>
                            </li>
                        {/if}
                       
                        {**************************************************************
                         Site management
                        **************************************************************}
                        {if $showEditSchools}
                            <li>
                                <a href="index.php?cmd=sitesView">
                                    District Schools
                                </a>
                            </li>
                        {/if}
                     
                         {**************************************************************
                         APS data entries
                        **************************************************************}
                        {if $showAPS}
                            <li>
                                <a href="index.php?cmd=gradTesting">
                                    APS Data Entry
                                </a>
                            </li>
                        {/if}
                        
                        
                         {**************************************************************
                        Grade Setup
                        **************************************************************}
                        {if $showEditSchoolCal}
                            <li>
                                <a href="index.php?cmd=SchoolCalendar&site=DIO&year={$currentYear}">
                                    School Calendar
                                </a>
                            </li>
                        {/if}
                    </ul>
                </div>

                {*******************************************************************
                        Notes
                *******************************************************************}
                {if $showEditNotes && $showEditReportNotes}
                    <div class="col_1">
                        <h3>Notes</h3>
                        <ul>
                            {if $showEditReportNotes}
                                <li>
                                    <a href="index.php?cmd=editRepNotes">
                                        <img align="absmiddle"
                                             src="{$imageURL}/icons/note_16.png" alt=""/>
                                        Report Notes
                                    </a>
                                </li>
                            {/if}
                            {if $showEditNotes}
                                <li>
                                    <a href="index.php?cmd=editNotes">
                                        <img align="absmiddle"
                                             src="{$imageURL}/icons/note_16.png" alt=""/>
                                        Site Notes
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </div>
                {/if}
                
                  {*******************************************************************
                        Master System Setup
                *******************************************************************}
                    {if $showRedButton_Grd_Test}
                    <div class="col_1">
                        <h3>Master System Setup</h3>
                        <ul>
                             {**************************************************************
                         Edit Pathways
                        **************************************************************}
                        {if $editPathways}
                            <li>
                                <a href="index.php?cmd=pathwayEdit">
                                    Edit Pathways
                                </a>
                            </li>
                        {/if}
                       
                        {***************************************************************
                        Standards
                        ***************************************************************}
                        {if $showEditStandards}
                            <li>
                                <a href="index.php?cmd=editStandards">
                                    Edit Standards
                                </a>
                            </li>
                        {/if}

                        
                        {**************************************************************
                        Grade Setup
                        **************************************************************}
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=editgs">
                                    Edit Grades
                                </a>
                            </li>
                        {/if}
                        {**************************************************************
                        Grade Levels
                        **************************************************************}
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=edittestlevel">
                                    Grade Levels
                                </a>
                            </li>
                        {/if}
                        
                        {**************************************************************
                        Edit Pathways Electives
                        **************************************************************}
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=pathwayEditElectives">
                                     Pathways Electives
                                </a>
                            </li>
                        {/if}
                        
                        {**************************************************************
                        Edit GPA
                        **************************************************************}
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=gpaEdit">
                                     Edit GPA
                                </a>
                            </li>
                        {/if}
                        
                        {**************************************************************
                        Edit Table
                        **************************************************************}
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=editTable">
                                    Edit Table
                                </a>
                            </li>
                        {/if}
                        
                        {**************************************************************
                        Group Edit
                        **************************************************************}
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=groupEdit">
                                    Edit Group
                                </a>
                            </li>
                        {/if}
                        
                        
                        
                        </ul>
                    </div>
                {/if}
                
                
                {*******************************************************************
                        Other
                *******************************************************************}
                <div class="col_1">
                    <h3>Other</h3>
                    <ul>
                        {if $showRedButton_Grd_Test}
                            <li>
                                <a href="index.php?cmd=InternalError">
                                    <img align="absmiddle"
                                         src="{$imageURL}/icons/bug_16.png" alt=""/>
                                    Internal Error
                                </a>
                            </li>


                            <li>
                                <a href="index.php?cmd=bigRed">

                                    Close current year
                                </a>
                            </li>
                        {/if}   
                    </ul>
                </div>
            </div>
        </li>
    {/if}

    <li><a href="#" class="drop">Modules</a>
        <div class="dropdown_4columns">
            <div class="col_1">
                <h3>SIP</h3>
                <ul>
                    {if $showSIP}
                        <li>
                            <a href=index.php?module=sip&cmd=siphome>Home</a>
                        </li>
                    {/if}
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
              
             {if $showDEWIS}
                <div class="col_1">
                    <h3> Rti Tracking</h3>
                    <ul>
                      {if $ViewDewis}
                        <li>
                            <a href=index.php?cmd=dewisList&kind=Rti>View Students </a>
                        </li>
                        {/if}
                        
                        {if $EditDewis}                        
                         <li>
                            <a href=index.php?cmd=dewisStudentEdit>Edit Student Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisTestEdit>Edit Test Cut Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisImportTest>Import Test Data</a>
                        </li>
                        {/if}
                        
                    </ul>
                </div>
            {/if}

            {if $showDEWIS}
                <div class="col_1">
                    <h3> DEWIS Tracking</h3>
                    <ul>
                      {if $ViewDewis}
                        <li>
                            <a href=index.php?cmd=dewisList&kind=dewis>View Students </a>
                        </li>
                        {/if}
                        
                        {if $EditDewis}                        
                         <li>
                            <a href=index.php?cmd=dewisStudentEdit>Edit Student Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisTestEdit>Edit Test Cut Scores</a>
                        </li>
                        <li>
                            <a href=index.php?cmd=dewisImportTest>Import Test Data</a>
                        </li>
                        {/if}
                        
                    </ul>
                </div>
            {/if}
         
             {if $showSPED}
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
            {/if}
            {if $showDiscipline}
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
                        {/if}
                        
            {if $showSFA}
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
            {/if}
            {if $showTesting}
                <div class="col_1">
                    <h3> Testing</h3>
                    <ul>
                        <li>
                            <a href=index.php?module=testing&cmd=testingHome>Home</a>
                        </li>
                    </ul>
                </div>
            {/if}
        </div>
    </li>

    <li class="menu_item">
        <div style="float:left;">

{*
            <img alt="QuickSearch" src="{$imageURL}icons/google_custom_search_16.png"
                 style="vertical-align: middle"/>
                 *}
                 
            <input id="quickSearch" type="text" title="Quick student search"value='{$currentStudentName|default:''}'/>
            <input id="qs_StudentID" type="hidden" value='{$currentStudentID|default:''}' />
        </div>
        
        <div id="qs_navDIV" style="float:left; vertical-align: middle; height:22px; 
             {if $currentStudentID|default:'' eq ''} 
             {/if}">
            
            {*
            *the drop down box{display:none; }
            *}
            &nbsp;&nbsp;
            {if $currentStudentID|default:'' <>''}
                {include file="comp/studentNavLinks.tpl"}
            {/if}
        </div>
    </li>

    <!--stuff on the right hand-->
    <li class="menu_right"><a href="#">
            <img align="absmiddle" src="{$imageURL}/icons/help_16.png" alt="" />DART</a>

        <div class="dropdown_1column align_right">
            <p>
                <a href="http://wiki.bssd.org/index.php/DART_System#DART_Support">
                    <img align="absmiddle" src="{$imageURL}/icons/support_32.png" alt=""/>Support</a>
            </p>
            <p>
                <a href="http://wiki.bssd.org/index.php/DART_System#Getting_Involved_with_the_DART_Project">
                    <img align="absmiddle" src="{$imageURL}/icons/contact_email_32.png" alt=""/>Contact</a>
            </p>
            <p>
                <a href="http://wiki.bssd.org/index.php/DART_System">
                    <img align="absmiddle" src="{$imageURL}/icons/information_32.png" alt=""/>Project Info</a>
            </p>

        </div>
    </li>
    <li class="menu_right menu_item" style="color:white; margin-right:2px;">
        <img align="absmiddle" src="{$imageURL}icons/session_idle_time.png" alt="" />
        <span id="timeout"></span>
    </li>
    {*<!-- End Home Item -->

    <!--          <li><a href="#" class="drop">5 Columns</a>

    <div class="dropdown_5columns"> Begin 5 columns container

    <div class="col_5">
    <h2>This is an example of a large container with 5 columns</h2>
    </div>

    <div class="col_1">
    <p class="black_box">This is a dark grey box text. Fusce in metus at enim porta lacinia vitae a arcu. Sed sed lacus nulla mollis porta quis.</p>
    </div>

    <div class="col_1">
    <p>Phasellus vitae sapien ac leo mollis porta quis sit amet nisi. Mauris hendrerit, metus cursus accumsan tincidunt.</p>
    </div>

    <div class="col_1">
    <p class="italic">This is a sample of an italic text. Consequat scelerisque. Fusce sed lectus at arcu mollis accumsan at nec nisi porta quis sit amet.</p>
    </div>

    <div class="col_1">
    <p>Curabitur euismod gravida ante nec commodo. Nunc dolor nulla, semper in ultricies vitae, vulputate porttitor neque.</p>
    </div>

    <div class="col_1">
    <p class="strong">This is a sample of a bold text. Aliquam sodales nisi nec felis hendrerit ac eleifend lectus feugiat scelerisque.</p>
    </div>

    <div class="col_5">
    <h2>Here is some content with side images</h2>
    </div>

    <div class="col_3">

    <img src="img/01.jpg" width="70" height="70" class="img_left imgshadow" alt="" />
    <p>Maecenas eget eros lorem, nec pellentesque lacus. Aenean dui orci, rhoncus sit amet tristique eu, tristique sed odio. Praesent ut interdum elit. Sed in sem mauris. Aenean a commodo mi. Praesent augue lacus.<a href="#">Read more...</a></p>

    <img src="img/02.jpg" width="70" height="70" class="img_left imgshadow" alt="" />
    <p>Aliquam elementum felis quis felis consequat scelerisque. Fusce sed lectus at arcu mollis accumsan at nec nisi. Aliquam pretium mollis fringilla. Nunc in leo urna, eget varius metus. Aliquam sodales nisi.<a href="#">Read more...</a></p>

    </div>

    <div class="col_2">

    <p class="black_box">This is a black box, you can use it to highligh some content. Sed sed lacus nulla, et lacinia risus. Phasellus vitae sapien ac leo mollis porta quis sit amet nisi. Mauris hendrerit, metus cursus accumsan tincidunt.Quisque vestibulum nisi non nunc blandit placerat. Mauris facilisis, risus ut lobortis posuere, diam lacus congue lorem, ut condimentum ligula est vel orci. Donec interdum lacus at velit varius gravida. Nulla ipsum risus.</p>

    </div>

    </div>

    </li> End 5 columns Item

    <li><a href="#" class="drop">4 Columns</a> Begin 4 columns Item

    <div class="dropdown_4columns"> Begin 4 columns container

    <div class="col_4">
    <h2>This is a heading title</h2>
    </div>

    <div class="col_1">

    <h3>Some Links</h3>
    <ul>
    <li><a href="#">ThemeForest</a></li>
    <li><a href="#">GraphicRiver</a></li>
    <li><a href="#">ActiveDen</a></li>
    <li><a href="#">VideoHive</a></li>
    <li><a href="#">3DOcean</a></li>
    </ul>

    </div>

    <div class="col_1">

    <h3>Useful Links</h3>
    <ul>
    <li><a href="#">NetTuts</a></li>
    <li><a href="#">VectorTuts</a></li>
    <li><a href="#">PsdTuts</a></li>
    <li><a href="#">PhotoTuts</a></li>
    <li><a href="#">ActiveTuts</a></li>
    </ul>

    </div>

    <div class="col_1">

    <h3>Other Stuff</h3>
    <ul>
    <li><a href="#">FreelanceSwitch</a></li>
    <li><a href="#">Creattica</a></li>
    <li><a href="#">WorkAwesome</a></li>
    <li><a href="#">Mac Apps</a></li>
    <li><a href="#">Web Apps</a></li>
    </ul>

    </div>

    <div class="col_1">

    <h3>Misc</h3>
    <ul>
    <li><a href="#">Design</a></li>
    <li><a href="#">Logo</a></li>
    <li><a href="#">Flash</a></li>
    <li><a href="#">Illustration</a></li>
    <li><a href="#">More...</a></li>
    </ul>

    </div>

    </div> End 4 columns container

    </li> End 4 columns Item

    <li class="menu_right"><a href="#" class="drop">1 Column</a>

    <div class="dropdown_1column align_right">

    <div class="col_1">

    <ul class="simple">
    <li><a href="#">FreelanceSwitch</a></li>
    <li><a href="#">Creattica</a></li>
    <li><a href="#">WorkAwesome</a></li>
    <li><a href="#">Mac Apps</a></li>
    <li><a href="#">Web Apps</a></li>
    <li><a href="#">NetTuts</a></li>
    <li><a href="#">VectorTuts</a></li>
    <li><a href="#">PsdTuts</a></li>
    <li><a href="#">PhotoTuts</a></li>
    <li><a href="#">ActiveTuts</a></li>
    <li><a href="#">Design</a></li>
    <li><a href="#">Logo</a></li>
    <li><a href="#">Flash</a></li>
    <li><a href="#">Illustration</a></li>
    <li><a href="#">More...</a></li>
    </ul>

    </div>

    </div>

    </li>

    <li class="menu_right"><a href="#" class="drop">3 columns</a> Begin 3 columns Item

    <div class="dropdown_3columns align_right"> Begin 3 columns container

    <div class="col_3">
    <h2>Lists in Boxes</h2>
    </div>

    <div class="col_1">

    <ul class="greybox">
    <li><a href="#">FreelanceSwitch</a></li>
    <li><a href="#">Creattica</a></li>
    <li><a href="#">WorkAwesome</a></li>
    <li><a href="#">Mac Apps</a></li>
    <li><a href="#">Web Apps</a></li>
    </ul>

    </div>

    <div class="col_1">

    <ul class="greybox">
    <li><a href="#">ThemeForest</a></li>
    <li><a href="#">GraphicRiver</a></li>
    <li><a href="#">ActiveDen</a></li>
    <li><a href="#">VideoHive</a></li>
    <li><a href="#">3DOcean</a></li>
    </ul>

    </div>

    <div class="col_1">

    <ul class="greybox">
    <li><a href="#">Design</a></li>
    <li><a href="#">Logo</a></li>
    <li><a href="#">Flash</a></li>
    <li><a href="#">Illustration</a></li>
    <li><a href="#">More...</a></li>
    </ul>

    </div>

    <div class="col_3">
    <h2>Here are some image examples</h2>
    </div>

    <div class="col_3">
    <img src="img/02.jpg" width="70" height="70" class="img_left imgshadow" alt="" />
    <p>Maecenas eget eros lorem, nec pellentesque lacus. Aenean dui orci, rhoncus sit amet tristique eu, tristique sed odio. Praesent ut interdum elit. Maecenas imperdiet, nibh vitae rutrum vulputate, lorem sem condimentum.<a href="#">Read more...</a></p>

    <img src="img/01.jpg" width="70" height="70" class="img_left imgshadow" alt="" />
    <p>Aliquam elementum felis quis felis consequat scelerisque. Fusce sed lectus at arcu mollis accumsan at nec nisi. Aliquam pretium mollis fringilla. Vestibulum tempor facilisis malesuada. <a href="#">Read more...</a></p>
    </div>

    </div> End 3 columns container

    </li> End 3 columns Item -->*}
</ul>
