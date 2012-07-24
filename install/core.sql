-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2012 at 09:25 AM
-- Server version: 5.0.95
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dartdem2_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert_toggles`
--

DROP TABLE IF EXISTS `alert_toggles`;
CREATE TABLE IF NOT EXISTS `alert_toggles` (
  `subject` varchar(254) NOT NULL default '',
  `lvl` varchar(254) NOT NULL default '',
  `days` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `AttendanceCodeGroups`
--

DROP TABLE IF EXISTS `AttendanceCodeGroups`;
CREATE TABLE IF NOT EXISTS `AttendanceCodeGroups` (
  `CodeID` int(11) NOT NULL default '0',
  `GroupID` int(11) NOT NULL default '0',
  PRIMARY KEY  (`CodeID`,`GroupID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `AttendanceCodes`
--

DROP TABLE IF EXISTS `AttendanceCodes`;
CREATE TABLE IF NOT EXISTS `AttendanceCodes` (
  `CodeID` int(11) NOT NULL default '0',
  `Code` varchar(5) NOT NULL default '',
  `Description` varchar(255) default NULL,
  `Color` varchar(6) default NULL,
  PRIMARY KEY  (`CodeID`),
  UNIQUE KEY `Code` (`Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `AttendanceEvents`
--

DROP TABLE IF EXISTS `AttendanceEvents`;
CREATE TABLE IF NOT EXISTS `AttendanceEvents` (
  `StudentID` int(11) NOT NULL default '0',
  `SiteID` varchar(3) NOT NULL default '',
  `Date` date NOT NULL default '0000-00-00',
  `PeriodID` int(2) NOT NULL default '0',
  `CodeID` int(2) default NULL,
  PRIMARY KEY  (`StudentID`,`Date`,`PeriodID`),
  KEY `StudentID` (`StudentID`),
  KEY `AttendanceEvents_Date` (`Date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `AttendanceGroups`
--

DROP TABLE IF EXISTS `AttendanceGroups`;
CREATE TABLE IF NOT EXISTS `AttendanceGroups` (
  `GroupID` int(11) NOT NULL default '0',
  `Description` varchar(255) default NULL,
  PRIMARY KEY  (`GroupID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `AttendancePeriods`
--

DROP TABLE IF EXISTS `AttendancePeriods`;
CREATE TABLE IF NOT EXISTS `AttendancePeriods` (
  `PeriodID` int(11) NOT NULL default '0',
  `Description` varchar(255) default NULL,
  PRIMARY KEY  (`PeriodID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bugs`
--

DROP TABLE IF EXISTS `bugs`;
CREATE TABLE IF NOT EXISTS `bugs` (
  `id` int(11) NOT NULL auto_increment,
  `contact` varchar(254) NOT NULL default '',
  `problemDate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `problem` text NOT NULL,
  `resolveDate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `resolution` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `dewis`
--

DROP TABLE IF EXISTS `dewis`;
CREATE TABLE IF NOT EXISTS `dewis` (
  `id` int(11) NOT NULL auto_increment,
  `sid` int(11) NOT NULL,
  `startdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `enddate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `endreason` varchar(254) NOT NULL,
  `math` varchar(254) NOT NULL,
  `reading` varchar(254) NOT NULL,
  `dattendance` int(254) NOT NULL,
  `suspensions` int(254) NOT NULL,
  `dewisstatus` varchar(254) NOT NULL default 'current',
  `flagmath` int(11) NOT NULL default '0',
  `flagreading` int(11) NOT NULL default '0',
  `flagattendance` int(11) NOT NULL default '0',
  `flagsuspensions` int(11) NOT NULL default '0',
  `kind` varchar(254) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=753 ;

-- --------------------------------------------------------

--
-- Table structure for table `dewis_cutscore`
--

DROP TABLE IF EXISTS `dewis_cutscore`;
CREATE TABLE IF NOT EXISTS `dewis_cutscore` (
  `testname` varchar(254) NOT NULL,
  `year` int(11) NOT NULL,
  `tier` int(11) NOT NULL,
  `benchmark` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `cutscore` int(11) NOT NULL,
  PRIMARY KEY  (`testname`,`year`,`tier`,`benchmark`,`grade`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dewis_log`
--

DROP TABLE IF EXISTS `dewis_log`;
CREATE TABLE IF NOT EXISTS `dewis_log` (
  `logid` int(11) NOT NULL auto_increment,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `header` varchar(254) NOT NULL,
  `rtistudents` text NOT NULL,
  `dewisstudents` text NOT NULL,
  PRIMARY KEY  (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

-- --------------------------------------------------------

--
-- Table structure for table `dewis_notes`
--

DROP TABLE IF EXISTS `dewis_notes`;
CREATE TABLE IF NOT EXISTS `dewis_notes` (
  `id` int(11) NOT NULL auto_increment,
  `did` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `category` varchar(254) NOT NULL,
  `target` varchar(254) NOT NULL,
  `notes` text NOT NULL,
  `status` varchar(254) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

-- --------------------------------------------------------

--
-- Table structure for table `dewis_pulldown`
--

DROP TABLE IF EXISTS `dewis_pulldown`;
CREATE TABLE IF NOT EXISTS `dewis_pulldown` (
  `pullid` int(11) NOT NULL auto_increment,
  `gid` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `value` varchar(254) NOT NULL,
  PRIMARY KEY  (`pullid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `dewis_test`
--

DROP TABLE IF EXISTS `dewis_test`;
CREATE TABLE IF NOT EXISTS `dewis_test` (
  `alaskaid` varchar(254) NOT NULL,
  `testname` varchar(254) NOT NULL,
  `test` varchar(254) NOT NULL,
  `year` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `benchmark` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `importgrp` varchar(254) NOT NULL,
  PRIMARY KEY  (`alaskaid`,`testname`,`year`,`benchmark`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dewis_tmp`
--

DROP TABLE IF EXISTS `dewis_tmp`;
CREATE TABLE IF NOT EXISTS `dewis_tmp` (
  `sid` int(11) NOT NULL,
  `aid` varchar(254) NOT NULL,
  `attendance` float NOT NULL,
  `attendanceflag` int(11) NOT NULL,
  `discipline` varchar(254) NOT NULL,
  `disciplineflag` int(11) NOT NULL,
  `math` varchar(254) NOT NULL,
  `mathflag` int(11) NOT NULL,
  `reading` varchar(254) NOT NULL,
  `readingflag` int(11) NOT NULL,
  `sytd` int(11) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

DROP TABLE IF EXISTS `discipline`;
CREATE TABLE IF NOT EXISTS `discipline` (
  `disciplineid` int(11) NOT NULL auto_increment,
  `studentid` int(11) NOT NULL default '0',
  `year` int(11) NOT NULL default '0',
  `kind` varchar(254) NOT NULL default '',
  `creation` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `cuser` int(11) NOT NULL default '0',
  `site` varchar(254) NOT NULL default '',
  `incidentdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `nonweapon` varchar(254) NOT NULL default '',
  `victimno` int(11) NOT NULL default '0',
  `police` varchar(254) NOT NULL default '',
  `consequence` varchar(254) NOT NULL default '',
  `lengthdays` float NOT NULL default '0',
  `dstatus` varchar(254) NOT NULL default '',
  `suspension` varchar(254) NOT NULL default '',
  `weapon` varchar(254) NOT NULL default '',
  `victimtype` varchar(254) NOT NULL default '',
  `startdate` date NOT NULL default '0000-00-00',
  `enddate` date NOT NULL default '0000-00-00',
  `guardian` text NOT NULL,
  `notes` text NOT NULL,
  `relateddisability` varchar(254) NOT NULL default '',
  `iepmeet` varchar(254) NOT NULL default '',
  `eduservice` varchar(254) NOT NULL default '',
  `meetdate` date NOT NULL default '0000-00-00',
  `title` varchar(254) NOT NULL,
  `loc` varchar(254) NOT NULL,
  `scale` varchar(254) NOT NULL,
  `handled` varchar(254) NOT NULL,
  `motivation` varchar(254) NOT NULL,
  `typeofoffense` varchar(254) NOT NULL,
  `logger` varchar(254) NOT NULL,
  `referer` varchar(254) NOT NULL,
  `involved` varchar(254) NOT NULL,
  `tried` int(11) NOT NULL,
  `addlcomments` text NOT NULL,
  `admincomments` text NOT NULL,
  PRIMARY KEY  (`disciplineid`),
  KEY `studentid` (`studentid`,`year`,`kind`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12637 ;

-- --------------------------------------------------------

--
-- Table structure for table `discipline_for test`
--

DROP TABLE IF EXISTS `discipline_for test`;
CREATE TABLE IF NOT EXISTS `discipline_for test` (
  `disciplineid` int(11) NOT NULL auto_increment,
  `studentid` int(11) NOT NULL default '0',
  `year` int(11) NOT NULL default '0',
  `kind` varchar(254) NOT NULL default '',
  `creation` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `cuser` int(11) NOT NULL default '0',
  `site` varchar(254) NOT NULL default '',
  `incidentdate` date NOT NULL default '0000-00-00',
  `nonweapon` varchar(254) NOT NULL default '',
  `victimno` int(11) NOT NULL default '0',
  `police` varchar(254) NOT NULL default '',
  `consequence` varchar(254) NOT NULL default '',
  `lengthdays` int(11) NOT NULL default '0',
  `dstatus` varchar(254) NOT NULL default '',
  `suspension` varchar(254) NOT NULL default '',
  `weapon` varchar(254) NOT NULL default '',
  `victimtype` varchar(254) NOT NULL default '',
  `startdate` date NOT NULL default '0000-00-00',
  `enddate` date NOT NULL default '0000-00-00',
  `guardian` text NOT NULL,
  `notes` text NOT NULL,
  `relateddisability` varchar(254) NOT NULL default '',
  `iepmeet` varchar(254) NOT NULL default '',
  `eduservice` varchar(254) NOT NULL default '',
  `meetdate` date NOT NULL default '0000-00-00',
  `foo` varchar(254) NOT NULL default '',
  `foo1` varchar(254) NOT NULL default '',
  `foo2` varchar(254) NOT NULL default '',
  `title` varchar(254) NOT NULL,
  `loc` varchar(254) NOT NULL,
  `scale` varchar(254) NOT NULL,
  `handled` varchar(254) NOT NULL,
  `motivation` varchar(254) NOT NULL,
  `typeofoffense` varchar(254) NOT NULL,
  `logger` varchar(254) NOT NULL,
  `referer` varchar(254) NOT NULL,
  `involved` varchar(254) NOT NULL,
  `tried` int(11) NOT NULL,
  `addlcomments` text NOT NULL,
  `admincomments` text NOT NULL,
  PRIMARY KEY  (`disciplineid`),
  KEY `studentid` (`studentid`,`year`,`kind`),
  KEY `discipline_incidentdate` (`incidentdate`),
  KEY `discipline_consequence` (`consequence`(5))
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `discipline_items`
--

DROP TABLE IF EXISTS `discipline_items`;
CREATE TABLE IF NOT EXISTS `discipline_items` (
  `id` int(11) NOT NULL auto_increment,
  `item` varchar(254) NOT NULL,
  `kind` varchar(254) NOT NULL,
  `section` int(11) NOT NULL,
  `aux1` text NOT NULL,
  `aux2` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `discipline_real`
--

DROP TABLE IF EXISTS `discipline_real`;
CREATE TABLE IF NOT EXISTS `discipline_real` (
  `disciplineid` int(11) NOT NULL auto_increment,
  `studentid` int(11) NOT NULL default '0',
  `year` int(11) NOT NULL default '0',
  `kind` varchar(254) NOT NULL default '',
  `creation` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `cuser` int(11) NOT NULL default '0',
  `site` varchar(254) NOT NULL default '',
  `incidentdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `nonweapon` varchar(254) NOT NULL default '',
  `victimno` int(11) NOT NULL default '0',
  `police` varchar(254) NOT NULL default '',
  `consequence` varchar(254) NOT NULL default '',
  `lengthdays` float NOT NULL default '0',
  `dstatus` varchar(254) NOT NULL default '',
  `suspension` varchar(254) NOT NULL default '',
  `weapon` varchar(254) NOT NULL default '',
  `victimtype` varchar(254) NOT NULL default '',
  `startdate` date NOT NULL default '0000-00-00',
  `enddate` date NOT NULL default '0000-00-00',
  `guardian` text NOT NULL,
  `notes` text NOT NULL,
  `relateddisability` varchar(254) NOT NULL default '',
  `iepmeet` varchar(254) NOT NULL default '',
  `eduservice` varchar(254) NOT NULL default '',
  `meetdate` date NOT NULL default '0000-00-00',
  `title` varchar(254) NOT NULL,
  `loc` varchar(254) NOT NULL,
  `scale` varchar(254) NOT NULL,
  `handled` varchar(254) NOT NULL,
  `motivation` varchar(254) NOT NULL,
  `typeofoffense` varchar(254) NOT NULL,
  `logger` varchar(254) NOT NULL,
  `referer` varchar(254) NOT NULL,
  `involved` varchar(254) NOT NULL,
  `tried` int(11) NOT NULL,
  `addlcomments` text NOT NULL,
  `admincomments` text NOT NULL,
  PRIMARY KEY  (`disciplineid`),
  KEY `studentid` (`studentid`,`year`,`kind`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12633 ;

-- --------------------------------------------------------

--
-- Table structure for table `gb_assignments`
--

DROP TABLE IF EXISTS `gb_assignments`;
CREATE TABLE IF NOT EXISTS `gb_assignments` (
  `aid` int(11) NOT NULL auto_increment,
  `gid` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Table structure for table `gb_assignstand`
--

DROP TABLE IF EXISTS `gb_assignstand`;
CREATE TABLE IF NOT EXISTS `gb_assignstand` (
  `aid` int(11) NOT NULL,
  `subject` varchar(254) NOT NULL,
  `level` varchar(254) NOT NULL,
  `std` varchar(254) NOT NULL,
  PRIMARY KEY  (`aid`,`subject`,`level`,`std`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gb_categories`
--

DROP TABLE IF EXISTS `gb_categories`;
CREATE TABLE IF NOT EXISTS `gb_categories` (
  `cid` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `catname` varchar(254) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `gb_catwt`
--

DROP TABLE IF EXISTS `gb_catwt`;
CREATE TABLE IF NOT EXISTS `gb_catwt` (
  `cwid` int(11) NOT NULL auto_increment,
  `gid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `weight` float NOT NULL,
  PRIMARY KEY  (`cwid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `gb_main`
--

DROP TABLE IF EXISTS `gb_main`;
CREATE TABLE IF NOT EXISTS `gb_main` (
  `gid` int(11) NOT NULL auto_increment,
  `lid` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `weighted` int(11) NOT NULL,
  PRIMARY KEY  (`gid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `gb_scores`
--

DROP TABLE IF EXISTS `gb_scores`;
CREATE TABLE IF NOT EXISTS `gb_scores` (
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY  (`aid`,`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gp`
--

DROP TABLE IF EXISTS `gp`;
CREATE TABLE IF NOT EXISTS `gp` (
  `gpid` int(11) NOT NULL auto_increment,
  `gpname` varchar(254) NOT NULL,
  `electives` int(11) NOT NULL,
  `side` int(11) NOT NULL,
  PRIMARY KEY  (`gpid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

DROP TABLE IF EXISTS `gpa`;
CREATE TABLE IF NOT EXISTS `gpa` (
  `gpaid` int(11) NOT NULL auto_increment,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY  (`gpaid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `gpa_list`
--

DROP TABLE IF EXISTS `gpa_list`;
CREATE TABLE IF NOT EXISTS `gpa_list` (
  `gpalistid` int(11) NOT NULL auto_increment,
  `gpaid` int(11) NOT NULL,
  `subject` varchar(254) NOT NULL,
  `level` varchar(254) NOT NULL,
  PRIMARY KEY  (`gpalistid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `gpa_select`
--

DROP TABLE IF EXISTS `gpa_select`;
CREATE TABLE IF NOT EXISTS `gpa_select` (
  `id` int(11) NOT NULL auto_increment,
  `gpaid` int(11) NOT NULL,
  `siteid` varchar(254) NOT NULL,
  `lowgrade` int(11) NOT NULL,
  `highgrade` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `gpelectives`
--

DROP TABLE IF EXISTS `gpelectives`;
CREATE TABLE IF NOT EXISTS `gpelectives` (
  `gpeid` int(11) NOT NULL auto_increment,
  `gpid` int(11) NOT NULL,
  `subject` varchar(254) NOT NULL,
  `level` varchar(254) NOT NULL,
  PRIMARY KEY  (`gpeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

-- --------------------------------------------------------

--
-- Table structure for table `gpvalues`
--

DROP TABLE IF EXISTS `gpvalues`;
CREATE TABLE IF NOT EXISTS `gpvalues` (
  `gpvid` int(11) NOT NULL auto_increment,
  `gpid` int(11) NOT NULL,
  `kind` int(11) NOT NULL,
  `loc` int(11) NOT NULL,
  `side` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `subject` varchar(254) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY  (`gpvid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `gradeid` int(11) NOT NULL auto_increment,
  `studentid` int(11) NOT NULL default '0',
  `subject` varchar(254) NOT NULL default '',
  `level` varchar(254) NOT NULL default '0',
  `std` varchar(254) NOT NULL default '',
  `value` text NOT NULL,
  `num` int(11) NOT NULL default '0',
  `psid` varchar(254) NOT NULL default '',
  `storecode` varchar(254) NOT NULL default '',
  `igrp` varchar(254) NOT NULL default '',
  `achange` varchar(254) NOT NULL default '',
  `trans2010` varchar(254) NOT NULL,
  PRIMARY KEY  (`gradeid`),
  KEY `studentid` (`studentid`),
  KEY `level` (`level`),
  KEY `std` (`std`),
  KEY `subject` (`subject`),
  KEY `num` (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=909701 ;

-- --------------------------------------------------------

--
-- Table structure for table `grp_info`
--

DROP TABLE IF EXISTS `grp_info`;
CREATE TABLE IF NOT EXISTS `grp_info` (
  `infoid` int(11) NOT NULL auto_increment,
  `tabid` int(11) NOT NULL,
  `ord` float NOT NULL,
  `kind` varchar(254) NOT NULL,
  `value` text NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY  (`infoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Table structure for table `grp_tab`
--

DROP TABLE IF EXISTS `grp_tab`;
CREATE TABLE IF NOT EXISTS `grp_tab` (
  `tabid` int(11) NOT NULL auto_increment,
  `listid` int(11) NOT NULL,
  `tabname` varchar(254) NOT NULL,
  `ord` float NOT NULL,
  PRIMARY KEY  (`tabid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `gs`
--

DROP TABLE IF EXISTS `gs`;
CREATE TABLE IF NOT EXISTS `gs` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(254) NOT NULL,
  `gradetype` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `gs_grades`
--

DROP TABLE IF EXISTS `gs_grades`;
CREATE TABLE IF NOT EXISTS `gs_grades` (
  `id` int(11) NOT NULL auto_increment,
  `gsid` int(11) NOT NULL,
  `symbol` varchar(254) NOT NULL,
  `high` int(11) NOT NULL,
  `low` int(11) NOT NULL,
  `val` int(11) NOT NULL,
  `points` float NOT NULL,
  `ord` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `gs_select`
--

DROP TABLE IF EXISTS `gs_select`;
CREATE TABLE IF NOT EXISTS `gs_select` (
  `id` int(11) NOT NULL auto_increment,
  `gsid` int(11) NOT NULL,
  `siteid` varchar(254) NOT NULL,
  `lowgrade` int(11) NOT NULL,
  `highgrade` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `siteid` (`siteid`,`lowgrade`,`highgrade`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL auto_increment,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ip` varchar(254) NOT NULL default '',
  `userID` int(254) NOT NULL default '0',
  `type` varchar(254) NOT NULL default '',
  `p1` varchar(254) NOT NULL default '',
  `p2` varchar(254) NOT NULL default '',
  `p3` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3136 ;

-- --------------------------------------------------------

--
-- Table structure for table `history2`
--

DROP TABLE IF EXISTS `history2`;
CREATE TABLE IF NOT EXISTS `history2` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(254) NOT NULL default '',
  `userid` varchar(254) NOT NULL default '',
  `ip` varchar(254) NOT NULL default '',
  `value` varchar(254) NOT NULL default '',
  `subject` varchar(254) NOT NULL default '',
  `lvl` varchar(254) NOT NULL default '',
  `std` varchar(254) NOT NULL default '',
  `timestamp` int(11) default NULL,
  `studentID` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `timestamp` (`timestamp`),
  KEY `userid` (`userid`),
  KEY `studentID` (`studentID`),
  KEY `history2_type` (`type`(10)),
  KEY `history2_std` (`std`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=175 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotlist`
--

DROP TABLE IF EXISTS `hotlist`;
CREATE TABLE IF NOT EXISTS `hotlist` (
  `grade` varchar(254) NOT NULL default '',
  `stage` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `neededmin` varchar(254) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `importgrp`
--

DROP TABLE IF EXISTS `importgrp`;
CREATE TABLE IF NOT EXISTS `importgrp` (
  `id` int(11) NOT NULL auto_increment,
  `timstamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL default '0',
  `type` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `subject` varchar(254) NOT NULL default '',
  `level` varchar(254) NOT NULL default '',
  `name` varchar(254) NOT NULL default '',
  `standardID` varchar(254) NOT NULL default '',
  `Identifier` varchar(254) NOT NULL default '',
  `numlevel` int(11) NOT NULL default '0',
  `weight` float NOT NULL default '0',
  KEY `subject` (`subject`),
  KEY `level` (`level`),
  KEY `numlevel` (`numlevel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level_int`
--

DROP TABLE IF EXISTS `level_int`;
CREATE TABLE IF NOT EXISTS `level_int` (
  `subject` varchar(254) NOT NULL default '',
  `level` int(8) NOT NULL,
  `name` varchar(254) NOT NULL default '',
  `standardID` varchar(254) NOT NULL default '',
  `Identifier` varchar(254) NOT NULL default '',
  `numlevel` int(11) NOT NULL default '0',
  `weight` float NOT NULL default '0',
  KEY `subject` (`subject`),
  KEY `level` (`level`),
  KEY `numlevel` (`numlevel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

DROP TABLE IF EXISTS `line`;
CREATE TABLE IF NOT EXISTS `line` (
  `grade` varchar(254) NOT NULL default '',
  `stage` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `value` varchar(254) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS `lists` (
  `userid` int(11) NOT NULL default '0',
  `type` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `sql` text NOT NULL,
  `listid` int(11) NOT NULL auto_increment,
  `listname` varchar(254) NOT NULL default '',
  `am` int(11) NOT NULL default '0',
  `pm` int(11) NOT NULL default '0',
  PRIMARY KEY  (`listid`),
  KEY `userid` (`userid`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14390 ;

-- --------------------------------------------------------

--
-- Table structure for table `lists1`
--

DROP TABLE IF EXISTS `lists1`;
CREATE TABLE IF NOT EXISTS `lists1` (
  `userid` int(11) NOT NULL default '0',
  `type` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `sql` text NOT NULL,
  `listid` int(11) NOT NULL auto_increment,
  `listname` varchar(254) NOT NULL default '',
  `am` int(11) NOT NULL default '0',
  `pm` int(11) NOT NULL default '0',
  PRIMARY KEY  (`listid`),
  KEY `userid` (`userid`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14428 ;

-- --------------------------------------------------------

--
-- Table structure for table `listshare`
--

DROP TABLE IF EXISTS `listshare`;
CREATE TABLE IF NOT EXISTS `listshare` (
  `listid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listshare1`
--

DROP TABLE IF EXISTS `listshare1`;
CREATE TABLE IF NOT EXISTS `listshare1` (
  `listid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listvalues`
--

DROP TABLE IF EXISTS `listvalues`;
CREATE TABLE IF NOT EXISTS `listvalues` (
  `listid` int(11) NOT NULL default '0',
  `studentid` int(11) NOT NULL default '0',
  KEY `listid` (`listid`),
  KEY `studentid` (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listvalues1`
--

DROP TABLE IF EXISTS `listvalues1`;
CREATE TABLE IF NOT EXISTS `listvalues1` (
  `listid` int(11) NOT NULL default '0',
  `studentid` int(11) NOT NULL default '0',
  KEY `listid` (`listid`),
  KEY `studentid` (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_members_tmp`
--

DROP TABLE IF EXISTS `list_members_tmp`;
CREATE TABLE IF NOT EXISTS `list_members_tmp` (
  `process_id` varchar(25) default NULL,
  `studentid` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loadtable`
--

DROP TABLE IF EXISTS `loadtable`;
CREATE TABLE IF NOT EXISTS `loadtable` (
  `param1` varchar(254) NOT NULL default '',
  `param2` varchar(254) NOT NULL default '',
  `param3` varchar(254) NOT NULL default '',
  `param4` varchar(254) NOT NULL default '',
  `param5` varchar(254) NOT NULL default '',
  `param6` varchar(254) NOT NULL default '',
  `param7` varchar(254) NOT NULL default '',
  `param8` varchar(254) NOT NULL default '',
  `param9` varchar(254) NOT NULL default '',
  `param10` varchar(254) NOT NULL default '',
  `mark` varchar(254) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

DROP TABLE IF EXISTS `movement`;
CREATE TABLE IF NOT EXISTS `movement` (
  `studentid` int(11) NOT NULL default '0',
  `exitcode` int(11) NOT NULL default '0',
  `exitlocation` varchar(254) NOT NULL default '',
  `exitdate` date NOT NULL default '0000-00-00',
  `exityear` int(11) NOT NULL default '0',
  `exitquarter` int(11) NOT NULL default '0',
  `exitgrade` varchar(254) NOT NULL default '',
  `entercode` int(11) NOT NULL default '0',
  `enterlocation` varchar(254) NOT NULL default '',
  `enterdate` date NOT NULL default '0000-00-00',
  `enteryear` int(11) NOT NULL default '0',
  `enterquarter` int(11) NOT NULL default '0',
  `entergrade` varchar(254) NOT NULL default '',
  `movementnotes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newtest`
--

DROP TABLE IF EXISTS `newtest`;
CREATE TABLE IF NOT EXISTS `newtest` (
  `tid` int(11) NOT NULL auto_increment,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `newtest_ind_test`
--

DROP TABLE IF EXISTS `newtest_ind_test`;
CREATE TABLE IF NOT EXISTS `newtest_ind_test` (
  `itid` int(11) NOT NULL auto_increment,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`itid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=300 ;

-- --------------------------------------------------------

--
-- Table structure for table `newtest_items`
--

DROP TABLE IF EXISTS `newtest_items`;
CREATE TABLE IF NOT EXISTS `newtest_items` (
  `tiid` int(11) NOT NULL auto_increment,
  `tid` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `kind` varchar(254) NOT NULL,
  PRIMARY KEY  (`tiid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `newtest_values`
--

DROP TABLE IF EXISTS `newtest_values`;
CREATE TABLE IF NOT EXISTS `newtest_values` (
  `tvid` int(11) NOT NULL auto_increment,
  `itid` int(11) NOT NULL,
  `tiid` int(11) NOT NULL,
  `val` varchar(254) NOT NULL,
  PRIMARY KEY  (`tvid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=891 ;

-- --------------------------------------------------------

--
-- Table structure for table `nextlevel`
--

DROP TABLE IF EXISTS `nextlevel`;
CREATE TABLE IF NOT EXISTS `nextlevel` (
  `subject` varchar(254) NOT NULL default '',
  `level` varchar(254) NOT NULL default '',
  `nextlevel` varchar(254) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pwd_recovery`
--

DROP TABLE IF EXISTS `pwd_recovery`;
CREATE TABLE IF NOT EXISTS `pwd_recovery` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `userid` int(11) default NULL,
  `code` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `pwd_recovery_students`
--

DROP TABLE IF EXISTS `pwd_recovery_students`;
CREATE TABLE IF NOT EXISTS `pwd_recovery_students` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `studentid` int(11) default NULL,
  `code` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quarters`
--

DROP TABLE IF EXISTS `quarters`;
CREATE TABLE IF NOT EXISTS `quarters` (
  `year` int(11) NOT NULL default '0',
  `quarter` int(11) NOT NULL default '0',
  `start` date NOT NULL default '0000-00-00',
  `finish` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`year`,`quarter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quarters1`
--

DROP TABLE IF EXISTS `quarters1`;
CREATE TABLE IF NOT EXISTS `quarters1` (
  `year` int(11) NOT NULL default '0',
  `quarter` int(11) NOT NULL default '0',
  `start` date NOT NULL default '0000-00-00',
  `finish` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`year`,`quarter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

DROP TABLE IF EXISTS `repair`;
CREATE TABLE IF NOT EXISTS `repair` (
  `studentid` varchar(254) NOT NULL default '',
  `subject` varchar(254) NOT NULL default '',
  `level` varchar(254) NOT NULL default '',
  `progress` varchar(254) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repnotes`
--

DROP TABLE IF EXISTS `repnotes`;
CREATE TABLE IF NOT EXISTS `repnotes` (
  `timeframe` varchar(254) NOT NULL default '',
  `site` varchar(254) NOT NULL default '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repnotes1`
--

DROP TABLE IF EXISTS `repnotes1`;
CREATE TABLE IF NOT EXISTS `repnotes1` (
  `timeframe` varchar(254) NOT NULL default '',
  `site` varchar(254) NOT NULL default '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reportlist`
--

DROP TABLE IF EXISTS `reportlist`;
CREATE TABLE IF NOT EXISTS `reportlist` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL default '0',
  `studentid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=313531 ;

-- --------------------------------------------------------

--
-- Table structure for table `SchoolCalendar`
--

DROP TABLE IF EXISTS `SchoolCalendar`;
CREATE TABLE IF NOT EXISTS `SchoolCalendar` (
  `CalendarID` int(11) NOT NULL auto_increment,
  `SiteID` varchar(254) NOT NULL default '',
  `SchoolYear` int(11) NOT NULL default '2007',
  `Description` varchar(255) default 'School Calendar 2007-2008',
  `ApprovedBy` varchar(255) default 'Jim Hickerson, Superintendent',
  `StartDate` date default '2007-08-01',
  `EndDate` date default '2008-06-30',
  PRIMARY KEY  (`CalendarID`),
  UNIQUE KEY `SiteID` (`SiteID`,`SchoolYear`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

-- --------------------------------------------------------

--
-- Table structure for table `SchoolEventCodeGroups`
--

DROP TABLE IF EXISTS `SchoolEventCodeGroups`;
CREATE TABLE IF NOT EXISTS `SchoolEventCodeGroups` (
  `CodeID` int(11) NOT NULL default '0',
  `GroupID` int(11) NOT NULL default '0',
  PRIMARY KEY  (`CodeID`,`GroupID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SchoolEventCodes`
--

DROP TABLE IF EXISTS `SchoolEventCodes`;
CREATE TABLE IF NOT EXISTS `SchoolEventCodes` (
  `CodeID` int(11) NOT NULL default '0',
  `Code` varchar(5) NOT NULL default '',
  `Description` varchar(255) default NULL,
  `IsRequired` tinyint(1) NOT NULL default '0',
  `Color` varchar(6) default NULL,
  PRIMARY KEY  (`CodeID`),
  UNIQUE KEY `Code` (`Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SchoolEventGroups`
--

DROP TABLE IF EXISTS `SchoolEventGroups`;
CREATE TABLE IF NOT EXISTS `SchoolEventGroups` (
  `GroupID` int(11) NOT NULL auto_increment,
  `Description` varchar(255) default NULL,
  PRIMARY KEY  (`GroupID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `SchoolEvents`
--

DROP TABLE IF EXISTS `SchoolEvents`;
CREATE TABLE IF NOT EXISTS `SchoolEvents` (
  `CalendarID` int(11) NOT NULL default '0',
  `Date` date NOT NULL default '0000-00-00',
  `CodeID` int(11) default NULL,
  PRIMARY KEY  (`CalendarID`,`Date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scoreweight`
--

DROP TABLE IF EXISTS `scoreweight`;
CREATE TABLE IF NOT EXISTS `scoreweight` (
  `subjectid` varchar(254) NOT NULL default '',
  `weight_2` float NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfainfo`
--

DROP TABLE IF EXISTS `sfainfo`;
CREATE TABLE IF NOT EXISTS `sfainfo` (
  `year` varchar(254) NOT NULL default '',
  `base_date` varchar(254) NOT NULL default '',
  `first_date` varchar(254) NOT NULL default '',
  `second_date` varchar(254) NOT NULL default '',
  `third_date` varchar(254) NOT NULL default '',
  `fourth_date` varchar(254) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfascores`
--

DROP TABLE IF EXISTS `sfascores`;
CREATE TABLE IF NOT EXISTS `sfascores` (
  `year` varchar(254) NOT NULL default '',
  `studentid` varchar(254) NOT NULL default '',
  `gradelevel` varchar(254) NOT NULL default '',
  `site` varchar(254) NOT NULL default '',
  `homeroom` varchar(254) NOT NULL default '',
  `base_reading` varchar(254) NOT NULL default '',
  `base_rawscore` varchar(254) NOT NULL default '',
  `base_score` varchar(254) NOT NULL default '',
  `base_rr` varchar(254) NOT NULL default '',
  `first_reading` varchar(254) NOT NULL default '',
  `first_rawscore` varchar(254) NOT NULL default '',
  `first_score` varchar(254) NOT NULL default '',
  `first_rr` varchar(254) NOT NULL default '',
  `second_reading` varchar(254) NOT NULL default '',
  `second_rawscore` varchar(254) NOT NULL default '',
  `second_score` varchar(254) NOT NULL default '',
  `second_rr` varchar(254) NOT NULL default '',
  `third_reading` varchar(254) NOT NULL default '',
  `third_rawscore` varchar(254) NOT NULL default '',
  `third_score` varchar(254) NOT NULL default '',
  `third_rr` varchar(254) NOT NULL default '',
  `fourth_reading` varchar(254) NOT NULL default '',
  `fourth_rawscore` varchar(254) NOT NULL default '',
  `fourth_score` varchar(254) NOT NULL default '',
  `fourth_rr` varchar(254) NOT NULL default '',
  `base_sfa` varchar(254) NOT NULL default '',
  `first_sfa` varchar(254) NOT NULL default '',
  `second_sfa` varchar(254) NOT NULL default '',
  `third_sfa` varchar(254) NOT NULL default '',
  `base_expect` varchar(254) NOT NULL default '',
  `first_expect` varchar(254) NOT NULL default '',
  `second_expect` varchar(254) NOT NULL default '',
  `third_expect` varchar(254) NOT NULL default '',
  `base_tutor` varchar(254) NOT NULL default '',
  `first_tutor` varchar(254) NOT NULL default '',
  `second_tutor` varchar(254) NOT NULL default '',
  `third_tutor` varchar(254) NOT NULL default '',
  `base_hlremove` varchar(254) NOT NULL default '',
  `first_hlremove` varchar(254) NOT NULL default '',
  `second_hlremove` varchar(254) NOT NULL default '',
  `third_hlremove` varchar(254) NOT NULL default '',
  `fourth_hlremove` varchar(254) NOT NULL default '',
  `base_stime` varchar(254) NOT NULL default '',
  `base_etime` varchar(254) NOT NULL default '',
  `first_stime` varchar(254) NOT NULL default '',
  `first_etime` varchar(254) NOT NULL default '',
  `second_stime` varchar(254) NOT NULL default '',
  `second_etime` varchar(254) NOT NULL default '',
  `third_stime` varchar(254) NOT NULL default '',
  `third_etime` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`),
  KEY `year` (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sip`
--

DROP TABLE IF EXISTS `sip`;
CREATE TABLE IF NOT EXISTS `sip` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `test` varchar(254) NOT NULL default '',
  `listid` int(11) NOT NULL default '0',
  `site` varchar(254) NOT NULL default '',
  `area` varchar(254) NOT NULL default '',
  `owner` int(11) NOT NULL default '0',
  `year` varchar(254) NOT NULL default '',
  `status` varchar(254) NOT NULL default '',
  `datecreated` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3841 ;

-- --------------------------------------------------------

--
-- Table structure for table `sipaction`
--

DROP TABLE IF EXISTS `sipaction`;
CREATE TABLE IF NOT EXISTS `sipaction` (
  `aid` int(11) NOT NULL auto_increment,
  `sid` int(11) NOT NULL default '0',
  `area` varchar(254) NOT NULL default '',
  `action` text NOT NULL,
  `person` varchar(254) NOT NULL default '',
  `ptype` varchar(254) NOT NULL default '',
  `timeline` varchar(254) NOT NULL default '',
  `eval` text NOT NULL,
  `final` text NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5807 ;

-- --------------------------------------------------------

--
-- Table structure for table `sipaux`
--

DROP TABLE IF EXISTS `sipaux`;
CREATE TABLE IF NOT EXISTS `sipaux` (
  `sid` int(11) NOT NULL default '0',
  `subjectorder` text NOT NULL,
  `graderating` text NOT NULL,
  `emphasisR` varchar(254) NOT NULL default '',
  `emphasisW` varchar(254) NOT NULL default '',
  `emphasisM` varchar(254) NOT NULL default '',
  `district` text NOT NULL,
  `stateques` text NOT NULL,
  `link` text NOT NULL,
  `ques2` text NOT NULL,
  `link2` text NOT NULL,
  `ques3` text NOT NULL,
  `link3` text NOT NULL,
  `ques4` text NOT NULL,
  `link4` text NOT NULL,
  `r1` text NOT NULL,
  `r2` text NOT NULL,
  `r3` text NOT NULL,
  `r4` text NOT NULL,
  `w1` text NOT NULL,
  `w2` text NOT NULL,
  `w3` text NOT NULL,
  `w4` text NOT NULL,
  `m1` text NOT NULL,
  `m2` text NOT NULL,
  `m3` text NOT NULL,
  `m4` text NOT NULL,
  `i1` text NOT NULL,
  `i2` text NOT NULL,
  `i3` text NOT NULL,
  `i4` text NOT NULL,
  `g11` varchar(4) NOT NULL default '',
  `g12` varchar(4) NOT NULL default '',
  `g13` varchar(4) NOT NULL default '',
  `g14` varchar(4) NOT NULL default '',
  `g15` varchar(4) NOT NULL default '',
  `g21` varchar(4) NOT NULL default '',
  `g22` varchar(4) NOT NULL default '',
  `g23` varchar(4) NOT NULL default '',
  `g24` varchar(4) NOT NULL default '',
  `g25` varchar(4) NOT NULL default '',
  `g31` varchar(4) NOT NULL default '',
  `g32` varchar(4) NOT NULL default '',
  `g33` varchar(4) NOT NULL default '',
  `g34` varchar(4) NOT NULL default '',
  `g35` varchar(4) NOT NULL default '',
  `g41` varchar(4) NOT NULL default '',
  `g42` varchar(4) NOT NULL default '',
  `g43` varchar(4) NOT NULL default '',
  `g44` varchar(4) NOT NULL default '',
  `g45` varchar(4) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siptestfields`
--

DROP TABLE IF EXISTS `siptestfields`;
CREATE TABLE IF NOT EXISTS `siptestfields` (
  `name` varchar(254) NOT NULL default '',
  `value` varchar(254) NOT NULL default '',
  `tip` varchar(254) NOT NULL default '',
  `test` varchar(254) NOT NULL default '',
  `year` varchar(254) NOT NULL default '',
  `ord` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `siteid` varchar(5) NOT NULL default '',
  `name` varchar(254) NOT NULL default '',
  `logo` varchar(254) NOT NULL default '',
  `schoolNumber` varchar(254) NOT NULL default '',
  `schoolID` varchar(254) NOT NULL default '',
  `village` varchar(254) NOT NULL default '',
  `classic` text NOT NULL,
  `important` text NOT NULL,
  `warning` text NOT NULL,
  `tip` text NOT NULL,
  `order` int(11) NOT NULL default '0',
  `ssite` varchar(10) NOT NULL,
  PRIMARY KEY  (`siteid`),
  KEY `order` (`order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_real`
--

DROP TABLE IF EXISTS `site_real`;
CREATE TABLE IF NOT EXISTS `site_real` (
  `siteid` varchar(254) NOT NULL default '',
  `name` varchar(254) NOT NULL default '',
  `logo` varchar(254) NOT NULL default '',
  `schoolNumber` varchar(254) NOT NULL default '',
  `schoolID` varchar(254) NOT NULL default '',
  `village` varchar(254) NOT NULL default '',
  `classic` text NOT NULL,
  `important` text NOT NULL,
  `warning` text NOT NULL,
  `tip` text NOT NULL,
  `order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`siteid`),
  KEY `order` (`order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `speddata`
--

DROP TABLE IF EXISTS `speddata`;
CREATE TABLE IF NOT EXISTS `speddata` (
  `studentid` int(11) NOT NULL default '0',
  `Sped_Status` varchar(254) NOT NULL,
  `GoalViewID` varchar(254) NOT NULL,
  `dc` varchar(254) NOT NULL default '',
  `pcode` varchar(254) NOT NULL default '',
  `pcode_old` varchar(254) NOT NULL,
  `referral` date NOT NULL,
  `entrysped` date NOT NULL default '0000-00-00',
  `iepstart` date NOT NULL default '0000-00-00',
  `iepend` date NOT NULL default '0000-00-00',
  `percent` varchar(254) NOT NULL default '',
  `psyreeval` date NOT NULL default '0000-00-00',
  `splangreeval` date NOT NULL default '0000-00-00',
  `eser` date NOT NULL default '0000-00-00',
  `exitdate` date NOT NULL default '0000-00-00',
  `exitreason` text NOT NULL,
  `testac` varchar(254) NOT NULL default '',
  `rs_sp_lang` varchar(254) NOT NULL default '',
  `rs_gross_motor` varchar(254) NOT NULL default '',
  `rs_fine_motor` varchar(254) NOT NULL default '',
  `cos_1` varchar(254) NOT NULL default '',
  `cos_2` varchar(254) NOT NULL default '',
  `cos_3` varchar(254) NOT NULL default '',
  `childfind` varchar(254) NOT NULL default '',
  `ect` varchar(254) NOT NULL default '',
  `sec_trans` varchar(254) NOT NULL default '',
  `pso` varchar(254) NOT NULL default '',
  `count` varchar(254) NOT NULL default '',
  `lre` varchar(254) NOT NULL default '',
  `behaviorplan` varchar(254) NOT NULL default '',
  `Last_OT_Eval` date NOT NULL,
  `Last_PT_Eval` date NOT NULL,
  `Other_Eval` varchar(254) NOT NULL,
  `Other_Eval_Date` date NOT NULL,
  `Current_ESER` date NOT NULL,
  `ESER_plus3` date NOT NULL,
  `Latest_Consent` varchar(254) NOT NULL,
  `45_Days` varchar(254) NOT NULL,
  `Reason_Code` varchar(254) NOT NULL,
  `SpEd_Exit_Date` date NOT NULL,
  `SpEd_Exit_Code` varchar(254) NOT NULL,
  `IEPLessAge3` varchar(254) NOT NULL,
  `Trans_Plan` varchar(254) NOT NULL,
  `ISS` varchar(254) NOT NULL,
  `OSS` varchar(254) NOT NULL,
  `MD_Held` varchar(254) NOT NULL,
  `Test_AC` varchar(254) NOT NULL,
  `Mod_HSGQE` varchar(254) NOT NULL,
  `Alt_Assmt` varchar(254) NOT NULL,
  `Int_Needs` varchar(254) NOT NULL,
  `RS_Sp` varchar(254) NOT NULL,
  `RS_FM` varchar(254) NOT NULL,
  `RS_GM` varchar(254) NOT NULL,
  `RS_Coun` varchar(254) NOT NULL,
  `RS_Tran` varchar(254) NOT NULL,
  `RS_Other` varchar(254) NOT NULL,
  `H_Aid` varchar(254) NOT NULL,
  `spedcomments` text NOT NULL,
  `Add_45_Days` varchar(254) NOT NULL,
  `LEP_Status` varchar(254) NOT NULL,
  PRIMARY KEY  (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `speddata_7 in common`
--

DROP TABLE IF EXISTS `speddata_7 in common`;
CREATE TABLE IF NOT EXISTS `speddata_7 in common` (
  `studentid` int(11) NOT NULL default '0',
  `Sped_Status` varchar(254) NOT NULL,
  `GoalViewID` varchar(254) NOT NULL,
  `dc` varchar(254) NOT NULL default '',
  `pcode` varchar(254) NOT NULL default '',
  `pcode_old` varchar(254) NOT NULL,
  `referral` date NOT NULL,
  `entrysped` date NOT NULL default '0000-00-00',
  `iepstart` date NOT NULL default '0000-00-00',
  `iepend` date NOT NULL default '0000-00-00',
  `percent` varchar(254) NOT NULL default '',
  `psyreeval` date NOT NULL default '0000-00-00',
  `splangreeval` date NOT NULL default '0000-00-00',
  `eser` date NOT NULL default '0000-00-00',
  `exitdate` date NOT NULL default '0000-00-00',
  `exitreason` text NOT NULL,
  `testac` varchar(254) NOT NULL default '',
  `testacreading` varchar(254) NOT NULL,
  `testacwriting` varchar(254) NOT NULL,
  `testacmath` varchar(254) NOT NULL,
  `testacscience` varchar(254) NOT NULL,
  `rs_sp_lang` varchar(254) NOT NULL default '',
  `rs_gross_motor` varchar(254) NOT NULL default '',
  `rs_fine_motor` varchar(254) NOT NULL default '',
  `cos_1` varchar(254) NOT NULL default '',
  `cos_2` varchar(254) NOT NULL default '',
  `cos_3` varchar(254) NOT NULL default '',
  `childfind` varchar(254) NOT NULL default '',
  `ect` varchar(254) NOT NULL default '',
  `sec_trans` varchar(254) NOT NULL default '',
  `pso` varchar(254) NOT NULL default '',
  `count` varchar(254) NOT NULL default '',
  `lre` varchar(254) NOT NULL default '',
  `behaviorplan` varchar(254) NOT NULL default '',
  `Last_OT_Eval` date NOT NULL,
  `Last_PT_Eval` date NOT NULL,
  `Other_Eval` varchar(254) NOT NULL,
  `Other_Eval_Date` date NOT NULL,
  `Current_ESER` date NOT NULL,
  `ESER_plus3` date NOT NULL,
  `Latest_Consent` varchar(254) NOT NULL,
  `45_Days` varchar(254) NOT NULL,
  `Reason_Code` varchar(254) NOT NULL,
  `SpEd_Exit_Date` date NOT NULL,
  `SpEd_Exit_Code` varchar(254) NOT NULL,
  `IEPLessAge3` varchar(254) NOT NULL,
  `Trans_Plan` varchar(254) NOT NULL,
  `ISS` varchar(254) NOT NULL,
  `OSS` varchar(254) NOT NULL,
  `MD_Held` varchar(254) NOT NULL,
  `Test_AC` varchar(254) NOT NULL,
  `Mod_HSGQE` varchar(254) NOT NULL,
  `Alt_Assmt` varchar(254) NOT NULL,
  `Int_Needs` varchar(254) NOT NULL,
  `RS_Sp` varchar(254) NOT NULL,
  `RS_FM` varchar(254) NOT NULL,
  `RS_GM` varchar(254) NOT NULL,
  `RS_Coun` varchar(254) NOT NULL,
  `RS_Tran` varchar(254) NOT NULL,
  `RS_Other` varchar(254) NOT NULL,
  `H_Aid` varchar(254) NOT NULL,
  `spedcomments` text NOT NULL,
  `Add_45_Days` varchar(254) NOT NULL,
  `LEP_Status` varchar(254) NOT NULL,
  PRIMARY KEY  (`studentid`),
  KEY `entrysped` (`entrysped`),
  KEY `exitdate` (`exitdate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sped_aux`
--

DROP TABLE IF EXISTS `sped_aux`;
CREATE TABLE IF NOT EXISTS `sped_aux` (
  `spedid` int(11) NOT NULL auto_increment,
  `studentid` varchar(255) default NULL,
  `percent` varchar(255) default NULL,
  `AT` varchar(255) default NULL,
  `EC` varchar(255) default NULL,
  `End` varchar(255) default NULL,
  `Entry` varchar(255) default NULL,
  `ESER` varchar(255) default NULL,
  `aLeave` varchar(255) default NULL,
  `GR` varchar(255) default NULL,
  `HC` varchar(255) default NULL,
  `HC2` varchar(255) default NULL,
  `Month` varchar(255) default NULL,
  `Month_IEP` varchar(255) default NULL,
  `Month_Psy` varchar(255) default NULL,
  `OT` varchar(255) default NULL,
  `Psy` varchar(255) default NULL,
  `Psy_ReEval` varchar(255) default NULL,
  `PT` varchar(255) default NULL,
  `Sp` varchar(255) default NULL,
  `Sp_Code` varchar(255) default NULL,
  `Sp_ReEval` varchar(255) default NULL,
  `Start` varchar(255) default NULL,
  `SUR_P` varchar(255) default NULL,
  `S_L` varchar(255) default NULL,
  `Test_AC` varchar(255) default NULL,
  `Total` varchar(255) default NULL,
  `TRP` varchar(255) default NULL,
  `TRS` varchar(255) default NULL,
  `Agency` varchar(255) default NULL,
  `Code` varchar(255) default NULL,
  `Today` varchar(255) default NULL,
  `spedcomments` text NOT NULL,
  `LEP_Status` varchar(254) NOT NULL,
  `Add_45_Days` varchar(254) NOT NULL,
  PRIMARY KEY  (`spedid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

DROP TABLE IF EXISTS `standards`;
CREATE TABLE IF NOT EXISTS `standards` (
  `id` varchar(254) NOT NULL default '',
  `subject` varchar(254) NOT NULL default '',
  `level` varchar(254) NOT NULL default '0',
  `type` varchar(254) NOT NULL default '',
  `std` varchar(254) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  `description` text NOT NULL,
  `shortname` varchar(254) NOT NULL default '',
  `link` varchar(254) NOT NULL default '',
  `standardID` varchar(254) NOT NULL default '',
  `Identifier` varchar(254) NOT NULL default '',
  `numlevel` int(11) NOT NULL default '0',
  KEY `subject` (`subject`),
  KEY `level` (`level`),
  KEY `type` (`type`),
  KEY `std` (`std`),
  KEY `order` (`order`),
  KEY `shortname` (`shortname`),
  KEY `link` (`link`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentid` int(11) NOT NULL auto_increment,
  `fname` varchar(24) NOT NULL default '',
  `mname` varchar(24) NOT NULL default '',
  `lname` varchar(24) NOT NULL default '',
  `status` enum('Active','Inactive') NOT NULL default 'Active',
  `code` varchar(10) NOT NULL default '',
  `extID` varchar(10) NOT NULL default '0',
  `site` varchar(5) NOT NULL default '',
  `present` float NOT NULL default '0',
  `absent` float NOT NULL default '0',
  `attper` decimal(10,0) NOT NULL default '0',
  `picture` varchar(128) NOT NULL default '',
  `addr` varchar(254) NOT NULL default '',
  `village` varchar(254) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `zip` varchar(10) NOT NULL default '',
  `phone` varchar(24) NOT NULL default '',
  `email` varchar(64) NOT NULL default '',
  `dartid` varchar(254) NOT NULL default '',
  `user` varchar(64) NOT NULL default '',
  `pwd` varchar(128) NOT NULL default '',
  `alaskaid` bigint(254) NOT NULL,
  `psid` varchar(254) NOT NULL default '',
  `grade` int(254) NOT NULL,
  `bday` date NOT NULL default '0000-00-00',
  `age` varchar(254) NOT NULL default '',
  `latestenroll` varchar(254) NOT NULL default '',
  `gender` varchar(254) NOT NULL default '',
  `nslp` varchar(254) NOT NULL default '',
  `ethnicity` varchar(254) NOT NULL default '',
  `NSLPEligible` varchar(254) NOT NULL default '',
  `migrant` varchar(254) NOT NULL default '',
  `attendance` varchar(254) NOT NULL default '',
  `lastUpdate` varchar(254) NOT NULL default '',
  `eligibility` varchar(254) NOT NULL default '',
  `SpED_IEP` varchar(254) NOT NULL default '',
  `LEPStatus` varchar(254) NOT NULL default '',
  `LEPStatus y/n` varchar(254) NOT NULL default '',
  `nativeEd` date NOT NULL default '0000-00-00',
  `titleI` varchar(254) NOT NULL default '',
  `sec504` varchar(254) NOT NULL default '',
  `relatedServices` varchar(254) NOT NULL default '',
  `behaviorPlan` varchar(254) NOT NULL default '',
  `GTPlan` varchar(254) NOT NULL default '',
  `HSGQEReading` varchar(254) NOT NULL default '',
  `SRI` varchar(254) NOT NULL default '',
  `HSGQEWriting` varchar(254) NOT NULL default '',
  `STAR` varchar(254) NOT NULL default '',
  `HSGQEMath` varchar(254) NOT NULL default '',
  `scores` varchar(24) NOT NULL default '',
  `mark` varchar(254) NOT NULL default '',
  `mark2` varchar(254) NOT NULL default '',
  `sped` char(1) NOT NULL default 'N',
  `maddr` varchar(128) NOT NULL default '',
  `siblings` tinytext NOT NULL,
  `siblingsnames` tinytext NOT NULL,
  `parent` varchar(128) NOT NULL default '',
  `parentphone` varchar(24) NOT NULL default '',
  `parentmaddr` varchar(128) NOT NULL default '',
  `parentaddr` varchar(128) NOT NULL default '',
  `parentvillage` varchar(64) NOT NULL default '',
  `parentzip` varchar(10) NOT NULL default '',
  `parentwstudent` enum('Y','N','') NOT NULL default '',
  `snotes` tinytext NOT NULL,
  `testing` tinytext NOT NULL,
  `additional` tinytext NOT NULL,
  `extracurricular` tinytext NOT NULL,
  `gpid` int(11) NOT NULL,
  `GPA` float NOT NULL,
  PRIMARY KEY  (`studentid`),
  KEY `site` (`site`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=671094 ;

-- --------------------------------------------------------

--
-- Table structure for table `student backup`
--

DROP TABLE IF EXISTS `student backup`;
CREATE TABLE IF NOT EXISTS `student backup` (
  `studentid` int(11) NOT NULL auto_increment,
  `fname` varchar(24) NOT NULL default '',
  `mname` varchar(24) NOT NULL default '',
  `lname` varchar(24) NOT NULL default '',
  `status` enum('Active','Inactive') NOT NULL default 'Active',
  `code` varchar(10) NOT NULL default '',
  `extID` varchar(10) NOT NULL default '0',
  `site` varchar(5) NOT NULL default '',
  `present` float NOT NULL default '0',
  `absent` float NOT NULL default '0',
  `attper` decimal(10,0) NOT NULL default '0',
  `picture` varchar(128) NOT NULL default '',
  `addr` varchar(254) NOT NULL default '',
  `village` varchar(254) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `zip` varchar(10) NOT NULL default '',
  `phone` varchar(24) NOT NULL default '',
  `email` varchar(64) NOT NULL default '',
  `dartid` varchar(254) NOT NULL default '',
  `user` varchar(64) NOT NULL default '',
  `pwd` varchar(128) NOT NULL default '',
  `alaskaid` bigint(254) NOT NULL,
  `psid` varchar(254) NOT NULL default '',
  `grade` int(254) NOT NULL,
  `bday` date NOT NULL default '0000-00-00',
  `age` varchar(254) NOT NULL default '',
  `latestenroll` varchar(254) NOT NULL default '',
  `gender` varchar(254) NOT NULL default '',
  `nslp` varchar(254) NOT NULL default '',
  `ethnicity` varchar(254) NOT NULL default '',
  `NSLPEligible` varchar(254) NOT NULL default '',
  `migrant` varchar(254) NOT NULL default '',
  `attendance` varchar(254) NOT NULL default '',
  `lastUpdate` varchar(254) NOT NULL default '',
  `eligibility` varchar(254) NOT NULL default '',
  `SpED_IEP` varchar(254) NOT NULL default '',
  `LEP` varchar(254) NOT NULL default '',
  `LEPStatus` varchar(254) NOT NULL default '',
  `nativeEd` date NOT NULL default '0000-00-00',
  `titleI` varchar(254) NOT NULL default '',
  `sec504` varchar(254) NOT NULL default '',
  `relatedServices` varchar(254) NOT NULL default '',
  `behaviorPlan` varchar(254) NOT NULL default '',
  `GTPlan` varchar(254) NOT NULL default '',
  `HSGQEReading` varchar(254) NOT NULL default '',
  `SRI` varchar(254) NOT NULL default '',
  `HSGQEWriting` varchar(254) NOT NULL default '',
  `STAR` varchar(254) NOT NULL default '',
  `HSGQEMath` varchar(254) NOT NULL default '',
  `scores` varchar(24) NOT NULL default '',
  `mark` varchar(254) NOT NULL default '',
  `mark2` varchar(254) NOT NULL default '',
  `sped` char(1) NOT NULL default 'N',
  `maddr` varchar(128) NOT NULL default '',
  `siblings` tinytext NOT NULL,
  `siblingsnames` tinytext NOT NULL,
  `parent` varchar(128) NOT NULL default '',
  `parentphone` varchar(24) NOT NULL default '',
  `parentmaddr` varchar(128) NOT NULL default '',
  `parentaddr` varchar(128) NOT NULL default '',
  `parentvillage` varchar(64) NOT NULL default '',
  `parentzip` varchar(10) NOT NULL default '',
  `parentwstudent` enum('Y','N','') NOT NULL default '',
  `snotes` tinytext NOT NULL,
  `testing` tinytext NOT NULL,
  `additional` tinytext NOT NULL,
  `extracurricular` tinytext NOT NULL,
  `gpid` int(11) NOT NULL,
  PRIMARY KEY  (`studentid`),
  KEY `site` (`site`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1934 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentlevel`
--

DROP TABLE IF EXISTS `studentlevel`;
CREATE TABLE IF NOT EXISTS `studentlevel` (
  `studentid` int(11) NOT NULL default '0',
  `subject` varchar(254) NOT NULL default '',
  `level` varchar(254) default NULL,
  `progress` varchar(254) NOT NULL default 'EMG',
  `spoints` float NOT NULL,
  `sweight` float NOT NULL,
  `percentcomp` float NOT NULL,
  `avg` float NOT NULL,
  `start` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `final` timestamp NOT NULL default '0000-00-00 00:00:00',
  `change_username` varchar(254) NOT NULL default '',
  `change_user` int(11) NOT NULL default '0',
  `change_timestamp` int(11) NOT NULL default '0',
  `igrp` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`),
  KEY `subject` (`subject`),
  KEY `level` (`level`),
  KEY `progress` (`progress`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentmap`
--

DROP TABLE IF EXISTS `studentmap`;
CREATE TABLE IF NOT EXISTS `studentmap` (
  `studentid` varchar(254) NOT NULL default '',
  `fakestudentid` int(254) NOT NULL auto_increment,
  `fakealaskaid` varchar(254) NOT NULL default '',
  `fname` varchar(254) NOT NULL default '',
  `lname` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`fakestudentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1672 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentmovement`
--

DROP TABLE IF EXISTS `studentmovement`;
CREATE TABLE IF NOT EXISTS `studentmovement` (
  `studentid` int(11) NOT NULL default '0',
  `kind` varchar(254) NOT NULL default '',
  `code` text NOT NULL,
  `date` date NOT NULL default '0000-00-00',
  `site` varchar(254) NOT NULL default '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_real`
--

DROP TABLE IF EXISTS `student_real`;
CREATE TABLE IF NOT EXISTS `student_real` (
  `studentid` int(11) NOT NULL auto_increment,
  `fname` varchar(254) NOT NULL default '',
  `mname` varchar(254) NOT NULL default '',
  `lname` varchar(254) NOT NULL default '',
  `status` varchar(254) NOT NULL default '',
  `code` varchar(254) NOT NULL default '',
  `extID` varchar(254) NOT NULL default '0',
  `site` varchar(254) NOT NULL default '',
  `present` float NOT NULL default '0',
  `absent` float NOT NULL default '0',
  `attper` decimal(10,0) NOT NULL default '0',
  `picture` varchar(254) NOT NULL default '',
  `addr` varchar(254) NOT NULL default '',
  `village` varchar(254) NOT NULL default '',
  `state` varchar(254) NOT NULL default '',
  `zip` varchar(254) NOT NULL default '',
  `phone` varchar(254) NOT NULL default '',
  `email` varchar(254) NOT NULL default '',
  `dartid` varchar(254) NOT NULL default '',
  `user` varchar(254) NOT NULL default '',
  `pwd` varchar(254) NOT NULL default '',
  `alaskaid` varchar(254) NOT NULL default '',
  `psid` varchar(254) NOT NULL default '',
  `grade` varchar(254) NOT NULL default '',
  `bday_old` varchar(254) NOT NULL default '',
  `bday` date NOT NULL default '0000-00-00',
  `age` varchar(254) NOT NULL default '',
  `latestenroll` varchar(254) NOT NULL default '',
  `gender` varchar(254) NOT NULL default '',
  `nslp` varchar(254) NOT NULL default '',
  `ethnicity` varchar(254) NOT NULL default '',
  `NSLPEligible` varchar(254) NOT NULL default '',
  `migrant` varchar(254) NOT NULL default '',
  `attendance` varchar(254) NOT NULL default '',
  `lastUpdate` varchar(254) NOT NULL default '',
  `eligibility` varchar(254) NOT NULL default '',
  `SpED_IEP` varchar(254) NOT NULL default '',
  `LEP` varchar(254) NOT NULL default '',
  `LEPStatus` varchar(254) NOT NULL default '',
  `nativeEd` date NOT NULL default '0000-00-00',
  `titleI` varchar(254) NOT NULL default '',
  `sec504` varchar(254) NOT NULL default '',
  `relatedServices` varchar(254) NOT NULL default '',
  `behaviorPlan` varchar(254) NOT NULL default '',
  `GTPlan` varchar(254) NOT NULL default '',
  `HSGQEReading` varchar(254) NOT NULL default '',
  `SRI` varchar(254) NOT NULL default '',
  `HSGQEWriting` varchar(254) NOT NULL default '',
  `STAR` varchar(254) NOT NULL default '',
  `HSGQEMath` varchar(254) NOT NULL default '',
  `scores` varchar(254) NOT NULL default '',
  `mark` varchar(254) NOT NULL default '',
  `mark2` varchar(254) NOT NULL default '',
  `sped` varchar(254) NOT NULL default 'N',
  `maddr` varchar(254) NOT NULL default '',
  `siblings` varchar(254) NOT NULL default '',
  `siblingsnames` text NOT NULL,
  `parent` varchar(254) NOT NULL default '',
  `parentphone` varchar(254) NOT NULL default '',
  `parentmaddr` varchar(254) NOT NULL default '',
  `parentaddr` varchar(254) NOT NULL default '',
  `parentvillage` varchar(254) NOT NULL default '',
  `parentzip` varchar(254) NOT NULL default '',
  `parentwstudent` varchar(254) NOT NULL default '',
  `snotes` text NOT NULL,
  `testing` text NOT NULL,
  `additional` text NOT NULL,
  `extracurricular` text NOT NULL,
  `pathwaycomment` text NOT NULL,
  `defaultpathway` int(11) NOT NULL,
  PRIMARY KEY  (`studentid`),
  KEY `site` (`site`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=671439 ;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` varchar(254) NOT NULL default '',
  `name` varchar(254) NOT NULL default '',
  `gradLevel` int(11) NOT NULL default '0',
  `order` int(11) NOT NULL default '99',
  `standardID` varchar(254) NOT NULL default '',
  `identifier` varchar(254) NOT NULL default '',
  `core` varchar(254) NOT NULL default '',
  `weight` float NOT NULL default '0',
  KEY `id` (`id`),
  KEY `gradLevel` (`gradLevel`),
  KEY `order` (`order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testinglevel`
--

DROP TABLE IF EXISTS `testinglevel`;
CREATE TABLE IF NOT EXISTS `testinglevel` (
  `studentid` int(11) NOT NULL default '0',
  `testinglevel` varchar(254) NOT NULL default '',
  `year` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`studentid`,`testinglevel`,`year`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testreports`
--

DROP TABLE IF EXISTS `testreports`;
CREATE TABLE IF NOT EXISTS `testreports` (
  `test` varchar(254) NOT NULL default '',
  `testtype` varchar(254) NOT NULL default '',
  `heading` text NOT NULL,
  `fields` text NOT NULL,
  `row` text NOT NULL,
  `ord` int(11) NOT NULL default '0',
  PRIMARY KEY  (`test`,`testtype`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` varchar(254) NOT NULL default '',
  `name` varchar(254) NOT NULL default '',
  `legend` text NOT NULL,
  `ord` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testscores`
--

DROP TABLE IF EXISTS `testscores`;
CREATE TABLE IF NOT EXISTS `testscores` (
  `tid` int(11) NOT NULL auto_increment,
  `alaskaid` int(11) NOT NULL default '0',
  `year` varchar(254) NOT NULL default '',
  `test` varchar(254) NOT NULL default '',
  `site` varchar(254) NOT NULL default '',
  `gradelevel` varchar(254) NOT NULL default '',
  `standard` varchar(254) NOT NULL default '0',
  `status` varchar(254) NOT NULL default '',
  `needed` varchar(254) NOT NULL default '',
  `value` varchar(254) NOT NULL default '',
  `difference` int(11) NOT NULL default '0',
  `raw_needed` varchar(254) NOT NULL default '',
  `raw_value` varchar(254) NOT NULL default '',
  `raw_difference` int(11) NOT NULL default '0',
  `level` varchar(254) NOT NULL default '',
  `test_date` varchar(254) NOT NULL default '',
  `importgrp` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`tid`),
  KEY `test` (`test`),
  KEY `year` (`year`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=858072 ;

-- --------------------------------------------------------

--
-- Table structure for table `testscoresmap`
--

DROP TABLE IF EXISTS `testscoresmap`;
CREATE TABLE IF NOT EXISTS `testscoresmap` (
  `test` varchar(254) NOT NULL default '',
  `standard` varchar(254) NOT NULL default '',
  `heading` varchar(254) NOT NULL default '',
  `subject` varchar(254) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  `second` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`test`,`standard`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_save_import_order`
--

DROP TABLE IF EXISTS `test_save_import_order`;
CREATE TABLE IF NOT EXISTS `test_save_import_order` (
  `test` varchar(254) NOT NULL default '',
  `import` text NOT NULL,
  PRIMARY KEY  (`test`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmpimport`
--

DROP TABLE IF EXISTS `tmpimport`;
CREATE TABLE IF NOT EXISTS `tmpimport` (
  `p0` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `p8` text NOT NULL,
  `p9` text NOT NULL,
  `p10` text NOT NULL,
  `p11` text NOT NULL,
  `p12` text NOT NULL,
  `p13` text NOT NULL,
  `p14` text NOT NULL,
  `p15` text NOT NULL,
  `p16` text NOT NULL,
  `p17` text NOT NULL,
  `p18` text NOT NULL,
  `p19` text NOT NULL,
  `p20` text NOT NULL,
  `p21` text NOT NULL,
  `p22` text NOT NULL,
  `p23` text NOT NULL,
  `p24` text NOT NULL,
  `p25` text NOT NULL,
  `p26` text NOT NULL,
  `p27` text NOT NULL,
  `p28` text NOT NULL,
  `p29` text NOT NULL,
  `p30` text NOT NULL,
  `p31` text NOT NULL,
  `p32` text NOT NULL,
  `p33` text NOT NULL,
  `p34` text NOT NULL,
  `p35` text NOT NULL,
  `p36` text NOT NULL,
  `p37` text NOT NULL,
  `p38` text NOT NULL,
  `p39` text NOT NULL,
  `p40` text NOT NULL,
  `p41` text NOT NULL,
  `p42` text NOT NULL,
  `p43` text NOT NULL,
  `p44` text NOT NULL,
  `p45` text NOT NULL,
  `p46` text NOT NULL,
  `p47` text NOT NULL,
  `p48` text NOT NULL,
  `p49` text NOT NULL,
  `p50` text NOT NULL,
  `p51` text NOT NULL,
  `p52` text NOT NULL,
  `p53` text NOT NULL,
  `p54` text NOT NULL,
  `p55` text NOT NULL,
  `p56` text NOT NULL,
  `p57` text NOT NULL,
  `p58` text NOT NULL,
  `p59` text NOT NULL,
  `p60` text NOT NULL,
  `p61` text NOT NULL,
  `p62` text NOT NULL,
  `p63` text NOT NULL,
  `p64` text NOT NULL,
  `p65` text NOT NULL,
  `p66` text NOT NULL,
  `p67` text NOT NULL,
  `p68` text NOT NULL,
  `p69` text NOT NULL,
  `p70` text NOT NULL,
  `p71` text NOT NULL,
  `p72` text NOT NULL,
  `p73` text NOT NULL,
  `p74` text NOT NULL,
  `p75` text NOT NULL,
  `p76` text NOT NULL,
  `p77` text NOT NULL,
  `p78` text NOT NULL,
  `p79` text NOT NULL,
  `p80` text NOT NULL,
  `p81` text NOT NULL,
  `p82` text NOT NULL,
  `p83` text NOT NULL,
  `p84` text NOT NULL,
  `p85` text NOT NULL,
  `p86` text NOT NULL,
  `p87` text NOT NULL,
  `p88` text NOT NULL,
  `p89` text NOT NULL,
  `p90` text NOT NULL,
  `p91` text NOT NULL,
  `p92` text NOT NULL,
  `p93` text NOT NULL,
  `p94` text NOT NULL,
  `p95` text NOT NULL,
  `p96` text NOT NULL,
  `p97` text NOT NULL,
  `p98` text NOT NULL,
  `p99` text NOT NULL,
  `p100` text NOT NULL,
  `p101` text NOT NULL,
  `p102` text NOT NULL,
  `p103` text NOT NULL,
  `p104` text NOT NULL,
  `p105` text NOT NULL,
  `p106` text NOT NULL,
  `p107` text NOT NULL,
  `p108` text NOT NULL,
  `p109` text NOT NULL,
  `p110` text NOT NULL,
  `p111` text NOT NULL,
  `p112` text NOT NULL,
  `p113` text NOT NULL,
  `p114` text NOT NULL,
  `p115` text NOT NULL,
  `p116` text NOT NULL,
  `p117` text NOT NULL,
  `p118` text NOT NULL,
  `p119` text NOT NULL,
  `p120` text NOT NULL,
  `p121` text NOT NULL,
  `p122` text NOT NULL,
  `p123` text NOT NULL,
  `p124` text NOT NULL,
  `p125` text NOT NULL,
  `p126` text NOT NULL,
  `p127` text NOT NULL,
  `p128` text NOT NULL,
  `p129` text NOT NULL,
  `p130` text NOT NULL,
  `p131` text NOT NULL,
  `p132` text NOT NULL,
  `p133` text NOT NULL,
  `p134` text NOT NULL,
  `p135` text NOT NULL,
  `p136` text NOT NULL,
  `p137` text NOT NULL,
  `p138` text NOT NULL,
  `p139` text NOT NULL,
  `p140` text NOT NULL,
  `p141` text NOT NULL,
  `p142` text NOT NULL,
  `p143` text NOT NULL,
  `p144` text NOT NULL,
  `p145` text NOT NULL,
  `p146` text NOT NULL,
  `p147` text NOT NULL,
  `p148` text NOT NULL,
  `p149` text NOT NULL,
  `p150` text NOT NULL,
  `p151` text NOT NULL,
  `p152` text NOT NULL,
  `p153` text NOT NULL,
  `p154` text NOT NULL,
  `p155` text NOT NULL,
  `p156` text NOT NULL,
  `p157` text NOT NULL,
  `p158` text NOT NULL,
  `p159` text NOT NULL,
  `p160` text NOT NULL,
  `p161` text NOT NULL,
  `p162` text NOT NULL,
  `p163` text NOT NULL,
  `p164` text NOT NULL,
  `p165` text NOT NULL,
  `p166` text NOT NULL,
  `p167` text NOT NULL,
  `p168` text NOT NULL,
  `p169` text NOT NULL,
  `p170` text NOT NULL,
  `p171` text NOT NULL,
  `p172` text NOT NULL,
  `p173` text NOT NULL,
  `p174` text NOT NULL,
  `p175` text NOT NULL,
  `p176` text NOT NULL,
  `p177` text NOT NULL,
  `p178` text NOT NULL,
  `p179` text NOT NULL,
  `p180` text NOT NULL,
  `p181` text NOT NULL,
  `p182` text NOT NULL,
  `p183` text NOT NULL,
  `p184` text NOT NULL,
  `p185` text NOT NULL,
  `p186` text NOT NULL,
  `p187` text NOT NULL,
  `p188` text NOT NULL,
  `p189` text NOT NULL,
  `p190` text NOT NULL,
  `p191` text NOT NULL,
  `p192` text NOT NULL,
  `p193` text NOT NULL,
  `p194` text NOT NULL,
  `p195` text NOT NULL,
  `p196` text NOT NULL,
  `p197` text NOT NULL,
  `p198` text NOT NULL,
  `p199` text NOT NULL,
  `p200` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_grades`
--

DROP TABLE IF EXISTS `tmp_grades`;
CREATE TABLE IF NOT EXISTS `tmp_grades` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `subjectname` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `timeframe` varchar(254) NOT NULL default '',
  `schoolname` varchar(254) NOT NULL default '',
  `schoolid` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  UNIQUE KEY `studentid` (`studentid`,`subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q1`
--

DROP TABLE IF EXISTS `tmp_q1`;
CREATE TABLE IF NOT EXISTS `tmp_q1` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `subjectname` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `sublvl` varchar(254) NOT NULL default '',
  `timeframe` varchar(254) NOT NULL default '',
  `schoolid` varchar(254) NOT NULL default '',
  `schoolname` varchar(254) NOT NULL default '',
  `stayback` varchar(254) NOT NULL default '',
  `combine` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`),
  KEY `subjectid` (`subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q1_update`
--

DROP TABLE IF EXISTS `tmp_q1_update`;
CREATE TABLE IF NOT EXISTS `tmp_q1_update` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `scorehigh` varchar(254) NOT NULL default '',
  `scorelow` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q1_update_low`
--

DROP TABLE IF EXISTS `tmp_q1_update_low`;
CREATE TABLE IF NOT EXISTS `tmp_q1_update_low` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q2`
--

DROP TABLE IF EXISTS `tmp_q2`;
CREATE TABLE IF NOT EXISTS `tmp_q2` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `subjectname` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `sublvl` varchar(254) NOT NULL default '',
  `timeframe` varchar(254) NOT NULL default '',
  `schoolid` varchar(254) NOT NULL default '',
  `schoolname` varchar(254) NOT NULL default '',
  `stayback` varchar(254) NOT NULL default '',
  `combine` varchar(254) NOT NULL default '',
  UNIQUE KEY `studentid_2` (`studentid`,`subjectid`),
  KEY `studentid` (`studentid`),
  KEY `subjectid` (`subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q2_update`
--

DROP TABLE IF EXISTS `tmp_q2_update`;
CREATE TABLE IF NOT EXISTS `tmp_q2_update` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `scorehigh` varchar(254) NOT NULL default '',
  `scorelow` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q2_update_low`
--

DROP TABLE IF EXISTS `tmp_q2_update_low`;
CREATE TABLE IF NOT EXISTS `tmp_q2_update_low` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q3`
--

DROP TABLE IF EXISTS `tmp_q3`;
CREATE TABLE IF NOT EXISTS `tmp_q3` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `subjectname` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `sublvl` varchar(254) NOT NULL default '',
  `timeframe` varchar(254) NOT NULL default '',
  `schoolid` varchar(254) NOT NULL default '',
  `schoolname` varchar(254) NOT NULL default '',
  `stayback` varchar(254) NOT NULL default '',
  `combine` varchar(254) NOT NULL default '',
  UNIQUE KEY `studentid_2` (`studentid`,`subjectid`),
  KEY `studentid` (`studentid`),
  KEY `subjectid` (`subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q3_update`
--

DROP TABLE IF EXISTS `tmp_q3_update`;
CREATE TABLE IF NOT EXISTS `tmp_q3_update` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `scorehigh` varchar(254) NOT NULL default '',
  `scorelow` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q3_update_low`
--

DROP TABLE IF EXISTS `tmp_q3_update_low`;
CREATE TABLE IF NOT EXISTS `tmp_q3_update_low` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q4`
--

DROP TABLE IF EXISTS `tmp_q4`;
CREATE TABLE IF NOT EXISTS `tmp_q4` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `subjectname` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `sublvl` varchar(254) NOT NULL default '',
  `timeframe` varchar(254) NOT NULL default '',
  `schoolid` varchar(254) NOT NULL default '',
  `schoolname` varchar(254) NOT NULL default '',
  `stayback` varchar(254) NOT NULL default '',
  `combine` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`),
  KEY `subjectid` (`subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q4_update`
--

DROP TABLE IF EXISTS `tmp_q4_update`;
CREATE TABLE IF NOT EXISTS `tmp_q4_update` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `scorehigh` varchar(254) NOT NULL default '',
  `scorelow` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_q4_update_low`
--

DROP TABLE IF EXISTS `tmp_q4_update_low`;
CREATE TABLE IF NOT EXISTS `tmp_q4_update_low` (
  `studentid` varchar(254) NOT NULL default '',
  `subjectid` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `updatescore` varchar(254) NOT NULL default '',
  `kind` varchar(254) NOT NULL default '',
  `dummy1` varchar(254) NOT NULL default '',
  `dummy2` varchar(254) NOT NULL default '',
  KEY `studentid` (`studentid`,`subjectid`,`kind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transcript`
--

DROP TABLE IF EXISTS `transcript`;
CREATE TABLE IF NOT EXISTS `transcript` (
  `studentid` int(11) NOT NULL default '0',
  `subjectid` varchar(254) NOT NULL default '',
  `subjectname` varchar(254) NOT NULL default '',
  `score` varchar(254) NOT NULL default '',
  `timeframe` varchar(254) NOT NULL default '',
  `schoolid` varchar(254) NOT NULL default '',
  `schoolname` varchar(254) NOT NULL default '',
  `year` int(11) NOT NULL default '0',
  `quarter` varchar(254) NOT NULL default '',
  `gpa` float NOT NULL default '0',
  `cdate` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `grp` timestamp NOT NULL default '0000-00-00 00:00:00',
  KEY `timeframe` (`timeframe`),
  KEY `quarter` (`quarter`),
  KEY `score` (`score`),
  KEY `studentid` (`studentid`),
  KEY `year` (`year`),
  KEY `subjectid` (`subjectid`),
  KEY `subjectname` (`subjectname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL auto_increment,
  `user` varchar(254) NOT NULL default '',
  `pwd` varchar(64) NOT NULL default '',
  `privilegeA` bigint(20) NOT NULL default '0',
  `privilegeB` bigint(20) NOT NULL default '0',
  `scopeA` bigint(254) NOT NULL default '0',
  `scopeB` bigint(20) NOT NULL default '0',
  `name` varchar(254) NOT NULL default '',
  `status` varchar(254) NOT NULL default 'active',
  `email` varchar(254) NOT NULL default '',
  `site` varchar(254) NOT NULL default '',
  `type` varchar(254) NOT NULL default '',
  `studentID` varchar(254) NOT NULL default '',
  `homeroom` varchar(254) NOT NULL default '',
  `reading` varchar(254) NOT NULL default '',
  `tutor` varchar(254) NOT NULL default '',
  PRIMARY KEY  (`userid`),
  KEY `user` (`user`),
  KEY `pwd` (`pwd`),
  KEY `status` (`status`),
  KEY `site` (`site`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=684 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
