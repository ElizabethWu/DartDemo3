{*
 *  Copyright (C) 2011 Bolek Kurowski (bkurowsk@andrew.cmu.edu)
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public ocicense
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*}

{extends file="layout.tpl"}
{block name="title"}Search Students{/block}

{block name="css"}
<link rel="stylesheet" href="js/jquery/jquery.multiselect.css" type="text/css" media="screen" >

{/block}

{block name="js"}


<script type="text/javascript" src="js/jquery/jquery.multiselect.min.js"></script>
<script type="text/javascript" src="js/search.js"></script>
{/block}

{block name="body"}
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
            {*<tr>
                <td>
                    <div align="left">
                        <br>
                        
                        <div class="noteimportant">Looking for someone? This is the area you use to find him or her. After entering information in any of the spaces below, press "Search" to look at all current and historical records that you have access to in the DART system, form new groups based on these criteria, or proceed to an export area for data exporting.  </div>
                    </div>
                </td>
            </tr>*}
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
                        {*<br>
                        <font size="4" color="#cc0000">Looking for Someone? </font><br>
                        <br>*}

                        <table width="100%" border="0" cellspacing="2" cellpadding="0">
                            {*<tr>
                                <td colspan="6">
                                    <div align="center">
                                        <font face="Arial,Helvetica" color="#000000"><b>* Specify your record search criteria below, and click the "Search" button to see the results.<br>
                                                <br>

																* The more criteria you enter, the narrower your search results will be..so use caution!<br>
                                                <br>
                                            </b>
                                        </font>
                                    </div>
                                </td>
                            </tr>*}
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
                                        {html_options options=$suspensionList selected=""}
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
                                        {html_options options=$testingLevels}
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
                                        {html_options options=$attendanceRates selected=""}
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
                                        {html_options options=$sitelist selected=""}
                                    </select>
                                </td>
                               
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>Subject Area:</b></font><br><font face="verdana" size="1" color="#000000"><strong>
                                        </strong> (To choose multiple items hold the Apple or CTRL key while selecting.)
                               </font>
                                </td>
                                
                                <td width="12%"><select name="areas[]" multiple="multiple"  size=5>
                                        {html_options options=$coreSubjectList selected=""}
                                    </select></td>
                                <td width="15%">
                                    <font size="2" color="#cc0000"><b>Course Number:</b></font><br><font face="verdana" size="1" color="#000000"><strong>
                                        </strong> (To choose multiple items hold the Apple or CTRL key while selecting.)
                               </font>
                                </td>
                                <td width="15%">
                                    <select name="level[]" multiple="multiple"  size=5>
                                         {html_options options=$Level }</option>
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
                                        {html_options options=$qpis}
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
{/block}

