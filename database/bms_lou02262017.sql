/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-26 20:05:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_access`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_access`;
CREATE TABLE `tbl_access` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `clientrefkey` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `backpass` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `log_flag` int(11) DEFAULT NULL,
  `brgy_id` int(11) DEFAULT NULL,
  `brgy_name` varchar(100) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `loginKey` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `sessionKey` varchar(255) DEFAULT NULL,
  `lastLog` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `logout_log` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_access
-- ----------------------------
INSERT INTO `tbl_access` VALUES ('1', null, 'mactan', '3f4ec9929532e69e1c4961e037e04d3b', 'mactan', 'mactan@llc.com', 'Barangay', '', 'Mactan', '1', '4', 'Mactan', '1', 'Lapu-Lapu', '1', null, null, null, null, null, null);
INSERT INTO `tbl_access` VALUES ('2', null, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'loubrando@islgrp.com', 'Loubrando', 'Garcia', 'Dejito', '1', '99', 'Admin', '1', 'Lapu-Lapu', '99', null, null, null, null, null, null);
INSERT INTO `tbl_access` VALUES ('3', null, 'pajo', '161207b37aa99ba5ddc42883d5993f52', 'pajo', 'pajo@llc.com', 'Baranagay', null, 'Pajo', '0', '1', 'Pajo', '1', 'Lapu-Lapu', '1', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `tbl_action_log`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_action_log`;
CREATE TABLE `tbl_action_log` (
  `aId` bigint(20) NOT NULL AUTO_INCREMENT,
  `aModule` varchar(255) NOT NULL,
  `aSubId` bigint(20) NOT NULL,
  `aRemark` text,
  `aCreateBy` varchar(255) DEFAULT NULL,
  `aCreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_action_log
-- ----------------------------
INSERT INTO `tbl_action_log` VALUES ('4', 'BUSINESS', '14', 'Updated Resident Details', 'admin', '2017-02-24 20:42:33');
INSERT INTO `tbl_action_log` VALUES ('5', 'BUSINESS', '17', 'Created this business information', 'admin', '2017-02-24 20:42:36');
INSERT INTO `tbl_action_log` VALUES ('6', 'RESIDNET', '0', 'Reisdent Added', null, '2017-02-26 08:30:00');
INSERT INTO `tbl_action_log` VALUES ('7', 'RESIDNET', '3', 'Reisdent Added', null, '2017-02-26 08:33:20');
INSERT INTO `tbl_action_log` VALUES ('8', 'RESIDNET', '4', 'Reisdent Added', null, '2017-02-26 08:34:09');
INSERT INTO `tbl_action_log` VALUES ('9', 'RESIDNET', '5', 'Reisdent Added', 'admin', '2017-02-26 08:35:07');
INSERT INTO `tbl_action_log` VALUES ('10', 'RESIDNET', '6', 'Reisdent Added', 'admin', '2017-02-26 08:43:00');
INSERT INTO `tbl_action_log` VALUES ('11', 'BUSINESS', '14', 'Delete Business ID no. 14', 'admin', '2017-02-26 08:44:37');
INSERT INTO `tbl_action_log` VALUES ('12', 'BUSINESS', '16', 'Delete Business ID no. 16', 'admin', '2017-02-26 08:44:43');
INSERT INTO `tbl_action_log` VALUES ('13', 'RESIDNET', '7', 'Reisdent Added', 'admin', '2017-02-26 09:13:38');
INSERT INTO `tbl_action_log` VALUES ('14', 'BUSINESS', '0', 'Delete Business ID no. ', 'admin', '2017-02-26 09:19:43');
INSERT INTO `tbl_action_log` VALUES ('15', 'RESIDENT', '3', 'Delete Business ID no. 3', 'admin', '2017-02-26 09:22:50');
INSERT INTO `tbl_action_log` VALUES ('16', 'RESIDENT', '6', 'Delete Business ID no. 6', 'admin', '2017-02-26 09:22:57');
INSERT INTO `tbl_action_log` VALUES ('17', 'RESIDENT', '4', 'Delete Business ID no. 4', 'admin', '2017-02-26 09:23:01');
INSERT INTO `tbl_action_log` VALUES ('18', 'RESIDENT', '5', 'Delete Business ID no. 5', 'admin', '2017-02-26 09:23:05');
INSERT INTO `tbl_action_log` VALUES ('19', 'RESIDENT', '9', 'Delete Business ID no. 9', 'admin', '2017-02-26 09:29:20');
INSERT INTO `tbl_action_log` VALUES ('20', 'RESIDENT', '10', 'Delete Business ID no. 10', 'admin', '2017-02-26 09:29:26');
INSERT INTO `tbl_action_log` VALUES ('21', 'RESIDENT', '8', 'Delete Resident ID no. 8', 'admin', '2017-02-26 09:30:05');
INSERT INTO `tbl_action_log` VALUES ('22', 'RESIDNET', '11', 'Reisdent Added', 'admin', '2017-02-26 09:31:03');

-- ----------------------------
-- Table structure for `tbl_auto_numbers`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_auto_numbers`;
CREATE TABLE `tbl_auto_numbers` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `auEnable` int(11) DEFAULT NULL,
  `auKeyname` varchar(255) DEFAULT NULL,
  `auPrefix` varchar(255) DEFAULT NULL,
  `auValue` bigint(20) DEFAULT NULL,
  `auIncrement` int(11) DEFAULT NULL,
  `auDigits` int(11) DEFAULT NULL,
  `auMaxVal` bigint(20) DEFAULT NULL,
  `auRunningVal` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_auto_numbers
-- ----------------------------
INSERT INTO `tbl_auto_numbers` VALUES ('1', '1', 'BPERMIT', null, '0', '1', '5', '99999', null);
INSERT INTO `tbl_auto_numbers` VALUES ('2', '1', 'RID', 'RES-', '0', '1', '5', '99999', null);
INSERT INTO `tbl_auto_numbers` VALUES ('3', '1', 'HID', 'H-', '0', '1', '5', '99999', null);
INSERT INTO `tbl_auto_numbers` VALUES ('4', '1', 'BID', 'B-', '0', '1', '5', '99999', null);

-- ----------------------------
-- Table structure for `tbl_business`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_business`;
CREATE TABLE `tbl_business` (
  `bId` bigint(20) NOT NULL AUTO_INCREMENT,
  `bLogo` varchar(255) DEFAULT NULL,
  `bPermitNo` varchar(255) DEFAULT NULL,
  `bType` bigint(20) DEFAULT NULL,
  `bName` varchar(255) DEFAULT NULL,
  `bDesc` text,
  `bAddress` text,
  `bContact` varchar(255) DEFAULT NULL,
  `bFax` varchar(255) DEFAULT NULL,
  `bEmail` varchar(255) DEFAULT NULL,
  `bWebsite` varchar(255) DEFAULT NULL,
  `bCleranceFee` varchar(255) DEFAULT NULL,
  `bStatus` varchar(255) DEFAULT NULL,
  `bRequestDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `bRemark` text,
  `bCreatedBy` varchar(255) DEFAULT NULL,
  `bCreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `bEditedBy` varchar(255) DEFAULT NULL,
  `bEditedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_business
-- ----------------------------
INSERT INTO `tbl_business` VALUES ('15', null, null, '5', 'saaf', 'afdadfd', 'gtjukyk', 'nmnmgy', 'ytutyu', 'ylujgkgj', 'hfhrte', '6754', 'PENDING', '2017-02-23 15:55:56', 'Definition and Usage\nThe reload() method is used to reload the current document.\n\nThe reload() method does the same as the reload button in your browser.\n\nBy default, the reload() method reloads the page from the cache, but you can force it to reload the page from the server by setting the forceGet parameter to true: location.reload(true).', 'admin', '2017-02-23 15:55:56', 'admin', '2017-02-23 08:55:56');
INSERT INTO `tbl_business` VALUES ('17', null, null, '1', 'dfds', 'dfsdf', 'sdfsd', 'dsfsd', 'sdfsd', 'df', 'dsfds', '33', 'PENDING', '2017-02-24 01:24:13', 'fdafafaffasa', 'admin', '2017-02-24 01:24:13', null, null);

-- ----------------------------
-- Table structure for `tbl_business_owner`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_business_owner`;
CREATE TABLE `tbl_business_owner` (
  `oid` bigint(20) NOT NULL AUTO_INCREMENT,
  `bid` bigint(20) DEFAULT NULL,
  `rid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_business_owner
-- ----------------------------
INSERT INTO `tbl_business_owner` VALUES ('8', '15', '2');
INSERT INTO `tbl_business_owner` VALUES ('10', '17', '1');

-- ----------------------------
-- Table structure for `tbl_business_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_business_type`;
CREATE TABLE `tbl_business_type` (
  `tId` bigint(20) NOT NULL AUTO_INCREMENT,
  `tName` varchar(255) DEFAULT NULL,
  `tClearanceFee` varchar(255) DEFAULT NULL,
  `tCreatedBy` varchar(255) DEFAULT NULL,
  `tCreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tEditedBy` varchar(255) DEFAULT NULL,
  `tEditedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_business_type
-- ----------------------------
INSERT INTO `tbl_business_type` VALUES ('1', 'Sole Traders', '100', 'admin', '2017-02-18 17:09:06', null, '2017-02-18 17:09:06');
INSERT INTO `tbl_business_type` VALUES ('2', 'Partnerships', '200', 'admin', '2017-02-18 17:07:53', null, null);
INSERT INTO `tbl_business_type` VALUES ('3', 'Companies', '300', 'admin', '2017-02-18 17:08:13', null, null);
INSERT INTO `tbl_business_type` VALUES ('4', 'Franchises', '400', 'admin', '2017-02-18 17:08:29', null, null);
INSERT INTO `tbl_business_type` VALUES ('5', 'Private companies', '500', 'admin', '2017-02-18 17:09:20', null, null);
INSERT INTO `tbl_business_type` VALUES ('6', 'Public companies', '600', 'admin', '2017-02-18 17:09:40', null, null);

-- ----------------------------
-- Table structure for `tbl_resident`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_resident`;
CREATE TABLE `tbl_resident` (
  `rId` int(11) NOT NULL AUTO_INCREMENT,
  `rFname` varchar(50) DEFAULT NULL,
  `rMname` varchar(50) DEFAULT NULL,
  `rLname` varchar(50) DEFAULT NULL,
  `rImage` varchar(100) DEFAULT NULL,
  `rAge` int(11) DEFAULT NULL,
  `rGender` varchar(10) DEFAULT NULL,
  `rEmployment` varchar(20) DEFAULT NULL,
  `rCivil_status` varchar(10) DEFAULT NULL,
  `rVoter` varchar(5) DEFAULT NULL,
  `rBirthdate` date DEFAULT NULL,
  `rContact_no` varchar(15) DEFAULT NULL,
  `rStatus` varchar(20) DEFAULT NULL,
  `rBarangay` varchar(20) DEFAULT NULL,
  `rSitio` varchar(20) DEFAULT NULL,
  `rDate_added` datetime DEFAULT NULL,
  `rAdded_by` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`rId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_resident
-- ----------------------------
INSERT INTO `tbl_resident` VALUES ('1', 'LOUBRANDO', 'GARCIA', 'DEJITO', null, '25', 'MALE', 'EMPLOYED', 'SINGLE', 'YES', '1992-06-03', '09254612799', 'RESIDING', null, null, null, null);
INSERT INTO `tbl_resident` VALUES ('2', 'BANDOY', 'DEJITO', 'CUERVO', null, '25', 'MALE', 'EMPLOYED', 'SINGLE', 'YES', '1992-06-03', '09254612799', 'RESIDING', null, null, null, null);
INSERT INTO `tbl_resident` VALUES ('7', 'Al Bryan', 'Agbon', 'Branzuela', null, '26', 'Male', 'Employed', 'Single', 'Yes', '0000-00-00', '09876543211', null, 'Pajo', 'Mangga', '2017-02-26 09:13:38', 'admin');
INSERT INTO `tbl_resident` VALUES ('11', 'Rodrigo', 'Roa', 'Duterte', null, '50', 'Female', 'Employed', 'Married', 'No', '1970-03-05', '12345678', null, 'Pusok', 'Mustang', '2017-02-26 09:31:03', 'admin');

-- ----------------------------
-- View structure for `view_business`
-- ----------------------------
DROP VIEW IF EXISTS `view_business`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_business` AS select `tbl_business`.`bId` AS `bId`,`tbl_business`.`bType` AS `bType`,`tbl_business`.`bName` AS `bName`,`tbl_business`.`bDesc` AS `bDesc`,`tbl_business`.`bAddress` AS `bAddress`,`tbl_business`.`bContact` AS `bContact`,`tbl_business`.`bFax` AS `bFax`,`tbl_business`.`bEmail` AS `bEmail`,`tbl_business`.`bWebsite` AS `bWebsite`,`tbl_business`.`bCleranceFee` AS `bCleranceFee`,`tbl_business`.`bStatus` AS `bStatus`,`tbl_business`.`bRequestDate` AS `bRequestDate`,`tbl_business`.`bRemark` AS `bRemark`,`tbl_business`.`bCreatedBy` AS `bCreatedBy`,`tbl_business`.`bCreatedDate` AS `bCreatedDate`,`tbl_business`.`bEditedBy` AS `bEditedBy`,`tbl_business`.`bEditedDate` AS `bEditedDate`,`tbl_business_type`.`tId` AS `tId`,`tbl_business_type`.`tName` AS `tName`,`tbl_business_type`.`tClearanceFee` AS `tClearanceFee`,`bms`.`tbl_resident`.`res_id` AS `res_id`,`bms`.`tbl_resident`.`fname` AS `fname`,`bms`.`tbl_resident`.`mname` AS `mname`,`bms`.`tbl_resident`.`lname` AS `lname`,`bms`.`tbl_resident`.`display_picture` AS `display_picture`,`bms`.`tbl_resident`.`age` AS `age`,`bms`.`tbl_resident`.`gender` AS `gender`,`bms`.`tbl_resident`.`employment` AS `employment`,`bms`.`tbl_resident`.`civil_status` AS `civil_status`,`bms`.`tbl_resident`.`voter` AS `voter`,`bms`.`tbl_resident`.`birthdate` AS `birthdate`,`bms`.`tbl_resident`.`mobile_no` AS `mobile_no`,`bms`.`tbl_resident`.`tel_no` AS `tel_no`,`bms`.`tbl_resident`.`status` AS `status`,`bms`.`tbl_resident`.`barangay` AS `barangay`,`bms`.`tbl_resident`.`sitio` AS `sitio`,`bms`.`tbl_business`.`bLogo` AS `bLogo`,`bms`.`tbl_business`.`bPermitNo` AS `bPermitNo` from (((`tbl_business` join `tbl_business_type` on((`bms`.`tbl_business`.`bType` = `bms`.`tbl_business_type`.`tId`))) join `tbl_business_owner` on((`bms`.`tbl_business`.`bId` = `bms`.`tbl_business_owner`.`bid`))) join `tbl_resident` on((`bms`.`tbl_business_owner`.`rid` = `bms`.`tbl_resident`.`res_id`)));
