<?php

/*
 *  Copyright (C) 2011 Bolek Kurowski (bkurowsk@andrew.cmu.edu)
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
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
 */


require_once 'lib/dict/Dict.php';
require_once 'lib/dict/DictType.php';


/* * ****************************************************************************
 * Get Site list
 * **************************************************************************** */
$availableSites = array();

if (Privilege(A27) == 'site') {
    $sitename = getSiteInfo($currentMySite);
    $availableSites[$currentMySite] = $sitename['village'];
} else {
    $sites = getSites('');
    $availableSites[""] = "All Locations";
    foreach ($sites as $s) {
        $id = $s['siteid'];
        $name = $s['name'];
        $availableSites[$id] = $name;
    }
}



/* * ****************************************************************************
 * Get all level
 * **************************************************************************** */

$Level= getallLevels();
$availableLevel = array();
$availableLevel[""] = "All Levels";
foreach ($Level as $lvl) {
    $availableLevel[$lvl["level"]] = $lvl["level"];
}

/* * ****************************************************************************
 * Get Core Subject List
 * **************************************************************************** */

$coreSubjects = getSubjects();

$coreSubjectList = array();
$coreSubjectList[""] = "All Subject Areas";
foreach ($coreSubjects as $cs) {
    $coreSubjectList[$cs["id"]] = $cs["name"];
}

/* * ****************************************************************************
 * Get Dictionaries
 * **************************************************************************** */
$suspensionList = Dict::getDict(DictType::SEARCH_SUSPENSIONS);
$attendanceRates = Dict::getDict(DictType::SEARCH_ATTENDANCE);
$testingLevels = Dict::getDict(DictType::TESTING_LEVELS);
$qpi = Dict::getDict(DictType::QPIs);

//var_dump($testingLevels);

$smarty->assign('suspensionList', $suspensionList);
$smarty->assign('attendanceRates', $attendanceRates);
$smarty->assign('testingLevels', $testingLevels);
$smarty->assign('qpis', $qpi);

$smarty->assign('coreSubjectList', $coreSubjectList);

$smarty->assign("sitelist", $availableSites);
$smarty->assign("Level", $availableLevel);

$isSmarty = true;

include ("template.inc");

$smarty->display("search.tpl");
?>      

