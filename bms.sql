/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : bms

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-02-22 12:14:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_access
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
-- Table structure for tbl_business
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_business
-- ----------------------------
INSERT INTO `tbl_business` VALUES ('10', null, '', '2', 'AK Store', 'Sample Business', 'Pusok, Lapu-Lapu City Cebu', '12345', '2345', '343-7675', 'https://www.youtube.com/watch?v=0yW7w8F2TVA', '1000', 'PENDING', '2017-02-21 12:47:06', 'sample rni', 'admin', '2017-02-21 12:47:06', null, null);

-- ----------------------------
-- Table structure for tbl_business_owner
-- ----------------------------
DROP TABLE IF EXISTS `tbl_business_owner`;
CREATE TABLE `tbl_business_owner` (
  `oid` bigint(20) NOT NULL AUTO_INCREMENT,
  `bid` bigint(20) DEFAULT NULL,
  `rid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_business_owner
-- ----------------------------
INSERT INTO `tbl_business_owner` VALUES ('1', '10', '1');
INSERT INTO `tbl_business_owner` VALUES ('2', '10', '2');

-- ----------------------------
-- Table structure for tbl_business_type
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
-- Table structure for tbl_resident
-- ----------------------------
DROP TABLE IF EXISTS `tbl_resident`;
CREATE TABLE `tbl_resident` (
  `res_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `display_picture` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `employment` varchar(20) DEFAULT NULL,
  `civil_status` varchar(10) DEFAULT NULL,
  `voter` varchar(5) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `tel_no` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `barangay` varchar(20) DEFAULT NULL,
  `sitio` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_resident
-- ----------------------------
INSERT INTO `tbl_resident` VALUES ('1', 'LOUBRANDO', 'GARCIA', 'DEJITO', null, '25', 'MALE', 'EMPLOYED', 'SINGLE', 'YES', '1992-06-03', '09254612799', null, 'RESIDING', null, null);
INSERT INTO `tbl_resident` VALUES ('2', 'BANDOY', 'DEJITO', 'CUERVO', null, '25', 'MALE', 'EMPLOYED', 'SINGLE', 'YES', '1992-06-03', '09254612799', null, 'RESIDING', null, null);

-- ----------------------------
-- View structure for view_business
-- ----------------------------
DROP VIEW IF EXISTS `view_business`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `view_business` AS SELECT
tbl_business.bId,
tbl_business.bType,
tbl_business.bName,
tbl_business.bDesc,
tbl_business.bAddress,
tbl_business.bContact,
tbl_business.bFax,
tbl_business.bEmail,
tbl_business.bWebsite,
tbl_business.bCleranceFee,
tbl_business.bStatus,
tbl_business.bRequestDate,
tbl_business.bRemark,
tbl_business.bCreatedBy,
tbl_business.bCreatedDate,
tbl_business.bEditedBy,
tbl_business.bEditedDate,
tbl_business_type.tId,
tbl_business_type.tName,
tbl_business_type.tClearanceFee,
tbl_resident.res_id,
tbl_resident.fname,
tbl_resident.mname,
tbl_resident.lname,
tbl_resident.display_picture,
tbl_resident.age,
tbl_resident.gender,
tbl_resident.employment,
tbl_resident.civil_status,
tbl_resident.voter,
tbl_resident.birthdate,
tbl_resident.mobile_no,
tbl_resident.tel_no,
tbl_resident.`status`,
tbl_resident.barangay,
tbl_resident.sitio
FROM
tbl_business
INNER JOIN tbl_business_type ON tbl_business.bType = tbl_business_type.tId
INNER JOIN tbl_business_owner ON tbl_business.bId = tbl_business_owner.bid
INNER JOIN tbl_resident ON tbl_business_owner.rid = tbl_resident.res_id ;
SET FOREIGN_KEY_CHECKS=1;
